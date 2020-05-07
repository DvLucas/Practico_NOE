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
    return redirect('home');
});
Route::get('/back', function () {
    return back();
})->name('back');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/panel', 'panelController@log')->name('dashboard');

Route::prefix('/panel')->group(function () {
    Route::get('products/show_colors/{id}', 'dashboard\ProductsController@show_colors')->name('products.show_colors');
    Route::resource('products', 'dashboard\ProductsController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('brands', 'BrandController');
    Route::resource('colors', 'ColorsController');
    Route::resource('colors_products', 'ColorsProductsController');
    
});

Route::get('/tienda', 'ShopController@index')->name('shop');
Route::get('/tienda/search/{tipo}/{id?}', 'ShopController@show')->name('search');
/* Route::resource('/cart', 'CartController@index')->name('cart'); */
Route::post('cart.store', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('cart.destroy/{id}', 'CartController@destroy')->name('cart.destroy');
Route::get('cart.show', 'CartController@show')->name('cart.show');

Route::get('/tienda/item/{id_product}', 'ProductsController@show')->name('item');
Route::resource('comments','CommentsControllers');




Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


Route::get('/usuario','UserController@vista')->name('usuario');
Route::get('/editar/{dato}','UserController@editar')->name('user.editar');
Route::put('/editar/{id}','UserController@update')->name('user.update');
