<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\logintracking_function;

class logintracking_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new logintracking_function();
      try{
        $result = $temp->fetching_all_data();
        if($result && sizeof($result) > 0){
          $data["data"] = $result;
          $message = "True";
        }else{
          $data["data"] = [];
        }
      }catch(Exception $e){
          $message = $e;
      }
      $data["message"]= $message;
      return $data;

    }

    // public function getting_data_with_employeeID($employeeID){
    //   $message = "False";
    //   $data["message"]= $message;
    //   try{
    //     $message = "True";
    //     $data["parameter"]= "loginaccount/<employeeID>";
    //     $temp = new logintracking_function();
    //     $data["data"] = $temp->fetching_data_with_condition($employeeID);
    //   }catch(Exception $e){
    //       $message = $e;
    //   }
    //   $data["message"]= $message;
    //   return $data;
    //
    // }

    public function creating_new_logintracking_record($LID){
      $message = "False";
      $data["message"]= $message;

      try{

        $data["parameter"]= "logintracking/add_new/<LID>";
        $temp = new logintracking_function();
        $result = $temp->create_new_logintracking($LID);
        if($result == 1){
          $data["data"] = "Successful Add New Login Tracking";
          $message = "True";
        }else{
          $message = "False";
          $data["data"] = "Failed to Add New Login Tracking";
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $result;
      }
      $data["message"]= $message;
      return $data;
    }

    public function updating_logout_of_logintracking_record($LID, $LogOutDateTime){
      $message = "False";
      $data["message"]= $message;

      try{
        $data["parameter"]= "/logintracking/update_logout/<LID>/<LogOutDateTime>";
        $temp = new logintracking_function();
        $result = $temp->updating_logout($LID, $LogOutDateTime);
        if($result == 1){
          $data["data"] = "Successful Logout Account";
          $message = "True";
        }else{
          $message = "False";
          $data["data"] = "Failed to Logout Account";
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $result;
      }
      $data["message"]= $message;
      return $data;

    }
}
