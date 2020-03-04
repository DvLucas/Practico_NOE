<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:102400',//100mb
            'id_product' => 'required'
        ]);

        $filename = 'images/products/'.time() . '.' . $request->image->extension();
        
        Gallery::create(['id_product' => $request->id_product , 'url' => $filename , 'store' => 0 ]);
        $request->image->move( public_path('images/products') , $filename );
        
        return back();
        /* $products = Products::get();
        return view('dashboard.products.list',['products' => $products]);   */ 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $id = $gallery->id_product;
        $affected = DB::table('gallery')->where('id_product',$id)->update( ['store' => 0] );
        $affected = $gallery->update(['store'=>1]);
        return back();
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
    public function destroy(Gallery $gallery)
    {
        $image_path = public_path().'/'.$gallery->url;
        unlink($image_path);
        $gallery->delete();
        return back();
    }
}
