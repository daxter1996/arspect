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

Route::get('/', 'MainController@index');
Route::get('/home', 'HomeController@index');
Route::get('/test', 'testController@index');
Route::get('/register/artist', 'RegisController@artist');
Route::get('/register/visitant', 'RegisController@visitant');
Route::get('/register', 'RegisController@index');



//Auth::routes();
