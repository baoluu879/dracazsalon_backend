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
        $data["parameter"]= "customers/<phoneNumber>";
        $temp = new customer_function();
        $data["data"] = $temp->fetching_data_with_condition($phoneNumber);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    public function creating_new_customer_info($CFName,$CLName,$CAddress,$CCity,$CState,$CZipCode,$CEmail,$CPhone,$CMemberType,$UseSalonCardId){
      $message = "False";
      $data["message"]= $message;

      try{
        $message = "True";
        $data["parameter"]= "customers/add_new/<CFName>/<CLName>/<CAddress>/<CCity>/<CState>/<CZipCode>/<CEmail>/<CPhone>/<CRegisterDate>/<CMemberType>/<UseSalonCardId>";
        $temp = new customer_function();
        $result = $temp->creating_new_customer($CFName,$CLName,$CAddress,$CCity,$CState,$CZipCode,$CEmail,$CPhone,$CMemberType,$UseSalonCardId);
        if($result == 1){
          $data["data"] = "Successful Add New Customer";
        }else{
          $message = "False";
          $data["data"] = "Customer is existed. Phone Number is in used.";
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $result;
      }
      $data["message"]= $message;
      return $data;
    }
}
