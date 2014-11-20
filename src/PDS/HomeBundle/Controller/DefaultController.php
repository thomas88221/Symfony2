<?php

namespace PDS\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

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
                    /*$tab = explode('/', $value);
                    if(empty($tab[0]) || empty($tab[1]) || empty($tab[2])){
                        return new JsonResponse(
                            $translator->trans('errors.update.date'),
                            400
                        );
                    }
                    $date = new Dates();
                    $date->setDate($tab[0], $tab[1], $tab[2]);
                    if((time() - $date->getTimestamp()) < 3600*24*365*16){
                        return new JsonResponse(
                            $translator->trans('errors.update.date'),
                            400
                        );
                    }
                    $user->setBirthday("{$tab[2]}-{$tab[1]}-{$tab[0]} 00:00:00");*/
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
}
