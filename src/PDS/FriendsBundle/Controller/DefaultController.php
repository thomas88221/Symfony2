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
            $limit = (integer) $datas->get('limit');
            $offset = (integer) $datas->get('offset');
            if (empty($query)) {
                return new JsonResponse(
                    $translator->trans('errors.search.empty'),
                    400
                );
            }
            $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
            $req = $repository->searchContacts(
                $this->get('database_connection'),
                $query,
                $this->getUser()->getId(),
                $limit,
                $offset
            );
            $users = array();
            if (!empty($req)) {
                foreach ($req as $res) {
                    $users[$res['id']] = array(
                        'id'       => $res['id'],
                        'username' => $res['username'],
                        'img'      => '/avatars/'.$res['avatar'],
                        'th'       => '/avatars/'.substr($res['avatar'], 0, -strlen(strrchr($res['avatar'], '.'))).'_th.'.pathinfo($res['avatar'], PATHINFO_EXTENSION),
                        'url'      => $this->generateUrl('pds_friends_profil', array('id' => $res['id'], 'name' => $res['username'])),
                        'text'     => $translator->trans('search.profil')
                    );
                }
            }
            
            return new JsonResponse($users);
        } else {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
    }
    
    public function profilAction($id, $name)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
        $user = $repository->find($id);
        // Test url correct
        $urlOk = $this->generateUrl('pds_friends_profil', array('id' => $user->getId(), 'name' => $user->getUsername()));
        $urlCurrent = $this->generateUrl('pds_friends_profil', array('id' => $id, 'name' => $name));
        if ($urlCurrent != $urlOk) {
            return $this->redirect($urlOk);
        }
        
        $translator = $this->get('translator');
        $menu = $this->get('menu');
        $menu->init($this->getRequest(), $translator, $this);
        $br = $this->get('breadcrumbs');
        $br->init($this->getRequest(), $translator, $this);
        return $this->render(
            'PDSFriendsBundle:Default:profil.html.twig',
            array(
                'bundle' => $menu->get('bundle'),
                'title' => $translator->trans('menu.profil', array('%name%' => $user->getUsername())),
                'breadcrumbs' => $br->get($menu->get('controller')),
                'user' => $user
            )
        );
    }
}
