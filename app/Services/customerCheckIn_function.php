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
}
