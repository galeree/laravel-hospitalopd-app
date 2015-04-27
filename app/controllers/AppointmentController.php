<?php

class AppointmentController extends BaseController {

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
	// Appointment at patient dashboard
	public function getIndex() {
		$data = Session::all();
		$username = $data['username'][0];
		$departments = Department::all()->lists('name');
		return View::make('patient/appointment.index', array('username' => $username,
															 'departments' => $departments));
	}

	// Appointment at doctor dashboard
	public function getRequest() {
		$data = Session::all();
		$doctorid = $data['doctorID'][0];
		$requests = Appointment::where('doctorID','=',$doctorid)
									->where('status','=','pending')
									->orderBy('appt_dateTime','desc')->get();
		$appointments = Appointment::where('doctorID','=',$doctorid)
									->where('status','=','recorded')
									->orderBy('appt_dateTime','desc')->get();
		return View::make('doctor/appointment.index', array('doctorid' => $doctorid,
															'requests' => $requests,
															'appointments' => $appointments));
	}

	// Appointment record at doctor dashboard
	public function getAddrecord() {
		$doctorid = Session::get('doctorID')[0];
		if(!isset($_GET['hn'])||!isset($_GET['datetime'])) {
			return Redirect::to('apptlist');
		}
		$hn = $_GET['hn'];
		$datetime = $_GET['datetime'];
		$existence = Appointment::where('doctorID','=',$doctorid)
								->where('HN','=',$hn)
								->where('appt_dateTime','=',$datetime)->first();
		if(count($existence)==0) return Redirect::to('apptlist');
		else {
			$patient = Patient::where('HN','=',$hn)->first();
			return View::make('doctor/appointment.edit', array('hn' => $hn,
														   'datetime' => $datetime,
														   'doctorid' => $doctorid,
														   'patient' => $patient));
		}
	}

	// Appointment record save
	public function postAddrecord() {
		$doctorid = Session::get('doctorID')[0];
		$hn = Input::get('hn');
		$datetime = Input::get('datetime');
		$description = Input::get('note');

		$meddetail = new Medrecord();
		$meddetail->HN = $hn;
		$meddetail->dateTime = $datetime;
		$meddetail->description = $description;
		$meddetail->doctorID = $doctorid;
		$meddetail->save();

		$condition = "WHERE doctorID = '".$doctorid."' AND appt_dateTime = '".$datetime."' AND HN = '".$hn."'";
		$query = DB::statement("UPDATE Appointment SET status='recorded' ".$condition);
		return Redirect::to('apptlist');
	}

	public function getDoctorList() {
		$query = $_GET['dept'];
		$doctors = Doctor::where('dept_name','=',$query)->get();
		return json_encode($doctors, JSON_UNESCAPED_UNICODE);
	}

	public function getScheduleList() {
		$query = $_GET['doctor'];
		$now = new DateTime();
		$schedules = Worktime::where('doctorID','=',$query)
								->where('day','>',$now)->get();
		return json_encode($schedules, JSON_UNESCAPED_UNICODE);
	}

	// Save appointment
	public function postSave() {
		$department = Input::get('department');
		$date = Input::get('date');
		$doctorid = Input::get('doctor');
		$start = Input::get('start');
		$end = Input::get('end');
		$hn = Session::get('hn')[0];

		$now = new DateTime();
		$appointment = new Appointment();
		$appointment->status = 'pending';
		$appointment->doctorID = $doctorid;
		$appointment->HN = $hn;
		$appointment->appt_dateTime = $now;
		$appointment->save();

		$free = new Free();
		$free->doctorID = $doctorid;
		$free->appt_dateTime = $now;
		$free->save();
		return Redirect::to('reserve');
	}

}
