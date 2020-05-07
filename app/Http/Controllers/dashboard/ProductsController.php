<?php

namespace App\Http\Controllers\dashboard;

use App\Brands;
use App\Gallery;
use App\Products;
use App\Color;
use App\Colors_products;
use Carbon\Carbon;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
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
        $products = Products::paginate(6);
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
        if($request->validated()){
            $validation = $request->validated();
            $product = [];
            foreach ($validation as $key => $date) {
                if($key != 'image'){
                    $product [$key] = $date;
                }
            }
            $id = Products::create($product);
            $filename = 'images/products/'.time() . '.' . $validation['image']->extension();
            Gallery::create(['id_product' => $id->id_product , 'url' => $filename , 'store' => 1 ]);
            $validation['image']->move( public_path('images/products') , $filename );
        }

        return redirect('panel/products')->with('status', 'Producto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        $gallery = Gallery::where('id_product','=',$product->id_product)->get();
        return view('dashboard.products.image',['productImg' => $product ,'gallery' =>$gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
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
        

        return view ('dashboard.products.update',['product' => $product,'categoriesFathers' => $categoriesFathers,'categoriesChildren' => $categoriesChildren,'brands' => $brands]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_colors($id)
    {   
        $name_product = Products::where('id_product',$id)->value('name');
        $colors_stocked = Colors_products::where('id_product',$id)->pluck('id_color')->toArray();   
        $colors = Color::all();
    
        return view('dashboard.products.addColors', ['colors'=>$colors, 'id_product'=>$id, 'name_product'=>$name_product, 'colors_stocked'=>$colors_stocked]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductPost $request, Products $product)
    {
        $affected = $product->update($request->validated());
        return redirect('panel/products')->with('status', 'Producto actualizado');

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
