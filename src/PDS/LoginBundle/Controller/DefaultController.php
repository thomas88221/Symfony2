<?php

namespace PDS\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class DefaultController extends Controller
{
    public function indexAction(/*Request $request*/)
    {
        //$this->container->setParameter('request', $this->getRequest());
        $loginService = $this->container->get('pds_login.loginService');
        
        return $this->render(
          'PDSLoginBundle:Default:index.html.twig',
          array(
            'type' => '',
            'message' => 'Test',
            'messageClass' => 'success',
            'login' => 'Thomas',
            'mail' => ''
          )
        );
    }
}
