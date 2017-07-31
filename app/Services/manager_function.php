<?php
namespace App\Services;
use App\Model\manager;

class manager_function{

  public function fetching_all_data(){
    $dbConnection = new manager();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($storeID){
    $dbConnection = new manager();
    $data = $dbConnection::where("ManageAtStoreID", $storeID)->get();
    return $data;

  }
}
