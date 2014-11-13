<?php

namespace PDS\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        );*/
        
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
}
