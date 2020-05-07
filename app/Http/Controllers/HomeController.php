<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    }
 */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $some_products = Products::where('price', '<', 20000)->paginate(9);
        return view('home', ['some_products'=>$some_products]);
    }
}
