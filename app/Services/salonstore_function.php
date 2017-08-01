<?php
namespace App\Services;
use App\Model\salonstore;

class salonstore_function{

  public function fetching_all_data(){
    $dbConnection = new salonstore();
    $data = $dbConnection::all();
    return $data;

  }

  // public function fetching_data_with_condition($storeID){
  //   $dbConnection = new salonstore();
  //   $data = $dbConnection::where("ManageAtStoreID", $storeID)->get();
  //   return $data;
  //
  // }
}
