<?php

class ReserveController extends BaseController {

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
		$appointments = DB::table('Appointment')->where('HN','=',$hn)
							->where('status','=','pending')
							->join('Doctor','Appointment.doctorID','=', 'Doctor.doctorID')
							->orderBy('appt_dateTime','asc')
							->get(['Appointment.*','Doctor.firstName', 'Doctor.lastName']);


		$services = DB::table('Service2')->where('Service2.HN','=',$hn)
						->join('ServiceType','Service2.serviceID','=','ServiceType.serviceID')
						->join('Service','Service2.HN','=','Service.HN')
						->get(['ServiceType.name','Service.date','Service2.status','Service.ServiceID']);
		
		return View::make('patient/reserve.index', array('username'=> $username,
														 'appointments' => $appointments,
														 'services' => $services));
	}


}
