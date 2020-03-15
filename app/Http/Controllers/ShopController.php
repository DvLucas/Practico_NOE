<?php

namespace App\Http\Controllers;

use App\Color;
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
        $products = Products::/* with('color_product')-> */where('state','=','1')->paginate(9);
        $categories = Categories::with('id_children_category')
        ->whereNull('id_father_category')
        ->get();
        $colors = Color::get();
        $var =compact('now','brands','products','categories','colors');

        return view('shop.shop',$var);
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
        if($tipo == 'category'){
            $categories = Categories::get();
            $category = $categories->find($id);
            if($category->id_father_category == null){
                $products = Products::where('state', 1)
                    ->whereHas('category.id_father_category', function ($query) use ($id) {
                        $query->where('id_category', $id);
                    })->with('brand')->with('category')->with('comments')
                    ->paginate(9);
                    $nav = "category";
            }else{
                $products = Products::where('id_category','=',$id)->paginate(9);
                $nav = "category";
            }
        }else{
            $nav = "brand";
            $products = Products::where('id_brand','=',$id)->paginate(9);
        }

        $brands = Brands::get();
        $now = Carbon::now();
        $categories = Categories::with('id_children_category')
        ->whereNull('id_father_category')
        ->get();
        $colors = Color::get();

        
        $var =compact('now','brands','products','categories','nav','colors');

        return view('shop.shop',$var);
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
