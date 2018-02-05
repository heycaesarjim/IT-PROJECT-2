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

Route::get('/items/getItems', 'ItemsController@getItems')->name('items.getItems');
Route::resource('items','ItemsController');
Route::resource('reports', 'ReportsController');

//Route::get('/items', 'ItemsController@index');
//Route::get('/reports', 'ReportsController@index');

//Datatables
// Display view
// Route::get('items', 'ItemsController@index');
// Get Data
// Route::get('items/getdata', 'ItemsController@getPosts')->name('datatable/getdata');