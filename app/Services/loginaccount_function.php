<?php
namespace App\Services;
use App\Model\loginaccount;

class loginaccount_function{

  public function fetching_all_data(){
    $dbConnection = new loginaccount();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($employeeID){
    $dbConnection = new loginaccount();
    $data = $dbConnection::where("BelongToEmployee", $employeeID)->get();
    return $data;

  }
}
