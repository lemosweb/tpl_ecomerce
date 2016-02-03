<?php


Route::get('/', function () {
    return view('welcome');
});




Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'categories'], function(){

        Route::get('/',['as' => 'categories.index', 'uses' => 'CategoriesController@index']);
        Route::get('create',['as' => 'categories.create', 'uses' => 'CategoriesController@create']);
        Route::post('store',['as' => 'categories.store', 'uses' => 'CategoriesController@store']);
        Route::get('destroy/{id}',['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy']);
        Route::get('edit/{id}',['as' => 'categories.edit', 'uses' => 'CategoriesController@edit']);
        Route::put('update/{id}',['as' => 'categories.update', 'uses' => 'CategoriesController@update']);

    });

    Route::group(['prefix' => 'products'], function(){

        Route::get('admin',['as' => 'products.index', 'uses' => 'ProductsController@index']);

    });


});

