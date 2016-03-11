<?php


Route::get('/', 'StoreController@index');

Route::get('category/{id}',['as' => 'store.category', 'uses' => 'StoreController@category']);
Route::get('product/{id}',['as' => 'store.product', 'uses' => 'StoreController@product']);



Route::group(['middleware' => ['web']], function () {


    Route::group(['prefix' => 'admin'], function(){


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


});

