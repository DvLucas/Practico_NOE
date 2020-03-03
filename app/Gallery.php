<?php

namespace App;

use App\Products;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
     public $table = "gallery";
     public $primaryKey = "id_gallery";
     public $timestamps = false;
     public $guarded = [];

     
    public function products(){
     return $this->belongsTo(Products::Class,'id_product');
 }
}
