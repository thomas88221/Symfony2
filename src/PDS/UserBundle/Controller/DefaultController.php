<?php

namespace PDS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
  
    private $userService;
  
    public function loginAction(Request $request)
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
        
        $form = $this->createFormBuilder($this->userService, array('validation_groups' => array('login')))
                     ->add('mail',           'text')
                     ->add('login',          'text')
                     ->add('pwd',            'password')
                     ->add('mail_register',  'text')
                     ->add('login_register', 'text')
                     ->add('pwd_register',   'password')
                     ->add('pwd2_register',  'password')
                     ->add('agree',          'checkbox')
                     ->add('rememberMe',     'checkbox', array('required' => false))
                     ->add('submit',         'submit')
                     ->getForm();
        
        return $this->render(
          'PDSUserBundle:Default:index.html.twig',
          array(
            'type'         => 1,
            'message'      => '',
            'messageClass' => '',
            'form'         => $form->createView()
          )
        );
    }
    
    public function registerAction(Request $request)
    {
        return $this->redirect($this->generateUrl('pds_user_homepage').'#signup-box');
    }
    
    public function forgetAction(Request $request)
    {
        return $this->redirect($this->generateUrl('pds_user_homepage').'#forgot-box');
    }
}
