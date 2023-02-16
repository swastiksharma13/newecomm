<?php
namespace App\EventListner;

use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Event\Model\AssetEvent;
use Pimcore\Event\Model\DocumentEvent;
use Pimcore\Model\Notification\Service\NotificationService;
use Pimcore\Model\DataObject\Laptop;

class validationdate
{
    public function onObjectPreUpdate(DataObjectEvent $e)
    {$object = $e->getObject();
        if ($object instanceof Laptop) 
        {   
            $ManufacturingDate = $object->getManufacturingDate();
            $ReleaseDate=$object->getReleaseDate();
            if ($ManufacturingDate < $ReleaseDate) 
            throw new \Exception("Manufacturing Date cannot be greater than Release date");
            
        }
    }
}

