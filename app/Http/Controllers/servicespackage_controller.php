<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\servicespackage_function;

class servicespackage_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new servicespackage_function();
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

    public function getting_data_with_price($price){
      $message = "False";
      $data["message"]= $message;
      try{

        $data["parameter"]= "servicespackages/<price>";
        $temp = new servicespackage_function();
        $result = $temp->fetching_data_with_condition($price);
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
