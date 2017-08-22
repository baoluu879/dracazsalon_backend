<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\customer;
use App\Model\employee;

class saloncard extends Model
{
    //
    protected $table = "saloncard";
    protected $connection = "mysql";
    public $timestamps = false;

    public function customer(){
      $dbConnection = new customer();
      return $this->hasOne($dbConnection, 'UseSalonCardID', 'SLCID');
    }

    public function employee(){
      $dbConnection = new employee();
      return $this->hasOne($dbConnection, 'UseSalonCardID', 'SLCID');
    }
}
