<?php
// PDS\HomeBundle\Services\Menu\PDSMenu.php

namespace PDS\HomeBundle\Services\Menu;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PDSMenu
{
    private $request;
    private $translator;
    private $controller;
    
    public function init(Request $request, Translator $translator, Controller $controller)
    {
        $this->request = $request;
        $this->translator = $translator;
        $this->controller = $controller;
    }
    
    public function get($action)
    {
        switch($action){
            case 'bundle':
                $controler = $this->request->attributes->get('_controller');
                $tab = explode('\\', $controler);
                return $tab[1];
                break;
            case 'controller':
                return $this->request->attributes->get('_controller');
                break;
        }
    }
}