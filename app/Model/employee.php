<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\loginaccount;

class employee extends Model
{
    //
    protected $table = "employee";
    protected $connection = "mysql";
    public $timestamps = false;

    public function employee(){
      $dbConnection = new loginaccount();
      return $this->hasOne($dbConnection, 'LID', 'BelongToEmployee');
    }
}
