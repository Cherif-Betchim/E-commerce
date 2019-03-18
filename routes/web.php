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

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/admin', 'AdminWelcomeController@index')->name('adminIndex');


//-------------------------------------------------------------------
//                             (Front) Product
//-------------------------------------------------------------------

//                                  - read
Route::get('/products', 'ProductController@index')->name('frontProductIndex');
Route::get('/products/{id}', 'ProductController@show')->name('frontProductShow');

//                                  - other
Route::post('/cart', 'ProductController@cart')->name('frontProductCart');


//-------------------------------------------------------------------
//                             (Admin) Product
//-------------------------------------------------------------------

//                                  - read
Route::get('/admin/products', 'AdminProductController@index')->name('productIndex');

//                                  - create
Route::get('/admin/products/create', 'AdminProductController@create')->name('productCreate');
Route::post('/admin/products', 'AdminProductController@store')->name('productStore');

//                                  - update
Route::get('/admin/products/edit/{id}', 'AdminProductController@edit')->name('productEdit');
Route::patch('/admin/products', 'AdminProductController@update')->name('productUpdate');

//                                  - destroy
Route::delete('/admin/products/{id}', 'AdminProductController@destroy')->name('productDestroy');



//-------------------------------------------------------------------
//                             TO WORK ON
//-------------------------------------------------------------------

Route::get('/checkout','CheckoutController@show');
Route::get('/my-account', 'AccountController@index');
Route::get('/cart', 'CartController@index')->name('cartIndex');
Route::get('/cgv', 'CgvController@show');
Route::get('/contact', 'ContactController@show');
Route::post('/contact/results', 'ContactController@store');

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController',
    'as' => 'product.addToCart'
]);