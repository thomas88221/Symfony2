<?php

namespace PDS\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Image;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $request = $this->getRequest();
        $controler = $request->attributes->get('_controller');
        $tab = explode('\\', $controler);
        $userManager = $this->get('fos_user.user_manager');
        $translator = $this->get('translator');
        $br = $this->get('breadcrumbs');
        $br->init($request, $translator, $this);
        
        /*$this->get('session')->getFlashBag()->add(
            'infos',
            'Vos changements ont été sauvegardés!'
        );a*/
        
        return $this->render(
            'PDSHomeBundle:Default:index.html.twig',
            array(
                'bundle' => $tab[1],
                'title' => $translator->trans('menu.dashboard'),
                'description' => $translator->trans('dashboard.description'),
                'breadcrumbs' => $br->get($controler)
            )
        );
    }
    
    public function updateAction()
    {
        $request = $this->getRequest();
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            $em = $this->getDoctrine()->getEntityManager();
            $datas = $request->request;
            $translator = $this->get('translator');
            $user = $this->getUser();
            $em->persist($user);
            $name = $datas->get('name');
            $value = strip_tags($datas->get('value'));
            if(empty($name) || empty($value)){
                return new JsonResponse(
                    $translator->trans('errors.update.params'),
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
                            $translator->trans('errors.update.date'),
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
    
    public function changeAvatarAction(){
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
                var_dump(get_class_methods($file));exit;
                $user = $this->getUser();
                $name = $user->getId().'.'.$file->guessExtension();
                $file->move(WEB_PATH.'/avatars', $name);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
                $user->setAvatar($name);
                $em->flush();
            }
        }
        return $this->redirect($this->generateUrl('pds_home_homepage'));
    }
}
