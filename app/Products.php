<?php

namespace App;

use App\Brands;
use App\Gallery;
use App\Categories;
use App\Comments;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $primaryKey = "id_product";
    public $guarded = [];

    public function category(){
        return $this->belongsTo(Categories::Class,'id_category');
    }

    public function brand(){
        return $this->belongsTo(Brands::Class,'id_brand');
    }

    public function gallery(){
        return $this->hasMany(Gallery::Class,'id_product');
    }
    
    public function comments(){
      return $this->hasMany(Comments::Class, 'id_product');
    }

    public function color_product(){
        return $this->hasMany(Colors_products::Class, 'id_product');
    }
    
}
