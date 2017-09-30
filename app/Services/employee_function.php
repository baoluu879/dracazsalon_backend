<?php
namespace App\Services;
use App\Model\employee;

class employee_function{

  public function fetching_all_data(){
    $dbConnection = new employee();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_storeID($storeID){
    $dbConnection = new employee();
    $data = $dbConnection::where("WorkForStoreID", $storeID)->with('manager')->get();
    return $data;

  }

  public function fetching_data_with_employeeID($employeeID){
    $dbConnection = new employee();
    $data = $dbConnection::where("EID", $employeeID)->with('manager')->get();
    return $data;

  }
}
