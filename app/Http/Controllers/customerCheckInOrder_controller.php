<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\customerCheckInOrder_function;

class customerCheckInOrder_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "true";
      $temp = new customerCheckInOrder_function();
      $data["data"] = $temp->fetching_all_data();
      return $data;

    }

    public function getting_data_with_serviceid($serviceID){
      $message = "False";
      $data["message"]= $message;
      try{
        $message = "True";
        $data["parameter"]= "customercheckinorder/<serviceID>";
        $temp = new customerCheckInOrder_function();
        $data["data"] = $temp->fetching_data_with_condition($serviceID);
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
