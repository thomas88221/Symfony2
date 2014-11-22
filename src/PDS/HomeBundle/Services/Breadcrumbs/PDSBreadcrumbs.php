<?php
// PDS\HomeBundle\Services\Breadcrumbs\PDSBreadcrumbs.php

namespace PDS\HomeBundle\Services\Breadcrumbs;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PDSBreadcrumbs
{
    private $datas = array();
    private $request;
    private $translator;
    private $controller;
    
    public function init(Request $request, Translator $translator, Controller $controller)
    {
        $this->request = $request;
        $this->translator = $translator;
        $this->controller = $controller;
        $this->datas = array(
            0 => array(
                'icon' => 'home',
                'link' => $this->controller->generateUrl('pds_home_homepage'),
                'title' => $this->translator->trans('menu.home')
            )
        );
    }
    
    public function get($action)
    {
        switch($action){
            case 'PDS\HomeBundle\Controller\DefaultController::indexAction':
                $this->datas[] = array(
                    'current' => true,
                    'title' => $this->translator->trans('menu.dashboard')
                );
                break;
            case 'PDS\FriendsBundle\Controller\DefaultController::indexAction':
                $this->datas[] = array(
                    'current' => true,
                    'title' => $this->translator->trans('menu.friends')
                );
                break;
        }
        return $this->datas;
    }
}