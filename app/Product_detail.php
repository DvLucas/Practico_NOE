<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_detail extends Model
{
    public $table = "product_details";
    public $primaryKey = "id_product_detail";
    public $timestamps = false;
    public $guarded = [];
}
