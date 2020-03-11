<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Gallery;
use App\Products;
use Carbon\Carbon;
use App\Categories;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $brands = Brands::get();
        $products = Products::where('state','=','1')->paginate(9);

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

        return view('shop.shop',['products'=>$products,'now'=>$now, 'brands' => $brands,'categoriesFathers' => $categoriesFathers,'categoriesChildren' => $categoriesChildren]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tipo,$id)
    {   
        $products = Products::where('state', 1)
        ->whereHas('category.id_father_category', function ($query) use ($id) {
            $query->where('id_category', $id);
        })->with('brand')->with('category')->with('comments')
        ->paginate(9);

        if($tipo == 'category'){
            if($id >= 1 && $id <= 4){
                //$products = Products::category()->where('id_father_category','=',$id)->paginate(9);
            }else{
                $products = Products::where('id_category','=',$id)->paginate(9);
            }
        }else{
            $products = Products::where('id_brand','=',$id)->paginate(9);
        }

        $brands = Brands::get();
        $now = Carbon::now();
        
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

        return view('shop.shop',['products'=>$products,'now'=>$now, 'brands' => $brands,'categoriesFathers' => $categoriesFathers,'categoriesChildren' => $categoriesChildren]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
