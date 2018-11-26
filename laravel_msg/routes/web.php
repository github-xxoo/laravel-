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

Route::any('msg/add', 'MsgsController@add');
Route::any('msg/index', 'MsgsController@index');
Route::any('msg/delete/{id}', 'MsgsController@delete');
Route::any('msg/update/{id}', 'MsgsController@update');
