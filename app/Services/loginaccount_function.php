<?php
namespace App\Services;
use App\Model\loginaccount;

class loginaccount_function{

  public function fetching_all_data(){
    $dbConnection = new loginaccount();
    $data = $dbConnection::all();
    return $data;

  }

  public function fetching_data_with_condition($employeeID){
    $dbConnection = new loginaccount();
    $data = $dbConnection::where("BelongToEmployee", $employeeID)->get();
    return $data;

  }

  public function fetching_data_with_loginaccountID($LID){
    $dbConnection = new loginaccount();
    $data = $dbConnection::where("LID", $LID)->with('employee')->get();
    return $data;

  }

  public function update_lastlogindate($LID){
    $dbConnection = new loginaccount();
    $global = new global_variables();
    $message = 0;
    try{
      $now = time();
      $minus_time = $global->minus_time;
      $LastLoginDate = date('Y-m-d H:i:s', $now - $minus_time);
      $data = $dbConnection::where("LID", $LID)->update(['LLastLoginDate' => $LastLoginDate]);
      $message = 1;
    }catch(Exception $e){
        $message = $e;
    }

    return $message;
  }
}
