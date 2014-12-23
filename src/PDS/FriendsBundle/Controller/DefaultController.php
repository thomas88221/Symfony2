<?php

namespace PDS\FriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\Criteria;
use PDS\UserBundle\Entity\Relations;
use Assetic\Exception\Exception;
use Symfony\Component\Validator\Constraints\DateTime;
use PDS\UserBundle\Entity\Messages;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $con = $this->get('database_connection');
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
        $repoRelations = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
        $friends = $repository->getAllFriends($con, $this->getUser()->getId());
        $friendsWaiting = $repoRelations->getAllPendingRelationsJoinUsers($con, $this->getUser()->getId());
        
        return $this->render(
            'PDSFriendsBundle:Default:index.html.twig',
            array(
                'friends' => $friends,
                'friendsWaiting' => $friendsWaiting
            )
        );
    }
    
    public function profilAction($id, $name)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
        $user = $repository->find($id);
        $userCurrent = $this->getUser();
        if (empty ($user)) {
            throw $this->createNotFoundException();
        }
        // Test url correct
        $urlOk = $this->generateUrl('pds_friends_profil', array('id' => $user->getId(), 'name' => $user->getUsername()));
        $urlCurrent = $this->generateUrl('pds_friends_profil', array('id' => $id, 'name' => $name));
        if ($urlCurrent != $urlOk) {
            return $this->redirect($urlOk);
        }
        
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
        $relation = $repository->findOneBy(
            array(
                'user1Id' => $userCurrent->getId(),
                'user2Id' => $id
            )
        );
        
        return $this->render(
            'PDSFriendsBundle:Default:profil.html.twig',
            array(
                'user' => $user,
                'relation' => $relation
            )
        );
    }
    
    public function sendRequestAction($id)
    {
        $user = $this->getUser();
        $translator = $this->get('translator');
        $repository = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
        $relation = $repository->findOneBy(
            array(
                'user1Id' => $user->getId(),
                'user2Id' => $id
            )
        );
        if (empty($relation)) {
            try{
                $relation = new Relations();
                $relation->setUser1Id($user->getId());
                $relation->setUser2Id($id);
                $relation->setAreFriends(false);
                $relation->setRequestSended(true);
                $relation->setSendedBy($user->getId());
                $relation->setIsPending(true);
                $relation2 = clone($relation);
                $relation2->setUser1Id($id);
                $relation2->setUser2Id($user->getId());
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($relation);
                $em->persist($relation2);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    $translator->trans('messages.addFriends')
                );
            } catch(Exception $e) {
                $this->get('session')->getFlashBag()->add(
                    'errors',
                    $translator->trans('errors.addFriends')
                );
            }
        }
        return $this->redirect($this->generateUrl('pds_friends_profil', array('id' => $id, 'name' => 'user')));
    }
    
    public function sendMessageAction()
    {
        $request = $this->getRequest();
        $translator = $this->get('translator');
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            $datas = $request->request;
            $em = $this->getDoctrine()->getEntityManager();
            $id = (int) $datas->get('id');
            $msg = $datas->get('msg');
            if (empty($id) || empty($msg)) {
                return new JsonResponse(array('status' => 0, 'msg' => $translator->trans('errors.sendMessage')));
            } else {
                try{
                    $message = new Messages();
                    $em->persist($message);
                    $message->setFromUser($this->getUser()->getId());
                    $message->setToUser($id);
                    $message->setMessage($msg);
                    $message->setIsRead(false);
                    $message->setDate(new \DateTime());
                    $em->flush();
                    
                    return new JsonResponse(array('status' => 1, 'msg' => 'ok'));
                } catch(Exception $e) {
                    return new JsonResponse(array('status' => 0, 'msg' => $translator->trans('errors.sendMessageBdd')));
                }
            }
        } else {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
    }
}
