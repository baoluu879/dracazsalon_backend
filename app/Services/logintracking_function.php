<?php
namespace App\Services;
use App\Model\logintracking;
use App\Services\global_variables;

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
    $global = new global_variables();

    $message = 0;
    try{
      $dbConnection->LID = $LID;
      $now = time();
      $minus_time = $global->minus_time;
      $dbConnection->LoginDate = date('Y-m-d H:i:s', $now - $minus_time);
      $dbConnection->save();
      $message = 1;
    }catch(Exception $e){
        $message = $e;
    }

    return $message;
  }
}
