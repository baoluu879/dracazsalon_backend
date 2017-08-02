<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\salonservice;

class servicespackagedetail extends Model
{
    //
    protected $table = "servicespackagedetail";
    protected $connection = "mysql";

    public function salonservice(){
      $dbConnection = new salonservice();
      return $this->hasOne($dbConnection, 'SID', 'SalonServiceID');
    }
}
