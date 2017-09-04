<?php
namespace App\Services;
use App\Model\logintracking;

class logintracking_function{

  public function fetching_all_data(){
    $dbConnection = new logintracking();
    $data = $dbConnection::all();
    return $data;

  }

  // public function fetching_data_with_condition($employeeID){
  //   $dbConnection = new loginaccount();
  //   $data = $dbConnection::where("BelongToEmployee", $employeeID)->get();
  //   return $data;
  //
  // }

  public function create_new_logintracking($LID){
    $dbConnection = new logintracking();
    $message = 0;
    try{
      $dbConnection->LID = $LID;
      $now = time();
      $dbConnection->LoginDate = date('Y-m-d H:i:s', $now);
      $dbConnection->save();
      $message = 1;
    }catch(Exception $e){
        $message = $e;
    }

    return $message;
  }
}
