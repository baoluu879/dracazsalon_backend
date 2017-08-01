<?php
namespace App\Services;
use App\Model\servicecategory;

class servicecategory_function{

  public function fetching_all_data(){
    $dbConnection = new servicecategory();
    $data = $dbConnection::all();
    return $data;

  }

  // public function fetching_data_with_condition($storeID){
  //   $dbConnection = new servicecategory();
  //   $data = $dbConnection::where("ManageAtStoreID", $storeID)->get();
  //   return $data;
  //
  // }
}
