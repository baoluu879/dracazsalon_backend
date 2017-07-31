<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\manager_function;

class manager_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new manager_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_storeID($storeID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "manager/<storeID>";
        $temp = new manager_function();
        $data["data"] = $temp->fetching_data_with_condition($storeID);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
