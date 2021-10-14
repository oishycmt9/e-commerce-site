<?php
Route::get('brand/create',[
    'uses'=>'BrandController@create',
    'as'=>'brand/create'
]);

Route::post('brand/store',[
    'uses'=>'BrandController@store',
    'as'=>'brand/store'
]);

Route::get('brand/show',[
    'uses'=>'BrandController@show',
    'as'=>'brand/show'
]);


Route::get('brand/edit/{id}',[
    'uses'=>'BrandController@edit',
    'as'=>'brand/edit'
]);

Route::post('brand/update',[
    'uses'=>'BrandController@update',
    'as'=>'brand/update'
]);

Route::get('brand/details/{id}',[
    'uses'=>'BrandController@details',
    'as'=>'course/details'
]);

Route::get('brand/delete/{id}',[
    'uses'=>'BrandController@delete',
    'as'=>'brand/delete'
]);

