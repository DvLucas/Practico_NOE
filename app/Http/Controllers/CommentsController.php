<?php

namespace App\Http\Controllers;

use App\Products;

use App\Http\Requests\CommentRequest;

use Illuminate\Database\Eloquent\Model;
 
use App\Presenters\DatePresenter;

class CommentsController extends Controller
{

        public function __construct() {
            $this->middleware('auth');
        }
     
     
        public function store(CommentRequest $request)
        {
            $product = Products::findOrFail($request->product_id);
     
            Comment::create([
                'body' => $request->body,
                'user_id' => Auth::id(),
                'product_id' => $product->product_id
            ]);
            return redirect()->route('/shop/item'.$product->product_id);
        }
    
    
}
