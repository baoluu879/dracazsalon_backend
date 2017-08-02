<?php
namespace App\Services;
use App\Model\servicespackagedetail;

class servicespackagedetail_function{

  public function fetching_all_data(){
    $dbConnection = new servicespackagedetail();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition_salonserviceID($ID){
    $dbConnection = new servicespackagedetail();
    $data = $dbConnection::where("SalonServiceID", $ID)->get();
    return $data;

  }

  public function fetching_data_with_condition_treatmentOrder($ID){
    $dbConnection = new servicespackagedetail();
    $data = $dbConnection::where("TreatmentOrder", $ID)->get();
    return $data;

  }

  public function fetching_all_data_with_relationship(){
    $data = servicespackagedetail::with('salonservice')->get();
    return $data;
  }
}
