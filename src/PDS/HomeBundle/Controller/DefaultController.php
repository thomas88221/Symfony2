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
        if($this->getRequest()->isXmlHttpRequest()) {
            $response = new JsonResponse(
                array(
                    'status' => 200,
                    'message' => 'Test de focntion ajax avec symfony'
                )
            );
            return $response;
        } else {
            return new Response();
        }
    }
}
