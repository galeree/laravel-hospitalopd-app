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

		$services = DB::table('Service')->where('HN','=',$hn)
						->where('status','=','false')
						->join('ServiceType','Service.serviceID','=','ServiceType.serviceID')
						->get(['Service.*','ServiceType.name']);

		return View::make('patient/service.index', array('username' => $username, 
														 'services' => $services));

	}
	public function postIndex(){
		$query ="UPDATE Service SET status='true' where HN = '".$hn."'";
	//	$service = DB::statement("UPDATE Service SET status='true' where HN = '".$hn."'");
	//	return Redirect::to('/service');
		return $query;

	}


	public function getAddorder() {
		$data = Session::all();
		$doctorid = $data['doctorID'][0];
		return View::make('doctor/service.order', array('doctorid' => $doctorid));
	}


}
