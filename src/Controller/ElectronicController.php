<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Electronic;

class ElectronicController extends FrontendController
{
    public function showAll()
    {
        return $this->render('product/index.html.twig');
    }


    #[Route('/electronic/{id}', name: 'app_electronic_show')]
    public function index(Request $request, $id): Response
    {

        $product = Electronic::getById($id);


        //checking product is
        if ($product === null) {
            return new Response("<div style='color:red;'>Error !! Product not fount with this id =  $id</div>");
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
            'Length' => $product->getAttributes()->getSpeakerSpecs()->getLength(),
            'Width' => $product->getAttributes()->getSpeakerSpecs()->getWidth(),
            'Height' => $product->getAttributes()->getSpeakerSpecs()->getHeight(),
            //Sale information
            'Price' => $product->getSaleInformation()->getSaleInformation() ? $product->getSaleInformation()->getSaleInformation()->getPrice() : null,
            'location' => $product->getSaleInformation()->getSaleInformation()->getLocation(),
            'princeInINR' => $product->getSaleInformation()->getSaleInformation()->getPrinceInINR(),
            'ConditionType' => $product->getSaleInformation()->getSaleInformation()->getConditionType(),
            'AvailabilityPieces' => $product->getSaleInformation()->getSaleInformation()->getAvailabilityPieces(),
            'AvailabilityTime' => $product->getSaleInformation()->getSaleInformation()->getAvailabilityTime()

        );
        dd($data);
        // return the response data as  JSON
        // create a new response object with the JSON data
        $resp = new JsonResponse($data);

        // return the response
        return $resp;
    }
}
