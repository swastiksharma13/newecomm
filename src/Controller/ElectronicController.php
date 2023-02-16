<?php

namespace App\Controller ;

// use App\Model\ElectronicModel as Electronic;

use Symfony\Component\HttpFoundation\JsonResponse;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Laptop;


class ElectronicController extends FrontendController
{ 

    #[Route("/electronic"  ,name :"app_electronic_show_all")]
    public function showAll()
    {
        $objects = new Laptop\Listing();
        if($objects == null){
            return new Response("<div style='color:red;'>Error !! Product not fount</div>");
        }
        // dd($objects);
        foreach($objects as $product){
          $datas = array();
        //  dd($product);
        $data = array(
        'name' => $product->getSku(),
        'description' => $product->getLaptopBaseDetails()->getLaptopBaseDetails() ? $product->getLaptopBaseDetails()->getLaptopBaseDetails()->getL_Description() : null   ,
        'image_url' => $product->getMedia_L(),
        'Brand' => $product->getBrand() ? $product->getBrand()->getBrandName() : null,
        'Operating System' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getOS() : null ,
        
        // 'Camera description' => $product->getLaptopSpec()->getLaptopSpec()? ($product->getLaptopSpec()->getLaptopSpec()->getCamera()) : null ,
      
        'Scree size' =>  $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getScreenSize() : null ,
        // 'Battery Power in mah' => $product->getAttributes()->get ? $product->getAttributes()->getBatteryPowerInmaH()->getBatteryPoewerInmah() : null ,
        'RAM' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getRamCapacity() : null ,
        'InbuildStorage' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getSSD_Capacity() : null ,
        'Processor' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getProcessor() : null ,
        // 'Warrenty Details' => $product->getAttributes()->getWarrentyDetails() ? $product->getAttributes()->getWarrentyDetails()->getWarrentyDetails() : null
                
          );
          array_push($datas , $data);
          $data = array();
            // dd($object);
        }

        $resp = new JsonResponse($datas);
       
        // return the response
        return $resp ;
        

    }
    

    #[Route('/electronic/{id}' , name: 'app_electronic_show_one')]
    public function index(Request $request, $id ): Response
    {

        $product = Laptop::getById($id);


        //checking product is 
        if ($product === null) {
            return new Response("<div style='color:red;'>Error !! Product not fount with this id =  $id</div>");
        }

          // format the response data as a JSON object
    $data = array(
        'name' => $product->getSku(),
        'description' => $product->getLaptopBaseDetails()->getLaptopBaseDetails() ? $product->getLaptopBaseDetails()->getLaptopBaseDetails()->getL_Description() : null   ,
        'image_url' => $product->getMedia_L(),
        'Brand' => $product->getBrand() ? $product->getBrand()->getBrandName() : null,
        'Operating System' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getOS() : null ,
        
        // 'Camera description' => $product->getLaptopSpec()->getLaptopSpec()? ($product->getLaptopSpec()->getLaptopSpec()->getCamera()) : null ,
      
        'Scree size' =>  $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getScreenSize() : null ,
        // 'Battery Power in mah' => $product->getAttributes()->get ? $product->getAttributes()->getBatteryPowerInmaH()->getBatteryPoewerInmah() : null ,
        'RAM' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getRamCapacity() : null ,
        'InbuildStorage' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getSSD_Capacity() : null ,
        'Processor' => $product->getLaptopMains()->getLaptopMains()? $product->getLaptopMains()->getLaptopMains()->getProcessor() : null ,
        // 'Warrenty Details' => $product->getAttributes()->getWarrentyDetails() ? $product->getAttributes()->getWarrentyDetails()->getWarrentyDetails() : null

    );
    // return the response data as JSON
    // create a new response object with the JSON data
    $resp = new JsonResponse($data);
       
     // return the response
     return $resp ;
    }
}