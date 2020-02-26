<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
     //public $table = "colors";
     public $primaryKey = "id_color";
     public $timestamps = false;
     public $guarded = [];
}
