<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\logintracking;
use App\Model\employee;

class loginaccount extends Model
{
    //
    protected $table = "loginaccount";
    protected $connection = "mysql";
    public $timestamps = false;

    public function logintracking(){
      $dbConnection = new logintracking();
      return $this->hasOne($dbConnection, 'LID', 'LID');
    }

    public function employee(){
      $dbConnection = new employee();
      return $this->hasOne($dbConnection, 'EID', 'BelongToEmployee');
    }
}
