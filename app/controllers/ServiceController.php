<?php

class ServiceController extends BaseController {

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
		$data = Session::all();
		$username = $data['username'][0];
		$hn = $data['hn'][0];
		$services = Service::where('HN','=',$hn)->get();
		return View::make('patient/service.index', array('username' => $username));
	}

	public function getAddorder() {
		return View::make('doctor/service.order');
	}

}
