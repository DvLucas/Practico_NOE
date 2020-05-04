<?php

namespace App\Http\Controllers;

use App\Color;
use App\Products;
use App\Colors_products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( !empty(session('colores')) ){
            $products = [];
            $productColors= [];
            foreach (session('colores') as $key => $value) {
                $productColors[]= Colors_products::find($value);
            }
        /*     dd($productColors); */
            $colors = Color::get();
            return view('cart',compact('colors','productColors'));   
        }
        return view('cart');
    }

    public function show()
    {
        if( !empty(session('carrito')) ){
            $products = [];
            foreach (session('carrito') as $key => $value) {
                $products[]= Products::find($value);
            }
            $colors = Color::get();
            return response()->json(['status' => 'ok', 'products' => $products, 'colors' => $colors]);
            /* return view('cart',compact('products','colors'));   */ 
        }
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
        $carrito = $request->session()->get('carrito');
        $color = $request->session()->get('colores');

        if($color == null)
        {
            $request->session()->push('colores',$request->idColor);
        }
        else  
        {
            if( !in_array($request->idColor, $color) )
            {
                $request->session()->push('colores', $request->idColor);
                if (in_array($request->id, $carrito)){
                    $all_cart = count($request->session()->get('colores'));
                    return response()->json(['status' => 'ok','cantidad' => $all_cart]);
                }
            }
            else {
                if(!empty($color))
                {
                    foreach($color as $key => $c)
                    {
                        if($c == $request->idColor)
                        {
                            unset($color[$key]);
                        }
                    }
                }
    
                $request->session()->forget('colores');
    
                if(!empty($color))
                {
                    foreach($color as $key => $c)
                    {
                        $request->session()->push('colores', $c);
                    }
                }
            }
        }


        if($carrito == null)
        {
            $request->session()->push('carrito',$request->id);
            $all_cart = count($request->session()->get('carrito'));
            return response()->json(['status' => 'ok', 'id' => '#cart-'.$request->id, 'cantidad' => $all_cart, 'text' => 'Agregado']);
        }
        else
        {
            if(!in_array($request->id, $carrito))
            {
                $request->session()->push('carrito', $request->id);
                $all_cart = count($request->session()->get('carrito'));
                return response()->json(['status' => 'ok', 'id' => '#cart-'.$request->id, 'cantidad' => $all_cart, 'text' => 'Agregado']);
            }
            else
            {
                if(!empty($carrito))
                {
                    foreach($carrito as $key => $c)
                    {
                        if($c == $request->id)
                        {
                            unset($carrito[$key]);
                        }
                    }
                }

                $request->session()->forget('carrito');

                if(!empty($carrito))
                {
                    foreach($carrito as $key => $c)
                    {
                        $request->session()->push('carrito', $c);
                    }
                }

                if(!empty($request->session()->get('carrito')))
                {
                    $all_cart = count($request->session()->get('carrito'));
                }
                else
                {
                    $all_cart = 0;
                }

                return response()->json(['status' => 'deleted', 'id' => '#cart-'.$request->id, 'cantidad' => $all_cart, 'text' => 'Eliminado']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function show($id)
    {
        //
    } */

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
        dd($id);
    }
}
