<?php
namespace App\Services;
use App\Model\customerCheckIn;

class customerCheckIn_function{

  public function fetching_all_data(){
    $dbConnection = new customerCheckIn();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($payType){
    $dbConnection = new customerCheckIn();
    $data = $dbConnection::where("CIPayType", $payType)->get();
    return $data;

  }


  public function creating_new_customerCheckIn_info($OfCustomerID,$CIType,$CIStatus,$AtSalonID,$ServedByEmployeeID,$CITipToEmployee,$CITotalFeeWithoutTip,$CIPayType){
    $dbConnection = new customerCheckIn();
    $global = new global_variables();
    $message = "";
    try{
      $now = time();
      $minus_time = $global->minus_time;
      $dbConnection->CIDateTime = date('Y-m-d H:i:s', $now - $minus_time);

      if($OfCustomerID){
        $dbConnection->OfCustomerID = $OfCustomerID;
      }else{
        $dbConnection->OfCustomerID = 0;
      }
      if($CIType){
        $dbConnection->CIType = $CIType;
      }else{
        $dbConnection->CIType = "NA";
      }
      if($CIStatus){
        $dbConnection->CIStatus = $CIStatus;
      }else{
        $dbConnection->CIStatus = "NA";
      }
      if($AtSalonID){
        $dbConnection->AtSalonID = $AtSalonID;
      }else{
        $dbConnection->AtSalonID = 0;
      }
      if($ServedByEmployeeID){
        $dbConnection->ServedByEmployeeID = $ServedByEmployeeID;
      }else{
        $dbConnection->ServedByEmployeeID = 0;
      }
      if($CITipToEmployee){
        $dbConnection->CITipToEmployee = $CITipToEmployee;
      }else{
        $dbConnection->CITipToEmployee = 0;
      }
      if($CITotalFeeWithoutTip){
        $dbConnection->CITotalFeeWithoutTip = $CITotalFeeWithoutTip;
      }else{
        $dbConnection->CITotalFeeWithoutTip = 0;
      }
      if($CIPayType){
        $dbConnection->CIPayType = $CIPayType;
      }else{
        $dbConnection->CIPayType = "NA";
      }

      $dbConnection->save();
      $message = 1;
    }
    catch(Exception $e){
        $message = $e;
    }

    return $message;
  }
}
