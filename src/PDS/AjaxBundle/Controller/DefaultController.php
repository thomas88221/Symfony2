<?php

namespace PDS\AjaxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function notificationsAction()
    {
        $request = $this->getRequest();
        if($request->isXmlHttpRequest() && $request->getMethod() === 'POST') {
            $user = $this->getUser();
            $con = $this->get('database_connection');
            $translator = $this->get('translator');
            $repoMsg = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Messages');
            $repoUser = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Users');
            $repoRelations = $this->getDoctrine()->getManager()->getRepository('PDSUserBundle:Relations');
            $datas = $request->request;
            $type = $datas->get('type');
            $return = array();
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
                            $return[] = array(
                                'profil' => $this->generateUrl('pds_friends_profil', array('id' => $message['from_user'], 'name' => $message['username'])),
                                'avatar' => '/avatars/'.$message['avatar'],
                                'username' => $message['username'],
                                'message' => strlen($message['message']) > 80 ? substr($message['message'], 0, 75).' ...' : $message['message'],
                                'date' => date('d/m/y H:i', strtotime($message['date_message']))
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
                                'date' => date('d/m/y H:i', strtotime($notif['date']))
                            );
                        }
                    }
                    break;
            }
        
        /*$results = $repo->getMessagesReceivedJoinUsers($this->get('database_connection'), $user->getId(), 5);
        $messages = array();
        if (!empty($results)) {
            foreach ($results as $result) {
                $t = strtotime($result['date_message']);
                $messages[] = array(
                    'profil' => $this->generateUrl('pds_friends_profil', array('id' => $result['from_user'], 'name' => $result['username'])),
                    'avatar' => '/avatars/'.$result['avatar'],
                    'username' => $result['username'],
                    'message' => strlen($result['message']) > 80 ? substr($result['message'], 0, 75).' ...' : $result['message'],
                    'date' => date('d/m/y H:i', $t)
                );
            }
        }
        return new JsonResponse(
            array(
                'messages' => array(
                    'datas' => $messages,
                    'length' => $countMsg,
                    'checksum' => md5(serialize($messages))
                ),
                'divers' => array(
                    'length' => 0,
                    'checksum' => md5('tab2')
                )
            )
        );*/
        return new JsonResponse($return);
        } else {
            throw $this->createNotFoundException($translator->trans('errors.update.unauthorized'));
        }
    }
}
