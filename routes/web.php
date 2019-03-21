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
Route::put('/admin/products', 'AdminProductController@update')->name('productUpdate');

//                                  - destroy
Route::delete('/admin/products/{id}', 'AdminProductController@destroy')->name('productDestroy');



//-------------------------------------------------------------------
//                             (Front) Category
//-------------------------------------------------------------------

Route::get('/category/{category}', 'CategoryController@show')->name('frontCategoryShow');



//-------------------------------------------------------------------
//                             (Admin) Category
//-------------------------------------------------------------------

//                                  - read
Route::get('/admin/categories', 'AdminCategoryController@index')->name('categoryIndex');

//                                  - create
Route::get('/admin/categories/create', 'AdminCategoryController@create')->name('categoryCreate');
Route::post('/admin/categories', 'AdminCategoryController@store')->name('categoryStore');

//                                  - update
Route::get('/admin/categories/edit/{category}', 'AdminCategoryController@edit')->name('categoryEdit');
Route::put('/admin/categories', 'AdminCategoryController@update')->name('categoryUpdate');
//                                  - destroy
Route::delete('/admin/categories/{id}', 'AdminCategoryController@destroy')->name('categoryDestroy');

//-------------------------------------------------------------------
//                             TO WORK ON
//-------------------------------------------------------------------


Route::get('/my-account', 'AccountController@index');
Route::get('/cgv', 'CgvController@show');
Route::get('/contact', 'ContactController@show')->name('contactIndex');
Route::post('/contact/results', 'ContactController@store');



Route::get('/add-to-cart/{id}', 'CartController@getAddToCart')->name('productAddToCart');
Route::get('/cart', 'CartController@getCart')->name('cartIndex');
Route::get('/reduce/{id}', 'CartController@getReduceByOne')->name('cartReduceByOne');

Route::get('/checkout', 'CheckoutController@getCheckout')->name('checkoutIndex');
Route::post('/checkout', 'CheckoutController@getCheckout')->name('checkoutPay');