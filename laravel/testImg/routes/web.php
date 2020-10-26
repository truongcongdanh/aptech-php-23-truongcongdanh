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

Route::get('/', function () {
    return view('welcome');
});

Route::get('store_image', 'StoreImageController@index');

Route::post('store_image/insert_image', 'StoreImageController@insert_image');

Route::get('store_image/fetch_image/{id}', 'StoreImageController@fetch_image');


