<?php

namespace PDS\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Image;
use PDS\UserBundle\Entity\Messages;
use Assetic\Exception\Exception;

class DefaultController extends Controller
{
    public function indexAction() {
        return $this->render('PDSHomeBundle:Default:index.html.twig');
    }
    
    public function updateAction() {
        $request = $this->getRequest();
        $translator = $this->get('translator');
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            $em = $this->getDoctrine()->getEntityManager();
            $datas = $request->request;
            $user = $this->getUser();
            $em->persist($user);
            $name = $datas->get('name');
            $value = strip_tags($datas->get('value'));
            if(empty($name) || empty($value)){
                return new JsonResponse(
                    $translator->trans('errors.search.params'),
                    400
                );
            }
            switch($name){
                case 'country': $user->setCountry($value); break;
                case 'town': $user->setTown($value); break;
                case 'about': $user->setVarious($value); break;
                case 'age':
                    $tab = explode('/', $value);
                    $string = $tab[2].'-'.$tab[1].'-'.$tab[0];
                    $date = new \DateTime($string);
                    $now = new \DateTime();
                    $diff = $now->diff($date);
                    if($diff->y < 16){
                        return new JsonResponse(
                            $translator->trans('errors.update.dateToYoung'),
                            400
                        );
                    }else{
                        $user->setBirthday($date);
                    }
                    break;
                case 'social':
                    $type = $datas->get('type');
                    $user->setSocialType($type, $value);
                    break;
            }
            try{
                $em->flush();
                return new JsonResponse(
                    array(
                        'status' => 1,
                        'msg' => 'OK'
                    )
                );
            }catch(\Exception $e){
                return new JsonResponse(
                    $translator->trans('errors.update.save').$e->getMessage(),
                    500
                );
            }
        } else {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
    }
    
    public function changeAvatarAction() {
        $request = $this->getRequest();
        $translator = $this->get('translator');
        if($request->getMethod() !== 'POST'){
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        } else {
            $file = $request->files->get('avatar');
            if(empty($file)){
                $this->get('session')->getFlashBag()->add(
                    'errors',
                    $translator->trans('errors.update.avatar_empty')
                );
                return $this->redirect($this->generateUrl('pds_home_homepage'));
            }else{
                $user = $this->getUser();
                $ext = $file->guessExtension();
                $name = $user->getId().'.'.$ext;
                $file->move(WEB_PATH.'/avatars', $name);
                $fileTh = $this->get('imageTools');
                $fileTh->setFile(WEB_PATH.'/avatars/'.$name);
                if ($fileTh->get('error') == 0) {
                    $fileTh->resize(40);
                    $fileTh->rename($user->getId().'_th');
                    $fileTh->save();
                }
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
                $user->setAvatar($name);
                $em->flush();
            }
        }
        return $this->redirect($this->generateUrl('pds_home_homepage'));
    }
    
    public function inboxAction($page = 1) {
        $request = $this->getRequest();
        $translator = $this->get('translator');
        $user = $this->getUser();
        $con = $this->get('database_connection');
        $limit = 25;
        if ($page < 1) $page = 1;
        $repo = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Messages');
        $messages = $repo->getAllMessagesJoinUsers($con, $user->getId(), $limit, ($page - 1) * $limit);
        $nbMessages = $repo->getAllMessagesCount($con, $user->getId());
        $nbMessagesNotRead = $repo->getMessagesReveivedNotReadCount($con, $user->getId());
        $nbPages = ceil($nbMessages / $limit);
        if ($page > $nbPages) {
            return $this->redirect($this->generateUrl('pds_home_inboxpage', array('page' => $nbPages)));
        }
        
        return $this->render(
            'PDSHomeBundle:Default:inbox.html.twig',
            array(
                'messages' => $messages,
                'nbMessages' => $nbMessages,
                'nbMessagesNotRead' => $nbMessagesNotRead,
                'nbPages' => $nbPages,
                'currentPage' => $page
            )
        );
    }
    
    public function inboxpageAction($page) {
        if ($page < 2) {
            return $this->redirect($this->generateUrl('pds_home_inbox'));
        }
        return $this->inboxAction($page);
    }
    
    public function sendMessageToAction($id){
        $repo = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
        $to = $repo->find($id);
        $translator = $this->get('translator');
        if (empty($to)) {
            throw $this->createNotFoundException();
        }
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $submit = $request->request->get('submit');
            $msg = $request->request->get('message');
            $id = (int) $request->request->get('user_to_id');
            
            if (!empty($submit)) {
                if (empty ($msg)) {
                    $this->get('session')->getFlashBag()->add(
                        'errors',
                        $translator->trans('messages.msgEmpty')
                    );
                } else {
                    if (empty($id)) {
                        $this->get('session')->getFlashBag()->add(
                            'errors',
                            $translator->trans('messages.noDest')
                        );
                    } else {
                        $em = $this->getDoctrine()->getEntityManager();
                        $to = $repo->find($id);
                        if (empty($to)) {
                            $this->get('session')->getFlashBag()->add(
                                'errors',
                                $translator->trans('messages.msgEmpty')
                            );
                        } else {
                            try{
                                $message = new Messages();
                                $em->persist($message);
                                $message->setFromUser($this->getUser()->getId());
                                $message->setToUser($id);
                                $message->setMessage($msg);
                                $message->setIsRead(false);
                                $message->setDate(new \DateTime());
                                $em->flush();
                                $this->get('session')->getFlashBag()->add(
                                    'success',
                                    $translator->trans('messages.msgSend')
                                );
                                return $this->redirect($this->generateUrl('pds_home_inbox'));
                            } catch(Exception $e) {
                                $this->get('session')->getFlashBag()->add(
                                    'errors',
                                    $translator->trans('messages.msgNotSend')
                                );
                            }
                        }
                    }
                }
            }
        }
        
        return $this->render(
            'PDSHomeBundle:Default:sendMessageTo.html.twig',
            array(
                'to' => $to
            )
        );
    }
}
