<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/panel', 'panelController@log');

Route::prefix('/panel')->group(function () {
    Route::resource('products', 'dashboard\ProductsController');
    Route::resource('gallery', 'GalleryController');
});

Route::get('/tienda', 'ShopController@index')->name('shop');
Route::get('/tienda/{id_category}', 'ShopController@show')->name('findShop');

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/item/{id_product}', 'ProductsController@show');

Route::get('faq', function () {
    return view('faq');
});
Route::get('contacto', function () {
    return view('contacto');
});
