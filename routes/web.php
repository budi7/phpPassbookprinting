<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Test'], function () {
	Route::resource('/arg1', 'LoanController', ['names' => [
		'index' 	=> 'loan.index', //get
		'create'	=> 'loan.create', //get
		'store' 	=> 'loan.store', //post
		'show' 		=> 'loan.show', //get
		'edit' 		=> 'loan.edit', //get
		'update' 	=> 'loan.update', //patch
		'destroy' 	=> 'loan.destroy' //post 
	]]);
});

Route::group(['namespace' => 'Passbook'], function () {
	Route::get('/passbook/print', ['uses' => 'printController@printBook', 'as' => 'passbook.print']);
});