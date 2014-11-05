<?php

namespace PDS\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  
    private $loginService;
  
    public function indexAction()
    {
        $this->initService(1);
        $formBuilder = $this->get('form.factory')->createBuilder('form', $this->loginService);
        $formBuilder->add('mail',      'email')
                    ->add('login',     'text')
                    ->add('pwd',       'password')
                    ->add('pwd2',      'password')
                    ->add('agree',     'checkbox')
                    ->add('submit',    'submit');
        $form = $formBuilder->getForm();
        var_dump($form);exit;
      
        return $this->render(
          'PDSLoginBundle:Default:index.html.twig',
          $this->loginService->getParams()
        );
    }
    
    private function initService($type = 1)
    {
        $this->loginService = $this->container->get('pds_login.loginService');
        $this->loginService->setRequest($this->getRequest());
        $this->loginService->setType($type);
        //$this->loginService->validate();
    }
}
