<?php
namespace App\Services;
use App\Model\treatmenttype;

class treatmenttype_function{

  public function fetching_all_data(){
    $dbConnection = new treatmenttype();
    $data = $dbConnection::all();
    return $data;

  }

  // public function fetching_data_with_condition($storeID){
  //   $dbConnection = new treatmenttype();
  //   $data = $dbConnection::where("ManageAtStoreID", $storeID)->get();
  //   return $data;
  //
  // }
}
