<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\servicespackagedetail_function;

class servicespackagedetail_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new servicespackagedetail_function();
      try{
        $result = $temp->fetching_all_data();
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_data_with_salonserviceID($ID){
      $message = "False";
      $data["message"]= $message;
      try{

        $data["parameter"]= "servicespackagedetails/salonservice/<ID>";
        $temp = new servicespackagedetail_function();
        $result = $temp->fetching_data_with_condition_salonserviceID($ID);
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
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

        $data["parameter"]= "servicespackagedetails/treatmentorder/<ID>";
        $temp = new servicespackagedetail_function();
        $result = $temp->fetching_data_with_condition_treatmentOrder($ID);
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_all_data_with_relationship(){
      $message= "False";
      $data["message"] = $message;
      try{
        $temp = new servicespackagedetail_function();
        $result = $temp->fetching_all_data_with_relationship();
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;

      return $data;

    }
}
