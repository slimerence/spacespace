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

Route::get('/about-us', '\Smartbro\Controllers\CustomPageController@about');
/*Route::get('/term', '\Smartbro\Controllers\CustomPageController@term');
Route::get('/return', '\Smartbro\Controllers\CustomPageController@return');*/

