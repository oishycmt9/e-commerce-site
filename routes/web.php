<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require_once 'category/category-router.php';
require_once 'brand/brand-router.php';
require_once 'supplier/supplier-router.php';
require_once 'product/product-router.php';
require_once 'purchase/purchase-router.php';
require_once 'category-one/category-one-router.php';
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Frontend
Route::get('/searchajax','SiteController@SearchautoComplete')->name('searchproductajax');
Route::post('/searching','SiteController@result');

Route::get('/', 'SiteController@home');
Route::get('/{id}/{type}', 'SiteController@home');
Route::get('/{type}/{min}/{max}', 'SiteController@price');
Route::get('/single', 'SiteController@single');
Route::get('/{type}/{id}', 'SiteController@category');
Route::get('/product-details/{id}', 'SiteController@productDetails');


/*Navbar Menu of Front-end*/
Route::get('/about','SiteController@about');
Route::get('/contact','SiteController@contact');
Route::get('/checkout','SiteController@checkout');
Route::get('/payment','SiteController@payment');


