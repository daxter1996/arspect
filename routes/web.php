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
Route::get('/index', 'MainController@home');

Route::get('/search/{name}', 'MainController@search');
Route::get('/test', 'testController@index');
Route::get('/perfil', 'ProfileController@index');
Route::get('/personal', 'ProfileController@personal');
Route::get('/perfil/{id}', 'ProfileController@viewProfile');

Route::get('/about', 'MainController@about');


Auth::routes();
