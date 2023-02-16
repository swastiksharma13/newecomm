<?php

namespace App\EventListener;

use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Event\Model\AssetEvent;
use Pimcore\Event\Model\DocumentEvent;
use Pimcore\Model\DataObject\Electronic;
use Pimcore\Model\Notification\Service\NotificationService;


class ValidationDataValidation
{

    public function onObjectPreUpdate(\Pimcore\Event\Model\DataObjectEvent $e)
    {
        $object = $e->getObject();
        if ($object instanceof Electronic) {
            $start = $object->getLaunchDate();
            $end = $object->getManufacturingDate();

            if ($start > $end) {
                throw new \Exception("Start Date cant be greater than end date");
            }
        }
    }
}
