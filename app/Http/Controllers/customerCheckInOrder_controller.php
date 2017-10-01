<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\customerCheckInOrder_function;

class customerCheckInOrder_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new customerCheckInOrder_function();
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

    public function getting_data_with_serviceid($serviceID){
      $message = "False";
      $data["message"]= $message;
      try{

        $data["parameter"]= "customercheckinorder/<serviceID>";
        $temp = new customerCheckInOrder_function();
        $result = $temp->fetching_data_with_condition($serviceID);
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

    public function creating_new_customerCheckInOrder_info($CheckInID,$ServiceID,$Quantity,$DiscountPercent,$PaidPrice,$Note){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "customercheckinorder/add_new/<CheckInID>/<ServiceID>/<Quantity>/<DiscountPercent>/<PaidPrice>/<Note>";
        $temp = new customerCheckInOrder_function();
        $result = $temp->creating_new_customerCheckInOrder_info($CheckInID,$ServiceID,$Quantity,$DiscountPercent,$PaidPrice,$Note);
        if($result == 1){
          $data["data"] = "Successful Add New Customer Check In Order";
          $message = "True";
        }else{
          $message = "False";
          $data["data"] = "Unsuccessful Add New Customer Check In Order";
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $e;
      }
      $data["message"]= $message;
      return $data;

    }


}
