<?php

namespace App;

use App\Brands;
use App\Categories;
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

    
}
