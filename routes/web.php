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

Auth::routes();

Route::get('/', 'HomeController@index');

/**
 * managing users routes
 */

Route::post('users/add', 'RegisterController@store');

Route::get('users/add', 'RegisterController@regForm');

Route::get('users/view', 'RegisterController@listAll');

/**
 * Managing clients routes
 */
Route::get('clients', 'ClientsController@index');
Route::get('clients/add', 'ClientsController@create');
Route::post('clients/add', 'ClientsController@store');

