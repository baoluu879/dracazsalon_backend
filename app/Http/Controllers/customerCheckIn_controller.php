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

    public function creating_new_customerCheckIn_info($OfCustomerID,$CIType,$CIStatus,$AtSalonID,$ServedByEmployeeID,$CITipToEmployee,$CITotalFeeWithoutTip,$CIPayType){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "customercheckin/add_new/<OfCustomerID>/<CIType>/<CIStatus>/<AtSalonID>/<ServedByEmployeeID>/<CITipToEmployee>/<CITotalFeeWithoutTip>/<CIPayType>";
        $temp = new customerCheckIn_function();
        $result = $temp->creating_new_customerCheckIn_info($OfCustomerID,$CIType,$CIStatus,$AtSalonID,$ServedByEmployeeID,$CITipToEmployee,$CITotalFeeWithoutTip,$CIPayType);
        if($result == 1){
          $data["data"] = "Successful Add New Customer Check In";
          $message = "True";
        }else{
          $message = "False";
          $data["data"] = "Unsuccessful Add New Customer Check In";
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $e;
      }
      $data["message"]= $message;
      return $data;

    }
}
