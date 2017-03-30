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



//Super Admin Routes

Route::group(['middleware' => 'logIn'], function () {
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

//special condition routes
    Route::get('clients/medical-conditions/open', 'ClientsController@special_condition');
    Route::post('clients/medical-conditions/open', 'ClientsController@special_condition_save');

    /**
     * Ticket routes
     */
    Route::get('tickets', 'TicketController@index');
    Route::get('tickets/add', 'TicketController@add_form');
    Route::get('tickets/search', 'TicketController@searchClient');


});


