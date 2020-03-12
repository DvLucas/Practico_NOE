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

Route::get('/panel', 'panelController@log');

Route::prefix('/panel')->group(function () {
    Route::resource('products', 'dashboard\ProductsController');
    Route::resource('gallery', 'GalleryController');
    Route::get('/products/categories', 'CategoriesController@index')->name('categories');
});



Route::get('/tienda', 'ShopController@index')->name('shop');
Route::get('/tienda/search/{tipo}/{id?}', 'ShopController@show')->name('search');
/* Route::resource('/cart', 'CartController@index')->name('cart'); */
Route::post('cart.store', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/tienda/item/{product_id}', 'ProductsController@show')->name('item');
Route::resource('comments','CommentsControllers');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


