<?php

namespace PDS\AjaxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    private function init()
    {
        $request = $this->getRequest();
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            return array(
                $this->getUser(),
                $this->get('database_connection'),
                $this->get('translator'),
                $request->request,
                array()
            );
        } else {
            throw $this->createNotFoundException($this->get('translator')->trans('errors.update.unauthorized'));
        }
    }
    
    public function notificationsAction()
    {
        list($user, $con, $translator, $datas, $return) = $this->init();
        $repoMsg = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Messages');
        $repoUser = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
        $repoRelations = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
        $type = $datas->get('type');
        switch($type){
            case 'count':
                $return = array(
                    'messages' => $repoMsg->getMessagesReveivedNotReadCount($con, $user->getId()),
                    'divers' => $repoRelations->getUntreatedRelationsCount($con, $user->getId())
                );
                break;
            case 'getLastMessages':
                $messages = $repoMsg->getMessagesReceivedJoinUsers($con, $user->getId(), 5);
                if (!empty($messages)) {
                    foreach ($messages as $message) {
                        $message['message'] = htmlentities($message['message']);
                        $return[] = array(
                            'profil' => $this->generateUrl('pds_friends_profil', array('id' => $message['from_user'], 'name' => $message['username'])),
                            'avatar' => '/avatars/'.$message['avatar'],
                            'username' => $message['username'],
                            'message' => strlen($message['message']) > 80 ? substr($message['message'], 0, 75).' ...' : $message['message'],
                            'date' => date('d/m/y H:i', strtotime($message['date_message'])),
                            'message_id' => $message['message_id']
                        );
                    }
                }
                break;
            case 'getLastNotifs':
                $notifs = $repoRelations->getUntreatedRelationsJoinUsers($con, $user->getId(), 'r.date, r.user2_id, u.username, u.avatar');
                if (!empty($notifs)) {
                    foreach ($notifs as $notif) {
                        $return[] = array(
                            'profil' => $this->generateUrl('pds_friends_profil', array('id' => $notif['user2_id'], 'name' => $notif['username'])),
                            'avatar' => '/avatars/'.$notif['avatar'],
                            'username' => $notif['username'],
                            'id' => $notif['user2_id'],
                            'date' => date('d/m/y H:i', strtotime($notif['date']))
                        );
                    }
                }
                break;
        }
        return new JsonResponse($return);
    }
    
    public function friendsUpdateAction()
    {
        list($user, $con, $translator, $datas, $return) = $this->init();
        $repo = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
        $em = $this->getDoctrine()->getEntityManager();
        $type = $datas->get('type');
        $id = $datas->get('id');
        $relation1 = $repo->findOneBy(
            array(
                'user1Id' => $this->getUser()->getId(),
                'user2Id' => $id,
                'areFriends' => false,
                'requestSended' => true,
                'isPending' => true
            ),
            array(),
            1,
            0
        );
        $relation2 = $repo->findOneBy(
            array(
                'user2Id' => $this->getUser()->getId(),
                'user1Id' => $id,
                'areFriends' => false,
                'requestSended' => true,
                'isPending' => true
            ),
            array(),
            1,
            0
        );
        $em->persist($relation1);
        $em->persist($relation2);
        switch($type){
            case 1:
                $relation1->setAreFriends(true);
                $relation2->setAreFriends(true);
                $relation1->setIsPending(false);
                $relation2->setIsPending(false);
                $return = array(
                    'status' => 1,
                    'msg' => $translator->trans('success.friends.addOk')
                );
                break;
            case 2:
                $relation1->setAreFriends(false);
                $relation2->setAreFriends(false);
                $relation1->setIsPending(false);
                $relation2->setIsPending(false);
                $return = array(
                    'status' => 2,
                    'msg' => $translator->trans('success.friends.addRm')
                );
                break;
        }
        try {
            $em->flush();
        } catch (Exception $e) {
            $return = array(
                'status' => 0,
                'msg' => $translator->trans('errors.friends.addError')
            );
        }
        return new JsonResponse($return);
    }
    
    public function messagesUpdateAction()
    {
        list($user, $con, $translator, $datas, $return) = $this->init();
        $repo = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Messages');
        $em = $this->getDoctrine()->getEntityManager();
        $type = $datas->get('type');
        $id = $datas->get('id');
        $message = $repo->find($id);
        if (empty($message) || ($message->getFromUser() != $user->getId() && $message->getToUser() != $user->getId())) {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
        $em->persist($message);
        switch($type) {
            case 'markAsRead':
                $message->setIsRead(true);
                $return = array(
                    'status' => 1,
                    'msg' => $translator->trans('success.messages.markAsRead')
                );
                break;
        }

        try {
            $em->flush();
        } catch (Exception $e) {
            $return = array(
                'status' => 0,
                'msg' => $translator->trans('errors.friends.addError')
            );
        }
        return new JsonResponse($return);
    }
}
