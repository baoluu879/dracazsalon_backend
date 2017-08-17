<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\servicespackage_function;

class servicespackage_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new servicespackage_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_price($price){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "servicespackages/<price>";
        $temp = new servicespackage_function();
        $data["data"] = $temp->fetching_data_with_condition($price);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
