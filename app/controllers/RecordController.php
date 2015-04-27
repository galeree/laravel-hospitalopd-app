<?php

class RecordController extends BaseController {

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
		$now = new DateTime();
		$doctorid = $data['doctorID'][0];
		$records = Worktime::where('doctorID','=',$doctorid)
							->where('day','>',$now)->orderBy('day', 'desc')->get();
		foreach ($records as $record) {
			$date = explode(" ",$record['day'])[0];
			$record['day'] = $date;

			$start = explode(":",$record['startTime']);
			$record['startTime'] = $start[0].":".$start[1];

			$end = explode(":",$record['endTime']);
			$record['endTime'] = $end[0].":".$end[1];
		}
		return View::make('doctor/record.index', array('records' => $records,
													   'doctorid' => $doctorid));
	}

	public function getAdd() {
		$data = Session::all();
		$doctorid = $data['doctorID'][0];
		return View::make('doctor/record.add', array('doctorid' => $doctorid));
	}

	public function postAdd() {
		
		// Variable to from form input
		$doctorid = Session::get("doctorID")[0];
		$date = Input::get('date');
		$temp = explode("/",$date);
		$day = $temp[1];
		$month = $temp[0];
		$year = $temp[2];
		$date = new DateTime($day.'-'.$month.'-'.$year);
		$start = explode(":",Input::get('startTime'));
		$end = explode(":",Input::get('endTime'));
		$status = Input::get('status');

		// Create variable to store record
		$record = new Worktime();
		$record->doctorID = $doctorid;
		$record->day = $date;
		$record->startTime = new DateTime($start[0].":".$start[1].":00");
		$record->endTime = new DateTime($end[0].":".$end[1].":00");
		$record->status = $status;
		$record_success = $record->save();

		// Create variable to store available
		$available = new Available();
		$available->doctorID = $doctorid;
		$available->startTime = new DateTime($start[0].":".$start[1].":00");
		$available->endTime =  new DateTime($end[0].":".$end[1].":00");
		$available->day = $date;
		$available_success = $available->save();
		return Redirect::to('record');
	}

}
