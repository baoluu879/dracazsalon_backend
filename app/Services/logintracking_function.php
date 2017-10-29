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

  // public function fetching_data_with_loginID($LID){
  //   $dbConnection = new logintracking();
  //   $data = $dbConnection::where("LID", $LID)->get();
  //   return $data;
  // }

  public function fetching_latest_data_loginID($LID){
    $dbConnection = new logintracking();
    $data = $dbConnection::where("LID", $LID)->orderBy('LoginDate', 'desc')->limit(1)->get();
    return $data;
  }

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

  public function updating_logout($LID, $LogOutDateTime){
    $dbConnection = new logintracking();
    $global = new global_variables();
    $message = 0;
    try{
      $checkDate = $dbConnection::where("DATE(LoginDate)", $LogOutDateTime);
      if($checkDate){
        $now = time();
        $minus_time = $global->minus_time;
        $LogOutDate = date('Y-m-d H:i:s', $now - $minus_time);
        $data = $dbConnection::where("LID", $LID)->orderBy('LoginDate', 'DESC')->limit(1)->update(['LogoutDate' => $LogOutDate]);
        $message = 1;
      }else{
        $message = 0;
      }
    }catch(Exception $e){
        $message = $e;
    }
    return $message;
  }





}
