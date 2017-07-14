<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\city_function;

class city_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new city_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_countryCode($CountryCode){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $temp = new city_function();
        $data["data"] = $temp->fetching_data_with_condition($CountryCode);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
