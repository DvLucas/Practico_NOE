<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Products $product
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        $comments = Comments::where('id_product','=',$product->id_product)->get();
        return ;
    }
    
}
