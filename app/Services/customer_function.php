<?php
namespace App\Services;
use App\Model\customer;

class customer_function{


  public function fetching_all_data(){
    $dbConnection = new customer();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_customerID($customerID){
    $dbConnection = new customer();
    $data = $dbConnection::where("CID", $customerID)->get();
    return $data;

  }

  public function fetching_data_with_condition($phoneNumber){
    $dbConnection = new customer();
    $data = $dbConnection::where("CPhone", $phoneNumber)->get();
    return $data;

  }

  public function creating_new_customer($CFName,$CLName,$CAddress,$CCity,$CState,$CZipCode,$CEmail,$CPhone,$CMemberType,$UseSalonCardId){
    $dbConnection = new customer();
    $message = "";
    $data = $dbConnection::where("CPhone", $CPhone)->get();
    if(!$data){
      try{
        if($CFName){
          $dbConnection->CFName = $CFName;
        }else{
          $dbConnection->CFName = "NA";
        }
        if($CLName){
          $dbConnection->CLName = $CLName;
        }else{
          $dbConnection->CLName = "NA";
        }
        if($CAddress){
          $dbConnection->CAddress = $CAddress;
        }else{
          $dbConnection->CAddress = "NA";
        }
        if($CCity){
          $dbConnection->CCity = $CCity;
        }else{
          $dbConnection->CCity = "NA";
        }
        if($CState){
          $dbConnection->CState = $CState;
        }else{
          $dbConnection->CState = "NA";
        }
        if($CZipCode){
          $dbConnection->CZipCode = $CZipCode;
        }else{
          $dbConnection->CZipCode = "NA";
        }
        if($CEmail){
          $dbConnection->CEmail = $CEmail;
        }else{
          $dbConnection->CEmail = "NA";
        }
        if($CPhone){
          $dbConnection->CPhone = $CPhone;
        }else{
          $dbConnection->CPhone = "NA";
        }
        if($CMemberType){
          $dbConnection->CMemberType = $CMemberType;
        }else{
          $dbConnection->CMemberType = "NA";
        }
        if($UseSalonCardId){
          $dbConnection->UseSalonCardId = $UseSalonCardId;
        }else{
          $dbConnection->UseSalonCardId = "NA";
        }

        $now = time();
        $dbConnection->CRegisterDate = date('Y-m-d H:i:s', $now);
        $dbConnection->save();
        $message = 1;
      }
      catch(Exception $e){
          $message = $e;
      }

    }
    else{
      $message = 0;
    }

    return $message;


  }
}
