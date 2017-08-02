<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\servicespackagedetail_function;

class servicespackagedetail_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new servicespackagedetail_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_salonserviceID($ID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "servicespackagedetail/salonservice/<ID>";
        $temp = new servicespackagedetail_function();
        $data["data"] = $temp->fetching_data_with_condition_salonserviceID($ID);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_data_with_treatmentOrder($ID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "servicespackagedetail/treatmentorder/<ID>";
        $temp = new servicespackagedetail_function();
        $data["data"] = $temp->fetching_data_with_condition_treatmentOrder($ID);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
