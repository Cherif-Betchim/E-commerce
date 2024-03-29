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


// Seuls les utilisateurs admin peuvent accéder aux routes suivantes
Route::middleware(['admin'])->group(function() {

    // Les Controllers des routes suivantes se trouvent dans le dossier Controllers/Admin
    Route::namespace('Admin')->group(function() {

        /*
        | Les routes suivantes auront automatiquement le préfix "admin"
        | Par exemple : la route 'products' correspond à l'url '/admin/products
        */
        Route::prefix('admin')->group(function() {

            //                                  welcome
            Route::get('/', 'WelcomeController@index')->name('adminIndex');




//-------------------------------------------------------------------
//                             (Admin) Product
//-------------------------------------------------------------------


            //                                  - read
            Route::get('products', 'ProductController@index')->name('productIndex');

            //                                  - create
            Route::get('products/create', 'ProductController@create')->name('productCreate');
            Route::post('products', 'ProductController@store')->name('productStore');

            //                                  - update
            Route::get('products/edit/{id}', 'ProductController@edit')->name('productEdit');
            Route::put('products', 'ProductController@update')->name('productUpdate');

            //                                  - destroy
            Route::delete('products/{id}', 'ProductController@destroy')->name('productDestroy');


            //-------------------------------------------------------------------
            //                             (Admin) Category
            //-------------------------------------------------------------------

            //                                  - read
            Route::get('categories', 'CategoryController@index')->name('categoryIndex');

            //                                  - create
            Route::get('categories/create', 'CategoryController@create')->name('categoryCreate');
            Route::post('categories', 'CategoryController@store')->name('categoryStore');

            //                                  - update
            Route::get('categories/edit/{category}', 'CategoryController@edit')->name('categoryEdit');
            Route::put('categories', 'CategoryController@update')->name('categoryUpdate');

            //                                  - destroy
            Route::delete('categories/{id}', 'CategoryController@destroy')->name('categoryDestroy');


            //-------------------------------------------------------------------
            //                             (Admin) Order
            //-------------------------------------------------------------------

            Route::get('orders', 'OrderController@index')->name('adminOrderIndex');
            Route::get('orders/{id}', 'OrderController@show')->name('adminOrderShow');

        });
    });
});



// Seuls les utilisateurs authentifiés peuvent accéder aux routes suivantes
Route::middleware(['auth'])->group(function() {

    // profil utilisateur
    Route::prefix('user')->group(function() {

        Route::namespace('User')->group(function() {

            Route::get('/index', 'AccountController@index')->name('userIndex');
            Route::get('/profile', 'ProfileController@index')->name('userProfile');
            Route::get('/addresses', 'AddressesController@index')->name('userAddresses');
        });

        Route::get('/orders', 'OrderController@index')->name('orderIndex');
        Route::get('/orders/{order}', 'OrderController@show')->name('orderShow');
    });

    //-------------------------------------------------------------------
    //                             (Front) Order
    //-------------------------------------------------------------------

    Route::post('/orders', 'OrderController@store')->name('orderStore');
    Route::get('/checkout/confirmation', 'OrderController@confirm')->name('orderConfirm');
});


// Tous les utilisateurs peuvent accéder aux routes suivantes

Route::get('/', 'WelcomeController@index')->name('index');


//-------------------------------------------------------------------
//                             (Front) Product
//-------------------------------------------------------------------

//                                  - read
Route::get('/products', 'ProductController@index')->name('frontProductIndex');
Route::get('/products/{id}', 'ProductController@show')->name('frontProductShow');


//-------------------------------------------------------------------
//                             (Front) Category
//-------------------------------------------------------------------

Route::get('/category/{category}', 'CategoryController@show')->name('frontCategoryShow');



//-------------------------------------------------------------------
//                             TO WORK ON
//-------------------------------------------------------------------



Route::get('/cgv', 'CgvController@show');
Route::get('/contact', 'ContactController@show')->name('contactIndex');
Route::post('/contact/results', 'ContactController@store');



Route::get('/add-to-cart/{id}', 'CartController@getAddToCart')->name('productAddToCart');
Route::get('/cart', 'CartController@getCart')->name('cartIndex');
Route::get('/reduce/{id}', 'CartController@getReduceByOne')->name('cartReduceByOne');
Route::get('/add/{id}', 'CartController@getAddByOne')->name('cartAddByOne');
Route::get('/remove/{id}', 'CartController@getRemoveItem')->name('cartRemoveItem');

Route::get('/checkout', 'CheckoutController@getCheckout')->name('checkoutIndex');

Route::post('/checkout', 'CheckoutController@getCheckout')->name('checkoutPay');


Route::get('/comment/create', 'CommentController@create')->name('commentCreate');
Route::post('/comment', 'CommentController@store')->name('commentStore');



Route::get('/comment/show', 'CommentController@sho')->name('commentSho');

Route::post('/products/{id}/comments', 'CommentsController@store')->name('addComment');


Auth::routes();
