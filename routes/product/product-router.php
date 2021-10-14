<?php
Route::get('product/create',[
    'uses'=>'ProductController@create',
    'as'=>'product/create'
]);

Route::post('product/store',[
    'uses'=>'ProductController@store',
    'as'=>'product/store'
]);
Route::get('product/show',[
    'uses'=>'ProductController@show',
    'as'=>'product/show'
]);
Route::get('product/edit/{id}',[
    'uses'=>'ProductController@edit',
    'as'=>'product/edit'
]);

Route::post('product/update',[
    'uses'=>'ProductController@update',
    'as'=>'product/update'
]);

Route::get('product/details/{id}',[
    'uses'=>'ProductController@details',
    'as'=>'product/details'
]);

Route::get('product/delete/{id}',[
    'uses'=>'ProductController@delete',
    'as'=>'product/delete'
]);
