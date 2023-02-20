<?php
namespace App\EventListener;
 
use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Event\Model\AssetEvent;
use Pimcore\Event\Model\DocumentEvent;
use Pimcore\Model\DataObject\Electronic;
use Pimcore\Model\Notification\Service\NotificationService;
use Pimcore\Model\DataObject\FootWear;
 
class DateValidation
{
 
 public function onObjectPreUpdate(\Pimcore\Event\Model\DataObjectEvent $e)
 {
 $object = $e->getObject();
 if ($object instanceof Electronic) {
 $start = $object->getSaleInformation()->getSalesInformation()->getManufactureDate() ;
 $end=$object->getSaleInformation()->getSalesInformation()->getReleaseDate() ;

 if ($start > $end) {
 throw new \Exception("Manufacturing Date can't be greater than Release date");
 }
 }
 }
 
}