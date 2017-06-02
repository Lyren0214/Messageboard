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


Route::get('/', ['uses' => 'MessageBoardController@index']);
Route::any('/create', ['uses' => 'MessageBoardController@create']);
Route::any('/save', ['uses' => 'MessageBoardController@save']);