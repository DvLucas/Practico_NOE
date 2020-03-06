<?php

namespace App;

use App\Products;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $primaryKey = "id_comment";
    public $guarded = [];

    protected $fillable = ['body', 'user_id', 'product_id'];
 
    public function post()
    {
      return $this->belongsTo(Products::Class, 'product_id');
    }
   
    public function user()
    {
      return $this->belongsTo(User::Class, 'user_id');
    }
}
