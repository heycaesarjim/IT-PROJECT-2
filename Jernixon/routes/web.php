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
// Route::get('/dashboard', 'PagesController@dashboard');
//dataTable for dashboard
//Route::get('/dashboard/getItems', 'DashboardController@getItems')->name('dashboardItems.getItems');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/employees', 'PagesController@employees');

Route::get('/items/getItems', 'ItemsController@getItems')->name('items.getItems');
Route::resource('items','ItemsController');

Route::get('/reports/getTransactions', 'ReportsController@getTransactions')->name('reports.getTransactions');
Route::get('/reports/getReturns', 'ReportsController@getReturns')->name('reports.getReturns');
Route::get('/reports/getItemsAdded', 'ReportsController@getItemsAdded')->name('reports.getItemsAdded');
Route::get('/reports/getRemovedItems', 'ReportsController@getRemovedItems')->name('reports.getRemovedItems');
Route::resource('reports', 'ReportsController');

//Route::get('/items/{id}', 'ItemsController@show');

//Route::get('/items', 'ItemsController@index');
//Route::get('/reports', 'ReportsController@index');

//Datatables
// Display view
// Route::get('items', 'ItemsController@index');
// Get Data
// Route::get('items/getdata', 'ItemsController@getPosts')->name('datatable/getdata');