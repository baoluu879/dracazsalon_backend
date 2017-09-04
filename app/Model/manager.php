<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\employee;

class manager extends Model
{
    //
    protected $table = "manager";
    protected $connection = "mysql";
    public $timestamps = false;

    public function employee(){
      $dbConnection = new employee();
      return $this->hasOne($dbConnection, 'EID', 'EmployeeID');
    }
}
