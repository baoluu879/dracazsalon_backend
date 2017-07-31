<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\logintracking_function;

class logintracking_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new logintracking_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    // public function getting_data_with_employeeID($employeeID){
    //   $message = "False";
    //   $data["message"]= $message;
    //   try{
    //     $message = "True";
    //     $data["parameter"]= "loginaccount/<employeeID>";
    //     $temp = new logintracking_function();
    //     $data["data"] = $temp->fetching_data_with_condition($employeeID);
    //   }catch(Exception $e){
    //       $message = $e;
    //   }
    //   $data["message"]= $message;
    //   return $data;
    //
    // }
}
