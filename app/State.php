<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
     //public $table = "states";
     public $primaryKey = "id_state";
     public $timestamps = false;
     public $guarded = [];
}
