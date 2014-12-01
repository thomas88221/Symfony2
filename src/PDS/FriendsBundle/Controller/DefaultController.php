<?php

namespace PDS\FriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\Criteria;

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
                'breadcrumbs' => $br->get($menu->get('controller')),
                'friends' => array()
            )
        );
    }
    
    public function searchAction()
    {
        $request = $this->getRequest();
        $translator = $this->get('translator');
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            $datas = $request->request;
            $query = $datas->get('val');
            $limit = $datas->get('limit');
            $offset = $datas->get('offset');
            if (empty($query)) {
                return new JsonResponse(
                    $translator->trans('errors.search.empty'),
                    400
                );
            }
            $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
            
            $user = $repository->find(1);
            var_dump($user);exit;
            
            return new JsonResponse(
                array()
            );
        } else {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
    }
}
