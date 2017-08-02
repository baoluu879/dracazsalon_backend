<?php
namespace App\Services;
use App\Model\servicespackage;

class servicespackage_function{

  public function fetching_all_data(){
    $dbConnection = new servicespackage();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($price){
    $dbConnection = new servicespackage();
    $data = $dbConnection::where("PackagePrice", $price)->get();
    return $data;

  }
}
