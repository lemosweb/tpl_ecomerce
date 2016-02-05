<?php


Route::get('/', function () {
    return view('welcome');
});




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


        });



    });


});

