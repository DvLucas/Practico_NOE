<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
     //public $table = "favorites";
     public $primaryKey = "id_favorite";
     public $timestamps = false;
     public $guarded = [];
}
