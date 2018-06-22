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
Route::get('/upload','FileController@index');
Route::post('/upload','FileController@store')->name('file.store');
Route::get('/show','FileController@show')->name('file.show');
Route::get('/edit/{id}','FileController@edit')->name('file.edit');
Route::match(['PUT','PATCH'],'/update/{id}','FileController@update')->name('file.update');
