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
						->where('status','=','true')
						->join('ServiceType','Service2.serviceID','=','ServiceType.serviceID')
						->join('Service', function($join) {
							$join->on('Service2.HN','=','Service.HN')
							->on('Service2.serviceID','=','Service.serviceID');
						})
						->get(['ServiceType.name','Service.date','Service2.status','Service.ServiceID']);
		
		return View::make('patient/reserve.index', array('username'=> $username,
														 'appointments' => $appointments,
														 'services' => $services));
	}
	public function cancel() {
		$data = Session::all();
		$username = $data['username'][0];
		$hn = $data['hn'][0];
		
		$doctorid = Input::get('doctorID');
		$dateTime = Input::get('dateTime');

		//$appointments = DB::delete("DELETE FROM Appointment WHERE doctorID = '".$doctorID."'' AND appt_dateTime = '".$dateTime."'");

		//$free = DB::delete("DELETE FROM Free WHERE doctorID = '".$doctorID."'' AND appt_dateTime = '".$dateTime."'");
		
		$service1 = DB::statement("DELETE FROM Free WHERE doctorID='".$doctorid."' AND appt_dateTime='".$dateTime."'");
		$service2 = DB::statement("DELETE FROM Appointment WHERE HN = '".$hn."' AND appt_dateTime='".$dateTime."' AND doctorID='".$doctorid."'");

		return Redirect::to('reserve');
						

	}


}
