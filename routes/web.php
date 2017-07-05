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
Route::get('/test', 'testController@index');
Route::get('/testg', 'testController@gallery');
Route::get('/perfil', 'ProfileController@index');
Route::get('/personal', 'ProfileController@personal');
Route::get('/perfil/{id}', 'ProfileController@viewProfile');
Route::get('/landing', 'MainController@landing');

/*---Main---*/
Route::get('/about', 'MainController@about');

/*---Blog---*/
Route::get('/blog', 'BlogController@index');

/*Subscriber*/
Route::post('/subscriber', 'SubscriberController@add');

/*--Event Controller--*/

Route::get('/addEvent', 'EventController@addPage');
Route::post('/addEvent', 'EventController@add');
Route::post('/deleteEvent', 'EventController@delete');

Auth::routes();

/*--Post--*/

Route::post('/search', ['as' => 'search', 'uses' => 'ProfileController@search']);
Route::post('/buscar', ['as' => 'buscar', 'uses' => 'ProfileController@buscar']);
Route::post('/profilePhotoUpload', 'ProfileController@uploadProfilePhoto');
Route::post('/addTag', 'ProfileController@addTag');
Route::post('/removeTag', 'ProfileController@removeTag');


/*--Obra Controller--*/

Route::post('/obra/add', 'ObraController@add');
Route::post('/obra/delete', 'ObraController@delete');

/*Extra Info*/
Route::post('/extraInfo/save', 'ExtraInfoController@save');