<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
     public $table = "payments_methods";
     public $primaryKey = "id_payment_method";
     public $timestamps = false;
     public $guarded = [];
}
