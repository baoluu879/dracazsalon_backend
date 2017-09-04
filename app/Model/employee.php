<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\loginaccount;
use App\Model\manager;

class employee extends Model
{
    //
    protected $table = "employee";
    protected $connection = "mysql";
    public $timestamps = false;

    public function loginaccount(){
      $dbConnection = new loginaccount();
      return $this->hasOne($dbConnection, 'BelongToEmployee', 'EID');
    }

    public function manager(){
      $dbConnection = new manager();
      return $this->hasOne($dbConnection, 'EmployeeID', 'EID');
    }
}
