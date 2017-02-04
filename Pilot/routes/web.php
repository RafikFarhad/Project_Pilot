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

Route::get('/', function(){
	return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/add_post', 'AddpostController@index');
Route::post('/add_post', 'AddpostController@store');


Route::get('/article/{artid}', 'ArticleController@init');



// Route::POST('/login', 'DashboardController@check');


