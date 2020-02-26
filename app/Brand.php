<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //public $table = "brands";
    public $primaryKey = "id_brand";
    public $timestamps = false;
    public $guarded = [];
}
