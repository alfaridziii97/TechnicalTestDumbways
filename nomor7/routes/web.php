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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/buat-artikel-baru', 'HomeController@create')->name('create');
Route::post('/buat-artikel-baru', 'HomeController@store');
Route::get('/artikel/{id}', 'HomeController@show');

Route::get('/artikel/edit/{id}','HomeController@edit')->name('edit');
Route::post('/artikel/edit/{news}','HomeController@update');
