<?php
namespace App\Services;
use App\Model\treatment;

class treatment_function{

  public function fetching_all_data(){
    $dbConnection = new treatment();
    $data = $dbConnection::all();
    return $data;

  }

  // public function fetching_data_with_condition($storeID){
  //   $dbConnection = new treatment();
  //   $data = $dbConnection::where("ManageAtStoreID", $storeID)->get();
  //   return $data;
  //
  // }
}
