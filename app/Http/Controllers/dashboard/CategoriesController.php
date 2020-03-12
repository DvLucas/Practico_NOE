<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Categories::get();
        return (view('dashboard.products.cateogries',$categories))
    }
}
