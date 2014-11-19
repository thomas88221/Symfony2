<?php

namespace PDS\AjaxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function notificationsAction()
    {
        return new JsonResponse(
            array(
                'messages' => array(
                    'length' => 0,
                    'checksum' => md5('tab')
                ),
                'divers' => array(
                    'length' => 0,
                    'checksum' => md5('tab2')
                )
            )
        );
    }
}
