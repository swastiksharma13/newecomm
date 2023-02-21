<?php

namespace App\Controller;

use Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects;
use Symfony\Component\HttpFoundation\JsonResponse;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Electronic;
use Pimcore\Model\DataObject;

class ElectronicController extends FrontendController
{
    #[Route('/electronic/brand/{brandName}', name: 'app_electronic_filter')]
    public function Filterfunction($brandName)
    {
        $filterdata[] = array();
        $object = new Electronic\Listing();
        if ($object === null) {
            return new Response("Error !! Product not fount with this id ");
        }

        $object->setObjectTypes([DataObject::OBJECT_TYPE_VARIANT, DataObject::OBJECT_TYPE_OBJECT]);



        foreach ($object as $obj) {
            $br = ($obj->getBrand());
            if ($br == null) continue;
            if (strtolower($brandName) == strtolower($br->getBrandName())) {
                // if ($obj->getObjectType() == 'real-object') {
                $data = self::index($obj->getId());
                array_push($filterdata, $data);
            }
        }
        return new JsonResponse(dd(["Filtered Data" => $filterdata]));
    }

    #[Route('/electronic', name: 'All Data')]
    public function showAll()
    {
        $productdata[] = array();
        $object = new Electronic\Listing();
        $object->setObjectTypes([DataObject::OBJECT_TYPE_VARIANT, DataObject::OBJECT_TYPE_OBJECT]);
        foreach ($object as $obj) {
            $data = self::index($obj->getId());
            array_push($productdata, $data);
        }
        return new JsonResponse(dd(["Product Data" => $productdata]));
    }

    #[Route('/electronic/{id}', name: 'app_electronic_show')]

    public function FetchIdData($id): Response
    {
        dd(self::index($id));
    }
    public function index($id)
    {

        $product = Electronic::getById($id);


        //checking product is
        if ($product === null) {
            return new Response("Error !! Product not fount with this id =  $id");
        }

        // format the response data as a JSON object
        $data = array(
            //base data
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'modelnumber' => $product->getModelNumber(),
            'Electronictype' => $product->getElectronicType(),
            'color' => $product->getColor(),
            'country' => $product->getCountry(),
            'manufacturingDate' => $product->getManufacturingDate(),
            'launchdate' => $product->getLaunchDate(),
            // attributes of speaker
            'Speaker Output Mode' => $product->getAttributes()->getSpeakerSpecs()->getSpeakerOutputMode(),
            'SpeakerOutputPower' => $product->getAttributes()->getSpeakerSpecs()->getSpeakerOutputPower(),
            'SpeakerWattage' => $product->getAttributes()->getSpeakerSpecs()->getSpeakerWattage(),
            'SpeakerCommunicationTechnology' => $product->getAttributes()->getSpeakerSpecs()->getSpeakerCommunicationTechnology(),
            'WaterResistanceLevel' => $product->getAttributes()->getSpeakerSpecs()->getWaterResistanceLevel(),
            'InternetServicesSupported' => $product->getAttributes()->getSpeakerSpecs()->getInternetServicesSupported(),
            'Mount' => $product->getAttributes()->getSpeakerSpecs()->getMount(),
            'ControllerType' => $product->getAttributes()->getSpeakerSpecs()->getControllerType(),
            'Length' => $product->getAttributes()->getSpeakerSpecs()->getLength()->getValue(),
            'Width' => $product->getAttributes()->getSpeakerSpecs()->getWidth()->getValue(),
            'Height' => $product->getAttributes()->getSpeakerSpecs()->getHeight()->getValue(),
            //Sale information
            'Price' => $product->getSaleInformation()->getSaleInformation() ? $product->getSaleInformation()->getSaleInformation()->getPrice() : null,
            'location' => $product->getSaleInformation()->getSaleInformation()->getLocation(),
            'princeInINR' => $product->getSaleInformation()->getSaleInformation()->getPrinceInINR(),
            'ConditionType' => $product->getSaleInformation()->getSaleInformation()->getConditionType(),
            'AvailabilityPieces' => $product->getSaleInformation()->getSaleInformation()->getAvailabilityPieces(),
            'AvailabilityTime' => $product->getSaleInformation()->getSaleInformation()->getAvailabilityTime()

        );
        // return the response data as  JSON
        // create a new response object with the JSON data
        return $data;
    }
}
