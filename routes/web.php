<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/' , 'App\Http\Controllers\WebsiteController@index_page')->name('index_page');
Route::get('/search' , 'App\Http\Controllers\WebsiteController@search_page')->name('search_page');

Route::get('/product/{id}' , 'App\Http\Controllers\WebsiteController@product_page')->name('product_page');


