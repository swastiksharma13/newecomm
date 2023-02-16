<?php

namespace App\Model;



use Pimcore\Model\DataObject\Electronic;
use Pimcore\Model\DataObject\Electronic\Listing as ElectronicListing;
use Symfony\Component\HttpFoundation\Request;

class ElectronicModel extends \Pimcore\Model\DataObject\Electronic
{
    const OBJECT_TYPE_ACTUAL_CAR = 'actual-object';
    const OBJECT_TYPE_VIRTUAL_CAR = 'virtual-object';
    
    // public static function getList()
    // {
    //      $list = new  ElectronicListing();

    //      return $list->getObjects();
    // }



    // public static function getById($id)
    // {
    //    $electronic = Electronic::getById($id);
    //    return $electronic;
    // }
    


    
}