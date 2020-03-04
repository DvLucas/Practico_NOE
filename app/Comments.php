<?php

namespace App;

use App\Products;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $primaryKey = "id_comment";
    public $guarded = [];

    
}
