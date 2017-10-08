<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\loginaccount_function;

class loginaccount_controller extends Controller
{
    //

    public function index(){
      $data["message"]= "False";
      $temp = new loginaccount_function();
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

    public function getting_data_with_employeeID($employeeID){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "loginaccount/belongto/<employeeID>";
        $temp = new loginaccount_function();
        $result = $temp->fetching_data_with_condition($employeeID);
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


    public function getting_data_with_loginaccountID($LID){
      $message = "False";
      $data["message"]= $message;
      try{
        $data["parameter"]= "loginaccount/<LID/Username>";
        $temp = new loginaccount_function();
        $result = $temp->fetching_data_with_loginaccountID($LID);
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

    public function updating_loginaccount_lastlogindate($LID){
      $message = "False";
      $data["message"]= $message;

      try{

        $data["parameter"]= "loginaccount/update_lastlogindate/<LID>";
        $temp = new loginaccount_function();
        $checkexisting = $temp->fetching_data_with_loginaccountID($LID);
        if($checkexisting && sizeof($checkexisting) > 0){
          $result = $temp->update_lastlogindate($LID);
          if($result == 1){
            $data["data"] = "Successful Updating Login Account";
            $message = "True";
          }else{
            $message = "False";
            $data["data"] = "Failed to Update Login Account";
          }
        }
        else{
          $message = "False";
          $data["data"] = "Login Username Does Not Exist";
        }
      }catch(Exception $e){
          $message = "False";
          $data["data"] = $result;
      }
      $data["message"]= $message;
      return $data;
    }
}
