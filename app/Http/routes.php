<?php

use Illuminate\Support\Facades\Mail;

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('test', 'CheckOutController@test');

    Route::get('email', function(){

        Mail::send('email.test', ['name' => 'Daniel'], function($message)
        {
            $message->to('doniexlemavorum@gmail.com', 'Some Guy')->from('atendimento@lemosweb.com.br')->subject('Welcome!');
        });


    });

    Route::get('/', 'StoreController@index');

    Route::get('category/{id}',['as' => 'store.category', 'uses' => 'StoreController@category']);
    Route::get('product/{id}',['as' => 'store.product', 'uses' => 'StoreController@product']);


    Route::get('cart',['as' => 'store.cart', 'uses' =>'CartController@index']);
    Route::get('cart/add/{id}', ['as' => 'cart.add', 'uses' => 'CartController@add']);
    Route::get('cart/destroy/{id}', ['as' => 'cart.destroy', 'uses' => 'CartController@destroy']);

    Route::get('evento', function(){

       event(new \CodeCommerce\Events\CheckoutEvent());

    });


    Route::group(['middleware' => ['web','auth']], function(){
    Route::get('checkout/placeOrder', ['as' => 'checkout.place', 'uses' => 'CheckOutController@place']);
    Route::get('account/orders', ['as' => 'account.orders', 'uses' => 'AccountController@orders']);
    });



});


Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function(){




    Route::group(['prefix' => 'categories'], function(){

        Route::get('/',['as' => 'categories.index', 'uses' => 'AdminCategoriesController@index']);
        Route::get('create',['as' => 'categories.create', 'uses' => 'AdminCategoriesController@create']);
        Route::post('store',['as' => 'categories.store', 'uses' => 'AdminCategoriesController@store']);
        Route::get('destroy/{id}',['as' => 'categories.destroy', 'uses' => 'AdminCategoriesController@destroy']);
        Route::get('edit/{id}',['as' => 'categories.edit', 'uses' => 'AdminCategoriesController@edit']);
        Route::put('update/{id}',['as' => 'categories.update', 'uses' => 'AdminCategoriesController@update']);

    });

    Route::group(['prefix' => 'products'], function(){

        Route::get('/',['as' => 'products.index', 'uses' => 'AdminProductsController@index']);
        Route::get('create',['as' => 'products.create', 'uses' => 'AdminProductsController@create']);
        Route::post('store',['as' => 'products.store', 'uses' => 'AdminProductsController@store']);
        Route::get('{id}/edit', ['as' => 'products.edit', 'uses' => 'AdminProductsController@edit']);
        Route::put('{id}/update', ['as' => 'products.update', 'uses' => 'AdminProductsController@update']);
        Route::get('{id}/destroy',['as' => 'products.destroy', 'uses' => 'AdminProductsController@destroy']);

        Route::group(['prefix' => 'images'], function(){

            Route::get('{id}/product',['as'=>'products.images', 'uses' => 'AdminProductsController@images']);
            Route::get('create/{id}/product',['as'=>'products.images.create', 'uses' => 'AdminProductsController@createImage']);
            Route::post('store/{id}/product',['as'=>'products.images.store', 'uses' => 'AdminProductsController@storeImage']);
            Route::get('destroy/{id}/product',['as'=>'products.images.destroy', 'uses' => 'AdminProductsController@destroyImage']);


        });
    });
});












