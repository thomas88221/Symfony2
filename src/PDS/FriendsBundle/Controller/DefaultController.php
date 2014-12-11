<?php

namespace PDS\FriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\Criteria;
use PDS\UserBundle\Entity\Relations;
use Assetic\Exception\Exception;
use Symfony\Component\Validator\Constraints\DateTime;
use PDS\UserBundle\Entity\Messages;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $translator = $this->get('translator');
        $menu = $this->get('menu');
        $menu->init($this->getRequest(), $translator, $this);
        $br = $this->get('breadcrumbs');
        $br->init($this->getRequest(), $translator, $this);
        $con = $this->get('database_connection');
        
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
        $friends = $repository->getAllFriends($con, $this->getUser()->getId());
        $friendsWaiting = $repository->getAllFriendsWaiting($con, $this->getUser()->getId());
        
        return $this->render(
            'PDSFriendsBundle:Default:index.html.twig',
            array(
                'bundle' => $menu->get('bundle'),
                'title' => $translator->trans('menu.friends'),
                'description' => $translator->trans('friends.description'),
                'breadcrumbs' => $br->get($menu->get('controller')),
                'friends' => $friends,
                'friendsWaiting' => $friendsWaiting
            )
        );
    }
    
    public function searchAction()
    {
        $request = $this->getRequest();
        $translator = $this->get('translator');
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            $datas = $request->request;
            $query = $datas->get('val');
            $limit = (integer) $datas->get('limit');
            $offset = (integer) $datas->get('offset');
            if (empty($query)) {
                return new JsonResponse(
                    $translator->trans('errors.search.empty'),
                    400
                );
            }
            $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
            $req = $repository->searchContacts(
                $this->get('database_connection'),
                $query,
                $this->getUser()->getId(),
                $limit,
                $offset
            );
            $users = array();
            if (!empty($req)) {
                foreach ($req as $res) {
                    $users[$res['id']] = array(
                        'id'       => $res['id'],
                        'username' => $res['username'],
                        'img'      => '/avatars/'.$res['avatar'],
                        'th'       => '/avatars/'.substr($res['avatar'], 0, -strlen(strrchr($res['avatar'], '.'))).'_th.'.pathinfo($res['avatar'], PATHINFO_EXTENSION),
                        'url'      => $this->generateUrl('pds_friends_profil', array('id' => $res['id'], 'name' => $res['username'])),
                        'text'     => $translator->trans('search.profil')
                    );
                }
            }
            
            return new JsonResponse($users);
        } else {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
    }
    
    public function profilAction($id, $name)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
        $user = $repository->find($id);
        $userCurrent = $this->getUser();
        // Test url correct
        $urlOk = $this->generateUrl('pds_friends_profil', array('id' => $user->getId(), 'name' => $user->getUsername()));
        $urlCurrent = $this->generateUrl('pds_friends_profil', array('id' => $id, 'name' => $name));
        if ($urlCurrent != $urlOk) {
            return $this->redirect($urlOk);
        }
        
        $translator = $this->get('translator');
        $menu = $this->get('menu');
        $menu->init($this->getRequest(), $translator, $this);
        $br = $this->get('breadcrumbs');
        $br->init($this->getRequest(), $translator, $this);
        
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
        $relation = $repository->findOneBy(
            array(
                'user1Id' => $userCurrent->getId(),
                'user2Id' => $id
            )
        );
        
        return $this->render(
            'PDSFriendsBundle:Default:profil.html.twig',
            array(
                'bundle' => $menu->get('bundle'),
                'title' => $translator->trans('menu.profil', array('%name%' => $user->getUsername())),
                'breadcrumbs' => $br->get($menu->get('controller')),
                'user' => $user,
                'relation' => $relation
            )
        );
    }
    
    public function sendRequestAction($id)
    {
        $user = $this->getUser();
        $translator = $this->get('translator');
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
        $relation = $repository->findOneBy(
            array(
                'user1Id' => $user->getId(),
                'user2Id' => $id
            )
        );
        if (empty($relation)) {
            try{
                $relation = new Relations();
                $relation->setUser1Id($user->getId());
                $relation->setUser2Id($id);
                $relation->setAreFriends(false);
                $relation->setRequestSended(true);
                $relation->setSendedBy($user->getId());
                $relation->setIsPending(true);
                $relation2 = clone($relation);
                $relation2->setUser1Id($id);
                $relation2->setUser2Id($user->getId());
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($relation);
                $em->persist($relation2);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    $translator->trans('messages.addFriends')
                );
            } catch(Exception $e) {
                $this->get('session')->getFlashBag()->add(
                    'errors',
                    $translator->trans('errors.addFriends')
                );
            }
        }
        return $this->redirect($this->generateUrl('pds_friends_profil', array('id' => $id, 'name' => 'user')));
    }
    
    public function sendMessageAction()
    {
        $request = $this->getRequest();
        $translator = $this->get('translator');
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            $datas = $request->request;
            $em = $this->getDoctrine()->getEntityManager();
            $id = (int) $datas->get('id');
            $msg = $datas->get('msg');
            if (empty($id) || empty($msg)) {
                return new JsonResponse(array('status' => 0, 'msg' => $translator->trans('errors.sendMessage')));
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
                    
                    return new JsonResponse(array('status' => 1, 'msg' => 'ok'));
                } catch(Exception $e) {
                    return new JsonResponse(array('status' => 0, 'msg' => $translator->trans('errors.sendMessageBdd')));
                }
            }
        } else {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
    }
}
