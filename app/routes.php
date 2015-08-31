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

Route::group(['before' => 'guest'], function(){
	Route::get( '/dashboard'        , ['uses' => 'DashboardController@showDashboard', 	'as'   => 'dashboard']);
	
	Route::get( '/'              		, ['uses' => 'HomeController@showHome', 	'as'   => 'index']);
	Route::get( '/auth/login'           , ['uses' => 'HomeController@showLogin', 	'as'   => 'login']);
	Route::get( '/auth/resetPassword'   , ['uses' => 'HomeController@showResetPassword', 	'as'   => 'resetPassword']);
	Route::get( '/auth/register'   		, ['uses' => 'HomeController@showRegister', 'as'   => 'register']);
});

Route::group(['before' => 'auth'], function(){
	
});