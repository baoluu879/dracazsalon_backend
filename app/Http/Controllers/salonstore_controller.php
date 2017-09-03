<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\salonstore_function;

class salonstore_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new salonstore_function();
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

    public function getting_data_with_storeID($storeID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "salonstore/<storeID>";
        $temp = new salonstore_function();
        $result = $temp->fetching_data_with_condition_storeID($storeID);
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
