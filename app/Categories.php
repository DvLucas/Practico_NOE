<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     //public $table = "categories";
     public $primaryKey = "id_category";
     public $timestamps = false;
     public $guarded = [];

     public function id_father_categoryf()
     {
          return $this->hasMany(Categories::class, 'id_category', 'id_father_category');
     }

     public function id_father_category()
     {
          return $this->hasMany(Categories::class, 'id_category', 'id_father_category');
     }

     public function id_children_category()
     {
          return $this->hasMany(Categories::class, 'id_father_category', 'id_category');
     }
}
