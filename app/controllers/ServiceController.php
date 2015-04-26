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
		$services = Service::select('date','serviceID','status')
				->where('HN','=',$hn)
				-> where('status','=','false')->first();
		$date = $services->date;
		$status = $services->status;
		$serviceName = Servicetype::select('name')
					->where('serviceID','=',$services->serviceID)->get();

		return View::make('patient/service.index', array('username' => $username,
														'date'=>$date,
														'status'=>$status,
														'serviceName'=>$serviceName));
	}

	public function getAddorder() {
		$data = Session::all();
		$doctorid = $data['doctorID'][0];
		return View::make('doctor/service.order', array('doctorid' => $doctorid));
	}


}
