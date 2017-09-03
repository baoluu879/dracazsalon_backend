<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\employee_function;

class employee_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new employee_function();
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
        $data["parameter"]= "employees/store/<storeID>";
        $temp = new employee_function();
        $result = $temp->fetching_data_with_storeID($storeID);
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

    public function getting_data_with_employeeID($employeeID){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "employees/<CardID>";
        $temp = new employee_function();
        $result = $temp->fetching_data_with_employeeID($employeeID);
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
