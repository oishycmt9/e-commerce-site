<?php

Route::get('purchase/create',[
    'uses'=>'PurchaseController@create',
    'as'=>'purchase/create'
]);

Route::post('purchase/store',[
    'uses'=>'PurchaseController@store',
    'as'=>'purchase/store'
]);

Route::get('purchase/show',[
    'uses'=>'PurchaseController@show',
    'as'=>'purchase/show'
]);

Route::get('purchase/edit/{id}',[
    'uses'=>'PurchaseController@edit',
    'as'=>'purchase/edit'
]);

Route::post('purchase/update',[
    'uses'=>'PurchaseController@update',
    'as'=>'purchase/update'
]);

//Route::get('purchase/details/{id}',[
//    'uses'=>'PurchaseController@details',
//    'as'=>'purchase/details'
//]);
//
Route::get('purchase/delete/{id}',[
    'uses'=>'PurchaseController@delete',
    'as'=>'purchase/delete'
]);


