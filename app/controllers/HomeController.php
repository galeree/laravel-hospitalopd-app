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
	public function getIndex() {
		return View::make('home.index');
	}

	public function postLogin() {
		$role = Input::get('role');
		$url = '';
		if($role == 'patient') $url = '/patient';
		else $url = '/doctor';
		return Redirect::to($url);
		//return Input::all();
	}

}
