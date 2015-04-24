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

	// User log in

	public function postLogin() {
		$role = Input::get('role');
		$username = Input::get('username');
		$password = Input::get('password');
		$url = '';
		if($role == 'patient') {
			$url = '/patient';
			$existence = User::where('username','=',$username)
						 ->where('password',$password)->first();
			if(count($existence) == 0) return Redirect::to('/');
			else {
				Session::push('username', $existence["username"]);
				Session::push('hn', $existence["HN"]);
				Session::push('role',$role);
				return Redirect::to('/patient');
			}
		} else $url = '/doctor';
		return Redirect::to($url);
	}

	// Logout
	public function postLogout() {
		Session::flush();
		return Redirect::to('/');
	}

	// User sign up

	public function getRegister() {
		return View::make('home.register');
	}

	public function postRegister() {
		
		// Get input data
		$username = Input::get('username');
		$password = Hash::make(Input::get('password'));
		$HN = Input::get('HN');
		$firstName = Input::get('firstName');
		$lastName = Input::get('lastName');
		$bloodType = Input::get('bloodType');
		$day = Input::get('day');
		$month = Input::get('month');
		$year = Input::get('year');
		$sex = Input::get('sex');
		$tel = Input::get('tel');
		$address = Input::get('address');
		$timestamp = strtotime($day.'-'.$month.'-'.$year);

		// Create store variable
		$patient = new Patient();
		$patient->HN = $HN;
		$patient->firstName = $firstName;
		$patient->lastName = $lastName;
		$patient->bloodType = $bloodType;
		$patient->birthDate = $timestamp;
		$patient->sex = $sex;
		$patient->tel = $tel;
		$patient->address = $address;
		$patient->OPDflag = 1;
		
		// Patient save success
		$patient_success = $patient->save();

		$user = new User();
		$user->HN = $HN;
		$user->username = $username;
		$user->password = $password;
		$user_success = $user->save();
		if($patient_success && $user_success) Redirect::to('/');
		else return Redirect::to('/register');
	}

	/* Validate method */

	public function getHNcheck() {
		$hn = Input::get('HN');
		$patient = Patient::where('HN','=',$hn)->get();
		if(count($patient) == 0) return 'true';
		else return 'false';
	}

	public function getUsernamecheck() {
		$username = Input::get('username');
		$user = User::where('username','=',$username)->get();
		if(count($user) == 0) return 'true';
		else return 'false';
	}

	public function getPasswordcheck() {
		$password = Input::get('password');
		$user = User::where('password','=',$password)->get();
		if(count($user) == 0) return 'true';
		else return 'false';
	}

}
