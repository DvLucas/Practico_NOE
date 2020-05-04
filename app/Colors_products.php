<?php

namespace App;

use App\Color;
use App\Products;
use Illuminate\Database\Eloquent\Model;

class Colors_products extends Model
{
     public $table = "colors_products";
     public $primaryKey = "id_color_product";
     public $timestamps = false;
     public $guarded = [];

     public function color(){
          return $this->belongsTo(Color::Class,'id_color');
      }
      public function color_product(){
          return $this->hasMany(Products::Class,'id_product','id_product');
      }
}
