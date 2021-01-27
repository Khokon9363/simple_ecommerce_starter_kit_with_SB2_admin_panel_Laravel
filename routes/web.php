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

Route::group(['namespace' => 'Shop'], function(){
    Route::get('/', 'ShopController@show');
    Route::get('/about', 'ShopController@about');
    Route::get('/contact', 'ShopController@contact');
    Route::get('/product', 'ShopController@product');
    Route::get('/single', 'ShopController@single');
});

Route::group(['namespace' => 'Admin'], function(){

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
