<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\customerCheckIn_function;

class customerCheckIn_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new customerCheckIn_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_paytype($payType){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "customercheckin/<payType>";
        $temp = new customerCheckIn_function();
        $data["data"] = $temp->fetching_data_with_condition($payType);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
