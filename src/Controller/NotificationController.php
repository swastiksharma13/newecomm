<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use Pimcore\Controller\FrontendController;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Pimcore\Model\DataObject;

use Pimcore\Model\Notification\Service\NotificationService;


class NotificationController extends FrontendController
{
    public function sendNotification(Notificationservice $notificationservice)
    {
        $notificationservice->sendToUser(
            10, // User recipient
            2, // User sender 0 - system
            'Object Created',
            'Objects has been created succesfully from CSV',
        );
    }
}
