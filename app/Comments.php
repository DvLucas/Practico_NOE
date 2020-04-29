<?php

namespace App;

use App\Products;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $primaryKey = "id";
    public $guarded = [];

    protected $fillable = ['body', 'id_user', 'id_product'];
 
    public function post()
    {
      return $this->belongsTo(Products::Class, 'id_product');
    }
   
    public function user()
    {
      return $this->belongsTo(User::Class, 'id_user');
    }
}
