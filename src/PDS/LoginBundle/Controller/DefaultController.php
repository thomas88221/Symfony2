<?php

namespace PDS\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  
    private $loginService;
  
    public function indexAction(Request $request)
    {
        $this->initService(1, $request);
        $form = $this->createFormBuilder($this->loginService)
                     ->add('mail',   'text')
                     ->add('login',  'text')
                     ->add('pwd',    'password')
                     ->add('pwd2',   'password')
                     ->add('agree',  'checkbox')
                     ->add('submit', 'submit')
                     ->getForm();
        
        $this->loginService->setForm($form);
        $this->loginService->validate();
      
        return $this->render(
          'PDSLoginBundle:Default:index.html.twig',
          $this->loginService->getParams()
        );
    }
    
    private function initService($type = 1, Request $request)
    {
        $this->loginService = $this->container->get('pds_login.loginService');
        $this->loginService->setRequest($request);
        $this->loginService->setType($type);
    }
}
