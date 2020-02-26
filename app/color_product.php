<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color_product extends Model
{
     public $table = "colors_products";
     public $primaryKey = "id_color_product";
     public $timestamps = false;
     public $guarded = [];
}
