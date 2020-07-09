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

Route::get('/users','UserController@index')->name('home');


//
Route::get('/users/create','UserController@create');    // lấy form thêm người dùng
Route::get('/users/{user}','UserController@show');      // xem chi tiết người dùng

Route::delete('/users/{id}','UserController@destroy');

Route::post('users','UserController@store');

// update
Route::get('/users/{user}/edit', 'UserController@edit');
Route::patch('/users/{user}', 'UserController@update');