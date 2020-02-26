<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table = "roles";
     public $primaryKey = "id_roles";
     public $timestamps = false;
     public $guarded = [];
}
}
