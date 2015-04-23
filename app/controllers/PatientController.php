<?php

class PatientController extends BaseController {

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

	public function getIndex() {
		return View::make('patient.index');
	}

	public function getProfile() {
		return View::make('patient.profile');
	}

	public function postLogout() {
		return Redirect::to('/');
	}

}
