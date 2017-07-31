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
}
