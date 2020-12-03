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

Route::get('/', 'ShopController@show');
Route::get('/about', 'ShopController@about');
Route::get('/contact', 'ShopController@contact');
Route::get('/login', 'ShopController@show');
Route::get('/register', 'ShopController@show');
Route::get('/product', 'ShopController@product');
Route::get('/single', 'ShopController@single');