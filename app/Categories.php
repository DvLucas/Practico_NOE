<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     //public $table = "categories";
     public $primaryKey = "id_category";
     public $timestamps = false;
     public $guarded = [];

     public function categoriesChildren($id_father = null){
          if($id_father == null){
               $categories = Categories::where('id_father_category','!=',null)->get();
               return $categories;
          }
          $categories = Categories::where('id_father_category','=',$id_father)->get();
          return $categories;
     }

     public function categoriesFathers(){
          return Categories::where('id_father_category','=','null');
     }

}
