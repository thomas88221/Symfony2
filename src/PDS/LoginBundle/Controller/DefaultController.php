<?php

namespace PDS\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
  
    private $loginService;
  
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        
        // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        if(!empty($error)){
            var_dump($error);exit;
        }
        
        
        $this->initService(1, $request);
        return $this->render(
          'PDSLoginBundle:Default:index.html.twig',
          $this->loginService->getParams()
        );
    }
    
    private function initService($type = 1, Request $request)
    {
        switch($type){
            case 1:
                $params = array('validation_groups' => array('login'));
                break;
            case 2:
                $params = array('validation_groups' => array('register'));
                break;
            case 3:
                $params = array('validation_groups' => array('forget'));
                break;
        }
        $this->loginService = $this->container->get('pds_login.loginService');
        $this->loginService->setRequest($request);
        $this->loginService->setType($type);
        $this->loginService->setTranslator($this->get('translator'));
        $form = $this->createFormBuilder($this->loginService, $params)
                     ->add('mail',           'text')
                     ->add('login',          'text')
                     ->add('pwd',            'password')
                     ->add('mail_register',  'text')
                     ->add('login_register', 'text')
                     ->add('pwd_register',   'password')
                     ->add('pwd2_register',  'password')
                     ->add('agree',          'checkbox')
                     ->add('rememberMe',     'checkbox')
                     ->add('submit',         'submit')
                     ->getForm();
        
        $this->loginService->setForm($form);
        $this->loginService->validate();
    }
    
    public function registerAction(Request $request)
    {
        $this->initService(2, $request);
        return $this->redirect($this->generateUrl('pds_login_homepage').'#signup-box');
    }
    
    public function forgetAction(Request $request)
    {
        $this->initService(3, $request);
        return $this->redirect($this->generateUrl('pds_login_homepage').'#forgot-box');
    }
}
