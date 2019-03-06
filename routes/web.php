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



Route::get('/checkout','CheckoutController@show');

//-------------------------------------------------------------------
//                          ProductController
//-------------------------------------------------------------------

//                                  - read
Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/products/product/{id}', 'ProductController@show')->name('product.show');

//                                  - create
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::post('/products', 'ProductController@store')->name('product.store');


Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/cart', 'CartController@show');

Route::get('/cgv', 'CgvController@show');

Route::get('/contact', 'ContactController@show');

Route::post('/results', 'ResultsController@store');
