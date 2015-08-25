<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(['before' => 'guest'], function(){
	Route::get( '/dashboard'              , ['uses' => 'DashboardController@showDashboard'            , 'as'   => 'dashboard']);
});

Route::group(['before' => 'auth'], function(){
	
});