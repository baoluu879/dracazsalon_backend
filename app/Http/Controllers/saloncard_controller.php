<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\saloncard_function;

class saloncard_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new saloncard_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_employeeID($ID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "saloncard/employee/<ID>";
        $temp = new saloncard_function();
        $data["data"] = $temp->fetching_data_with_condition_employeeID($ID);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_data_with_customerID($ID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "saloncard/customer/<ID>";
        $temp = new saloncard_function();
        $data["data"] = $temp->fetching_data_with_condition_customerID($ID);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_data_with_CardNumber($CardID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "saloncard/<CardID>";
        $temp = new saloncard_function();
        $result = $temp->fetching_data_with_condition_CardNumber($CardID);
        if($result){
          $data["data"] = $result;
        }else{
          $message = "False";
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
