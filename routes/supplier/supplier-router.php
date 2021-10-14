<?php

Route::get('supplier/create',[
    'uses'=>'SupplierController@create',
    'as'=>'supplier/create'
]);

Route::post('supplier/store',[
    'uses'=>'SupplierController@store',
    'as'=>'supplier/store'
]);

Route::get('supplier/show',[
    'uses'=>'SupplierController@show',
    'as'=>'supplier/show'
]);

Route::get('supplier/edit/{id}',[
    'uses'=>'SupplierController@edit',
    'as'=>'supplier/edit'
]);

Route::post('supplier/update',[
    'uses'=>'SupplierController@update',
    'as'=>'supplier/update'
]);

Route::get('supplier/details/{id}',[
    'uses'=>'SupplierController@details',
    'as'=>'supplier/details'
]);

Route::get('supplier/delete/{id}',[
    'uses'=>'SupplierController@delete',
    'as'=>'supplier/delete'
]);


