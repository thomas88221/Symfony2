<?php

namespace PDS\FriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $translator = $this->get('translator');
        $menu = $this->get('menu');
        $menu->init($this->getRequest(), $translator, $this);
        $br = $this->get('breadcrumbs');
        $br->init($this->getRequest(), $translator, $this);
        return $this->render(
            'PDSFriendsBundle:Default:index.html.twig',
            array(
                'bundle' => $menu->get('bundle'),
                'title' => $translator->trans('menu.friends'),
                'description' => $translator->trans('friends.description'),
                'breadcrumbs' => $br->get($menu->get('controller'))
            )
        );
    }
}
