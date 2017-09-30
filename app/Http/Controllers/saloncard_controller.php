<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\saloncard_function;

class saloncard_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new saloncard_function();
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

    public function getting_data_with_number($CardNumber){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "saloncards/<CardNumber>";
        $temp = new saloncard_function();
        $result = $temp->fetching_data_with_condition_number($CardNumber);
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

    // public function getting_data_with_customerID($ID){
    //   $message = "False";
    //   $data["message"]= $message;
    //   try{
    //     $message = "True";
    //     $data["parameter"]= "saloncards/customer/<ID>";
    //     $temp = new saloncard_function();
    //     $data["data"] = $temp->fetching_data_with_condition_customerID($ID);
    //   }catch(Exception $e){
    //       $message = $e;
    //   }
    //   $data["message"]= $message;
    //   return $data;
    //
    // }

    public function getting_data_with_customer_CardNumber($CardNumber){
      $message = "False";
      $data["message"]= $message;
      try{

        $data["parameter"]= "saloncards/<CardID>";
        $temp = new saloncard_function();
        $result = $temp->fetching_data_with_condition_customer_CardNumber($CardNumber);
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

    public function getting_data_with_employee_CardNumber($CardNumber){
      $message = "False";
      $data["message"]= $message;
      try{

        $data["parameter"]= "saloncards/<CardID>";
        $temp = new saloncard_function();
        $result = $temp->fetching_data_with_condition_employee_CardNumber($CardNumber);
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
