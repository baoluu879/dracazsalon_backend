<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\customer_function;

class customer_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new customer_function();
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

    public function getting_data_with_customerID($customerID){
      $message = "False";
      $data["message"]= $message;
      try{

        $data["parameter"]= "customers/<CardID>";
        $temp = new customer_function();
        $result = $temp->fetching_data_with_customerID($customerID);
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function getting_data_with_phoneNumber($phoneNumber){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "customers/<phoneNumber>";
        $temp = new customer_function();
        $result = $temp->fetching_data_with_condition($phoneNumber);
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function creating_new_customer_info($CFName,$CLName,$CAddress,$CCity,$CState,$CZipCode,$CEmail,$CPhone,$CMemberType,$UseSalonCardId){
      $message = "False";
      $data["message"]= $message;

      try{

        $data["parameter"]= "customers/add_new/<CFName>/<CLName>/<CAddress>/<CCity>/<CState>/<CZipCode>/<CEmail>/<CPhone>/<CRegisterDate>/<CMemberType>/<UseSalonCardId>";
        $temp = new customer_function();
        $result = $temp->creating_new_customer($CFName,$CLName,$CAddress,$CCity,$CState,$CZipCode,$CEmail,$CPhone,$CMemberType,$UseSalonCardId);
        if($result == 1){
          $data["data"] = "Successful Add New Customer";
          $message = "True";
        }else{
          $message = "False";
          $data["data"] = "Customer is existed. Phone Number is in used.";
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $e;
      }
      $data["message"]= $message;
      return $data;
    }
}
