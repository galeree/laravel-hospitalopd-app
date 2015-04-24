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
		$doctorid = $data['doctorID'];
		$records = Worktime::where('doctorID','=',$doctorid)->get();
		foreach ($records as $record) {
			$date = explode(" ",$record['day'])[0];
			$record['day'] = $date;
		}
		return View::make('doctor/record.index', array('records' => $records));
	}

	public function getAdd() {
		return View::make('doctor/record.add');
	}

	public function postAdd() {
		
		// Variable to from form input
		$date = Input::get('date');
		$temp = explode("/",$day);
		$day = $temp[1];
		$month = $temp[0];
		$year = $temp[2];
		$date = new DateTime($day.'-'.$month.'-'.$year);
		$start = Input::get('startTime');
		$end = Input::get('endTime');
		$status = Input::get('status');

		// Create to store record
		$record = new Record();
		$record->day = $day;
		$record->startTime = $start;
		$record->endTime = $end;
		$record->status = $status;
		$record_success = $record->save();
		if($record_success) Redirect::to('record');
		else return Redirect::to('addrecord');
	}

}
