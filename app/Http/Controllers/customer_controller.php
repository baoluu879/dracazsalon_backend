<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\customer_function;

class customer_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new customer_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_phoneNumber($phoneNumber){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "customer/<phoneNumber>";
        $temp = new customer_function();
        $data["data"] = $temp->fetching_data_with_condition($phoneNumber);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
