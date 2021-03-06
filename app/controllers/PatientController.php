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
		$data = Session::all();
		$username = $data['username'][0];
		$hn = $data['hn'][0];
		return View::make('patient.index',array('username'=> $username,
												'hn' => $hn));
	}

	public function getProfile() {
		$data = Session::all();
		$username = $data['username'][0];
		$hn = $data['hn'][0];
		$patient = Patient::where('HN','=',$hn)->first();
		$date = explode(" ",$patient['birthDate'])[0];
		$patient['birthDate'] = $date;
		$problems = Medproblem::where('HN','=',$hn)->get();
		$allergies = Allergy::where('HN','=',$hn)->get();
		return View::make('patient.profile',array('username' => $username,
												  'patient' => $patient,
												  'problems' => $problems,
												  'allergies' => $allergies));
	}

}
