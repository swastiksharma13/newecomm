<?php

namespace App\Controller;

use Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects;
use Symfony\Component\HttpFoundation\JsonResponse;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Laptop;
use Pimcore\Model\DataObject;

class ElectronicController extends FrontendController
{
    #[Route('/Laptop', name: 'All Data')]
    public function showAll()
    {
        $productdata[] = array();
        $object = new Laptop\Listing();
        $object->setObjectTypes([DataObject::OBJECT_TYPE_VARIANT, DataObject::OBJECT_TYPE_OBJECT]);
        foreach ($object as $obj) {
            $data = self::index($obj->getId());
            array_push($productdata, $data);
        }
       //dd($object);
        return new JsonResponse(dd(["Product Data" => $productdata]));
    }
    #[Route('/Laptop/{filter}', name: 'All_filter')]
    public function showFilter($filter)
    {
        $productdata[] = array();
        $object = new Laptop\Listing();
        $object->setObjectTypes([DataObject::OBJECT_TYPE_VARIANT, DataObject::OBJECT_TYPE_OBJECT]);
        foreach ($object as $obj) {
            if(strtolower($filter) == strtolower($obj->getBrand()->getBrandName())){
            $data = self::index($obj->getId());
            array_push($productdata, $data);
            }
        }
       //dd($object);
        return new JsonResponse(dd(["Product Data" => $productdata]));
    }


    #[Route('/Laptop/{id}', name: 'app_Laptop_show')]

    public function FetchIdData($id): Response
    {
        dd(self::index($id));
    }
    public function index($id)
    {

        $product = Laptop::getById($id);


        //checking product is
        if ($product === null) {
            return new Response("<div style='color:red;'>Error !! Product not fount with this id =  $id</div>");
        }

        // format the response data as a JSON object
        $data = array(
            //Base Data
            'Laptop_ID' => $product->getLaptop_ID() ? $product->getLaptop_ID() : null,
            'Sku' => $product ? $product->getSku() : null,
            
            // Base Details of Laptop
            'L_Name' => $product->getLaptopBaseDetails()->getLaptopBaseDetails() ? $product->getLaptopBaseDetails()->getLaptopBaseDetails()->getL_Name() : null,
            'L_Color' => $product->getLaptopBaseDetails()->getLaptopBaseDetails()?$product->getLaptopBaseDetails()->getLaptopBaseDetails()->getL_Color():'',
            'L_Description' => $product->getLaptopBaseDetails()->getLaptopBaseDetails() ? $product->getLaptopBaseDetails()->getLaptopBaseDetails()->getL_Description(): '',

            // Laptop Mains

            //RAM
            'RamType' => $product->getLaptopMains()->getLaptopMains()->getRamType(),
            'RamCapacity' => $product->getLaptopMains()->getLaptopMains()->getRamCapacity(),

            //PROCESSOR
            'ProcessorBrand' => $product->getLaptopMains()->getLaptopMains()->getProcessorBrand(),
            'Processor' => $product->getLaptopMains()->getLaptopMains()->getProcessor(),
            'ProcessorGeneration' => $product->getLaptopMains()->getLaptopMains()->getProcessorGeneration(),

            //OS
            'OS' => $product->getLaptopMains()->getLaptopMains()->getOS(),

            //SCREEN
            'ScreenSize' => $product->getLaptopMains()->getLaptopMains()->getScreenSize(),
            'ScreenType' => $product->getLaptopMains()->getLaptopMains()->getScreenType(),

            //SSD
            'SSD_Capacity' => $product->getLaptopMains()->getLaptopMains()->getSSD_Capacity(),

            //Weight
            'Weight' => $product->getLaptopMains()->getLaptopMains()->getWeight(),

            //Laptop Specs

            //General
            'Series' => $product->getLaptopSpecs()->getLaptopSpecs()? $product->getLaptopSpecs()->getLaptopSpecs()->getSeries(): '',



            //Sale information
            'ManufacturingDate' => $product->getManufacturingDate(),
            'ReleaseDate' => $product->getReleaseDate(),
            

        );
        // return the response data as  JSON
        // create a new response object with the JSON data

        return $data;
    }
} 