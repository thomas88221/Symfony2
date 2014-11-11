<?php

namespace PDS\UserBundle\Login;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher;

class LoginListener
{
  // Notre processeur
  protected $login;
  private $router;
  private $dispatcher;

  public function __construct(Router $router, TraceableEventDispatcher $dispatcher/*Login $login*/)
  {
      //$this->login = $login;
      // On enregistre les services dont on a besoin
      $this->router = $router;
      $this->dispatcher = $dispatcher;
  }

  /*public function processLogin(InteractiveLoginEvent $event)
  {
      var_dump($event->getAuthenticationToken()->getUser());
      exit;
      $this->login->afterLogin($event);
  }*/
  
  public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
  {
      // On demande a écouter une fois l'évènement kernel.response
      $this->dispatcher->addListener(KernelEvents::RESPONSE, array($this, 'redirectUserToProfilePage'));
  }
  
  public function redirectUserToProfilePage(FilterResponseEvent $event)
  {
      // on effectue la redirection
      $response = new RedirectResponse($this->router->generate('pds_home_homepage'));
      $event->setResponse($response);
  }
}