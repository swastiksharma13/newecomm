<?php

namespace App\Controller ;

// use App\Model\ElectronicModel as Electronic;

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
    

    #[Route('/electronic/{id}' , name: 'app_electronic_show')]
    public function index(Request $request, $id ): Response
    {

        $product = Electronic::getById($id);


        //checking product is 
        if ($product === null) {
            return new Response("<div style='color:red;'>Error !! Product not fount with this id =  $id</div>");
        }

          // format the response data as a JSON object
    $data = array(
        'name' => $product->getName(),
        'Product Type' => $product->getObjectType() ? $product->getObjectType() : 'virtual-object',
        'description' => $product->getDescription(),
        'image_url' => $product->getImage(),
        'Brand' => $product->getManufacturer()->getName(),
        'Operating System' => $product->getAttributes()->getOperatingSystem()? $product->getAttributes()->getOperatingSystem()->getOperatingSystem() : null ,
        'Cellular Technology' => $product->getAttributes()->getCellularTechnology()? $product->getAttributes()->getCellularTechnology()->getCellularType() : null ,
        'Camera description' => $product->getAttributes()->getCameraDescription()? ($product->getAttributes()->getCameraDescription()->getFrontCamera()."front Camera And ".$product->getAttributes()->getCameraDescription()->getRearCamera()) : null ,
      
        'Scree size' =>  $product->getAttributes()->getScreenSize() ? $product->getAttributes()->getScreenSize()->getScreenSize() : null ,
        'Screen Resolution' => $product->getAttributes()->getScreenResolution() ? $product->getAttributes()->getScreenResolution()->getScreenResolution() : null ,
        'Battery Power in mah' => $product->getAttributes()->getBatteryPowerInmaH() ? $product->getAttributes()->getBatteryPowerInmaH()->getBatteryPoewerInmah() : null ,
        'RAM' => $product->getAttributes()->getRAM() ? $product->getAttributes()->getRAM() : null ,
        'InbuildStorage' => $product->getAttributes()->getInBuildStorage() ? $product->getAttributes()->getInBuildStorage()->getInbuildStorage() : null,
        'Processor' => $product->getAttributes()->getProcessor() ? $product->getAttributes()->getProcessor()->getProcessorName() : null ,
        'Warrenty Details' => $product->getAttributes()->getWarrentyDetails() ? $product->getAttributes()->getWarrentyDetails()->getWarrentyDetails() : null

    );
    // return the response data as JSON
    // create a new response object with the JSON data
    $resp = new JsonResponse($data);
       
     // return the response
     return $resp ;
    }
}