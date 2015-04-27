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
		$data = Session::all();
		$username = $data['username'][0];
		$hn = $data['hn'][0];
		$service = DB::statement("UPDATE Service SET status='true' where HN = '".$hn."'");
		return Redirect::to('service');

	}


	public function getAddorder() {
		$data = Session::all();
		$doctorid = $data['doctorID'][0];
		$patients =  Medrecord::where('doctorID','=',$doctorid)->get();
		$serviceTypes = ServiceType::all();

		return View::make('doctor/service.order', array('doctorid' => $doctorid,
														'patients' => $patients,
														'serviceTypes' => $serviceTypes));
	}

	public function postAddorder() {
		// Get input data
		$data = Session::all();
		$doctorid = $data['doctorID'][0];
		$code = Input::get('code');
		$hn = Input::get('HN');
		$serviceTypeName = Input::get('serviceTypeName');
		$status = Input::get('status');

		$serviceID = ServiceType::where('name','=', $serviceTypeName)							
								->pluck('serviceID');

		$dateTime = Medrecord::where('HN','=',$hn)
							 ->where('doctorID','=',$doctorid)
							 ->pluck('dateTime');

		// Service Date Time variable
		$temp = explode("/",Input::get('serviceDate'));
		$day = $temp[1];
		$month = $temp[0];
		$year = $temp[2];
		$serviceTime = explode(":",Input::get('serviceTime'));
		$serviceTimeDate = new DateTime($day.'-'.$month.'-'.$year.' '.$serviceTime[0].':'.$serviceTime[1].':00');

		// Create store variable for service
		$service = new Service();
		$service->code = $code;
		$service->date = $serviceTimeDate;
		$service->HN = $hn;

		$service->datetime = $dateTime;
		$service->serviceID = $serviceID;
		$service->status = $status;
		
		// service save success
		$service_success = $service->save();
/*
		///////INJECTION
		$query = DB::statement("UPDATE Service SET status='false'");

		//////////////////Example////////////////////////DB::STATEMENT
		$condition = "WHERE doctorID = '".$doctorid."' AND appt_dateTime = '".$datetime."' AND HN = '".$hn."'";
		$query = DB::statement("UPDATE Appointment SET status='recorded' ".$condition);
		///////////////////////////////////////////DB::RAW
		$someVariable = Input::get("some_variable");
		$results = DB::select( DB::raw("SELECT * FROM some_table WHERE some_col = '$someVariable'") );
		////////////////////////////////////////////
*/
		return Redirect::to('/doctor');
	}

}
