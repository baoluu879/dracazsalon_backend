<?php
namespace App\Services;
use App\Model\customerCheckInOrder;

class customerCheckInOrder_function{

  public function fetching_all_data(){
    $dbConnection = new customerCheckInOrder();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($serviceID){
    $dbConnection = new customerCheckInOrder();
    $data = $dbConnection::where("ServiceID", $serviceID)->get();
    return $data;

  }

  public function creating_new_customerCheckInOrder_info($CheckInID,$ServiceID,$Quantity,$DiscountPercent,$PaidPrice,$Note){
    $dbConnection = new customerCheckInOrder();
    $global = new global_variables();
    $message = "";
    try{

      if($CheckInID){
        $dbConnection->CheckInID = $CheckInID;
      }else{
        $dbConnection->CheckInID = 0;
      }
      if($ServiceID){
        $dbConnection->ServiceID = $ServiceID;
      }else{
        $dbConnection->ServiceID = 0;
      }
      if($Quantity){
        $dbConnection->Quantity = $Quantity;
      }else{
        $dbConnection->Quantity = 0;
      }
      if($DiscountPercent){
        $dbConnection->DiscountPercent = $DiscountPercent;
      }else{
        $dbConnection->DiscountPercent = 0;
      }
      if($PaidPrice){
        $dbConnection->PaidPrice = $PaidPrice;
      }else{
        $dbConnection->PaidPrice = 0;
      }
      if($Note){
        $dbConnection->Note = $Note;
      }else{
        $dbConnection->Note = "NA";
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
