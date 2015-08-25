<?php

class DashboardController extends BaseController {
	public function showWelcome()
	{
		return View::make('pages/dashboard');
	}
}
