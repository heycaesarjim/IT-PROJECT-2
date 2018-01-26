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

Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/employees', 'PagesController@employees');

Route::resource('items','ItemsController');
Route::resource('reports', 'ReportsController');

//Route::get('/items', 'ItemsController@index');
//Route::get('/reports', 'ReportsController@index');