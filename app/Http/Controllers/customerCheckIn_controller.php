<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\customerCheckIn_function;

class customerCheckIn_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new customerCheckIn_function();
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

    public function getting_data_with_paytype($payType){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "customercheckin/<payType>";
        $temp = new customerCheckIn_function();
        $result = $temp->fetching_data_with_condition($payType);
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
