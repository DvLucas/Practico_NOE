<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_detail extends Model
{
     public $table = "sales_datails";
     public $primaryKey = "id_sale_detail";
     //public $timestamps = false;
     public $guarded = [];
}
