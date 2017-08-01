<?php
namespace App\Services;
use App\Model\salonservice;

class salonservice_function{

  public function fetching_all_data(){
    $dbConnection = new salonservice();
    $data = $dbConnection::all();
    return $data;

  }

  // public function fetching_data_with_condition($storID){
  //   $dbConnection = new salonservice();
  //   $data = $dbConnection::where("ManageAtStoreID", $storeID)->get();
  //   return $data;
  //
  // }
}
