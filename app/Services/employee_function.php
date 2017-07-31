<?php
namespace App\Services;
use App\Model\employee;

class employee_function{

  public function fetching_all_data(){
    $dbConnection = new employee();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($storeID){
    $dbConnection = new employee();
    $data = $dbConnection::where("WorkForStoreID", $storeID)->get();
    return $data;

  }
}
