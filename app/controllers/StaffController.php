<?php

class StaffController extends BaseController {

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

	public function getStaffLogin()
	{
		return View::make('staff.stafflogin');
	}

	public function getStaffQueue() {
		return View::make('staff.staffq');
	}

	public function getNextQueue() {
		return View::make('staff.nextqueue');
	}

	public function getShowQueue() {
		return View::make('staff.showqueue');
	}

}
