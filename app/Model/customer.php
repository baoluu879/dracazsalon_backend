<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $table = "customer";
    protected $connection = "mysql";
    public $timestamps = false;
}
