<?php

namespace App\Http\Controllers;

use App\Products;
use App\Brands;
use App\Categories;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = Products::find($product_id);
    
        
        return view('item' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductPost $request, Products $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {

    }
}
