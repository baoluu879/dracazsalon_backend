<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\treatment_function;

class treatment_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new treatment_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    // public function getting_data_with_storeID($storeID){
    //   $message = "False";
    //   $data["message"]= $message;
    //   try{
    //     $message = "True";
    //     $data["parameter"]= "salonstore/<storeID>";
    //     $temp = new treatment_function();
    //     $data["data"] = $temp->fetching_data_with_condition($storeID);
    //   }catch(Exception $e){
    //       $message = $e;
    //   }
    //   $data["message"]= $message;
    //   return $data;
    //
    // }
}
