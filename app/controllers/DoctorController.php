<?php

class DoctorController extends BaseController {

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
		$doctorid = $data['doctorID'][0];
		return View::make('doctor.index', array('doctorid' => $doctorid));
	}

	public function getProfile() {
		$data = Session::all();
		$doctorid = $data['doctorID'][0];
		$doctor = Doctor::where('doctorID','=', $doctorid)->first();
		return View::make('doctor.profile', array('doctorid' => $doctorid,
												  'doctor' => $doctor));
	}

}
