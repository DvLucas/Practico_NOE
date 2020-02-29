<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     //public $table = "categories";
     public $primaryKey = "id_category";
     public $timestamps = false;
     public $guarded = [];
}
