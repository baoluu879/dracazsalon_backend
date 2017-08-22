<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    //
    protected $table = "employee";
    protected $connection = "mysql";
    public $timestamps = false;
}
