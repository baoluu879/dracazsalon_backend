<?php
namespace App\Services;
use App\Model\customer;

class customer_function{

  public function fetching_all_data(){
    $dbConnection = new customer();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($phoneNumber){
    $dbConnection = new customer();
    $data = $dbConnection::where("CPhone", $phoneNumber)->get();
    return $data;

  }
}
