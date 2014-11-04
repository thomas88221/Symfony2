<?php

namespace PDS\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PDSLoginBundle:Default:index.html.twig');
    }
}
