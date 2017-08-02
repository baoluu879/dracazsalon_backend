<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\servicespackagedetail;

class salonservice extends Model
{
    //
    protected $table = "salonservice";
    protected $connection = "mysql";

    public function servicespackagedetail(){
      $dbConnection = new servicespackagedetail();
      return $this->hasOne($dbConnection, 'SPID', 'SID');
    }
}
