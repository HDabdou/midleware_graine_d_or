<?php

namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use \App\Controller;


class midelwareIGrainedorController extends Controller {
    public $baseurl = "http://161.97.73.229/backendIpressProject/public/index.php";
 // 192.168.1.110

  

 public function createuserGrainedor(Request $request, Response $response, $args){
      header("Access-Control-Allow-Origin: *");
      $param = $_POST['param'];
      //return $param;
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://b38a6a901469.ngrok.io/backendGrainedor/public/index.php/admin/createUser",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"param=".$param,
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/x-www-form-urlencoded"
        ),
      ));

      $response = curl_exec($curl);

      //echo $response;
      $err = curl_error($curl);
      curl_close($curl);

      if ($err) {
        return "cURL Error #:" . $err;
      } else {
        return $response;
      }
  } 

}