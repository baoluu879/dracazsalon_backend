<?php
namespace App\Services;
use App\Model\manager;

class manager_function{

  public function fetching_all_data(){
    $dbConnection = new manager();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_storeID($storeID){
    $dbConnection = new manager();
    $data = $dbConnection::where("ManageAtStoreID", $storeID)->get();
    return $data;

  }

  public function fetching_data_with_employeeID($employeeID){
    $dbConnection = new manager();
    $data = $dbConnection::where("EmployeeID", $employeeID)->with('employee')->get();
    return $data;

  }
}
