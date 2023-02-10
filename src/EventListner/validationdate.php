<?php
namespace App\EventListner;

use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Event\Model\AssetEvent;
use Pimcore\Event\Model\DocumentEvent;
use Pimcore\Model\Notification\Service\NotificationService;
use Pimcore\Model\DataObject\Validation;

class validationdate
{
    public function onObjectPreUpdate(\Pimcore\Event\Model\DataObjectEvent $e)
    {$object = $e->getObject();if ($object instanceof Validation) 
        {$ManufacturingDate = $object->getManufacturingDate();$ReleaseDate=$object->getReleaseDate();
            if ($ManufacturingDate > $ReleaseDate) {throw new \Exception("Start Date cant be greater than end date");
            }
        }
    }
}

