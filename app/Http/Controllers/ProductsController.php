<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Products;
use App\Categories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductPost;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::get();
        return view('dashboard.products.list',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::get();
        $categoriesFathers=[];
        $categoriesChildren=[];
        foreach ($categories as $category){
            if(!$category->id_father_category){
                $categoriesFathers[] = $category;
            }else{
                $categoriesChildren[] = $category;
            }
        }
        $brands = Brands::pluck('id_brand','description');
        return view ('dashboard.products.create', ['categoriesFathers' => $categoriesFathers,'categoriesChildren' => $categoriesChildren,'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
        Products::create($request->validated());

        return redirect('panel/products')->with('status', 'Producto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        if ($product->state == 0) {
            $affected = $product->update(['state' => 1]);
            return back()->with('status', 'Producto agregado a tienda');
        }else{
            $affected = $product->update(['state' => 0]);
            return back()->with('status', 'Producto quitado de tienda');
        }
    }
}
