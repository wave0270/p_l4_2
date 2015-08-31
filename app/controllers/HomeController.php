<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		$data['page_name'] = 'home';
		return View::make('hello');
	}

	public function showLogin(){
		$data['page_name'] = 'login';
		return View::make('pages/auth/login',$data);
	}
	
	public function showResetPassword(){
		$data['page_name'] = 'resetPassword';
		return View::make('pages/auth/resetPassword',$data);
	}
	
	public function showRegister(){
		$data['page_name'] = 'register';
		return View::make('pages/auth/register',$data);
	}
}
