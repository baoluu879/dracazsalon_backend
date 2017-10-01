<?php
namespace App\Services;
use App\Model\saloncard;

class saloncard_function{

  public function fetching_all_data(){
    $dbConnection = new saloncard();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition_id($CardID){
    $dbConnection = new saloncard();
    $data = $dbConnection::where("SLCID", $CardID)->get();
    return $data;

  }

  public function fetching_data_with_condition_employeeID($ID){
    $dbConnection = new saloncard();
    $data = $dbConnection::where("BelongToEmployeeID", $ID)->get();
    return $data;

  }

  public function fetching_data_with_condition_customerID($ID){
    $dbConnection = new saloncard();
    $data = $dbConnection::where("BelongToCustomerID", $ID)->get();
    return $data;

  }

  public function fetching_data_with_condition_customer_CardNumber($CardNumber){
    $dbConnection = new saloncard();
    $data = $dbConnection::where("SLCNumber", $CardNumber)->with('customer')->get();
    return $data;

  }

  public function fetching_data_with_condition_employee_CardNumber($CardNumber){
    $dbConnection = new saloncard();
    $data = $dbConnection::where("SLCNumber", $CardNumber)->with('employee')->get();
    return $data;

  }
}
