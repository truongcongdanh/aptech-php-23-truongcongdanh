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

// Route::resource('/data','DataController');
Route::get('trangChu', 'DataController@trangChu')->name('trangChinh');
Route::get('monAn', 'DataController@monAn')->name('trangMonAn');
Route::get('thucUong', 'DataController@thucUong')->name('trangThucUong');
Route::get('compo', 'DataController@compo')->name('trangCompo');
Route::get('giamGia', 'DataController@giamGia')->name('trangGiamGia');
Route::get('lienHe', 'DataController@lienHe')->name('trangLienHe');
// 
Route::get('image', 'ImageController@index')->name('trangThemMon');
Route::post('image', 'ImageController@save');

// thêm món ăn
Route::get('themMonAn', 'ThemMonAnController@index');

Route::post('themMonAn/insert_image', 'ThemMonAnController@insert_image');

Route::get('themMonAn/fetch_image/{id}', 'ThemMonAnController@fetch_image');

// Show món ăn
Route::get('showMonAn', 'CartController@showMonAn');
Route::get('AddCart/{id}', 'CartController@addCart');
Route::get('deleteItemCart/{id}', 'CartController@DeleteItemCart');

Route::get('search', 'DataController@search');

Route::get('create','DataController@create');
// Route::post('addimage','DataController@store')->name('addimage');



