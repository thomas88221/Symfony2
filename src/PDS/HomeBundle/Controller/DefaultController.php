<?php

namespace PDS\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PDSHomeBundle:Default:index.html.twig');
    }
}
