<?php
namespace PDS\UserBundle\Login;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class Login
{
    // Méthode post-login
    public function afterLogin(InteractiveLoginEvent $response){
        echo 'Post-login';
    }
}