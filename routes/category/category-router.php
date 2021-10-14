<?php

Route::get('category/create',[
    'uses'=>'CategoryController@create',
    'as'=>'category/create'
]);

Route::post('category/store',[
    'uses'=>'CategoryController@store',
    'as'=>'category/store'
]);

Route::get('category/show',[
    'uses'=>'CategoryController@show',
    'as'=>'category/show'
]);


Route::get('category/edit/{id}',[
    'uses'=>'CategoryController@edit',
    'as'=>'category/edit'
]);

Route::post('category/update',[
    'uses'=>'CategoryController@update',
    'as'=>'category/update'
]);

Route::get('category/details/{id}',[
    'uses'=>'CategoryController@details',
    'as'=>'category/details'
]);

Route::get('category/delete/{id}',[
    'uses'=>'CategoryController@delete',
    'as'=>'category/delete'
]);


