<?php
Route::get('category-one/create-one',[
    'uses'=>'CategoryController@createOne',
    'as'=>'category-one/create-one'
]);

Route::post('category-one/store-one',[
    'uses'=>'CategoryController@storeOne',
    'as'=>'category-one/store-one'
]);

Route::get('category-one/show-one',[
    'uses'=>'CategoryController@showOne',
    'as'=>'category-one/show-one'
]);

Route::get('category-one/edit-one/{id}',[
    'uses'=>'CategoryController@editOne',
    'as'=>'category-one/edit-one'
]);

Route::post('category-one/update-one',[
    'uses'=>'CategoryController@updateOne',
    'as'=>'category-one/update-one'
]);

Route::get('category-one/delete-one/{id}',[
    'uses'=>'CategoryController@deleteOne',
    'as'=>'category-one/delete-one'
]);
