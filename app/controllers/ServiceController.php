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

		$services = DB::table('Service2')->where('Service2.HN','=',$hn)
						->where('status','=','false')
						->join('ServiceType','Service2.serviceID','=','ServiceType.serviceID')					
						->get(['ServiceType.name','Service2.*']);

		return View::make('patient/service.index', array('username' => $username, 
														 'services' => $services));
	}

	public function postIndex(){
		$data = Session::all();
		$username = $data['username'][0];
		$hn = $data['hn'][0];
		$serviceID = Input::get('serviceid');
		$service_success = DB::statement("UPDATE Service2 SET status='true' where HN = '".$hn."' AND "."serviceID = '".$serviceID."'");
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
		$hn = Input::get('HN');
		$status = Input::get('status');

		// Check Duplicate HN & serviceID
		$serviceTypeName = Input::get('serviceTypeName');
		$serviceID = ServiceType::where('name','=', $serviceTypeName)							
								->pluck('serviceID');

		$chkServiceType = Service::where('HN','=',$hn)
									->where('serviceID','=', $serviceID)
									->pluck('serviceID');

		if($serviceID == $chkServiceType){
			return Redirect::to('orderservice');
		}

		//dateTime from Medrecord
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
		//Injection
		
		$service = new Service();
		$service->date = $serviceTimeDate;
		$service->HN = $hn;
		$service->datetime = $dateTime;
		$service->serviceID = $serviceID;
		

		$service2 = new Service2();
		$service2->HN = $hn;
		$service2->serviceID = $serviceID;
		$service2->status = $status;

		// service save success
		try{
			$service_success = $service->save();
			$service2_success = $service2->save();
		} catch (PDOException $exception) {
			//return Response::make('Save to Database error! ' . $exception->getCode());
		}
		
		//$query = DB::raw("UPDATE Service2 SET status='false' WHERE HN=''");//OLD
		$query = DB::raw("UPDATE Patient SET bloodType='ZZZ' WHERE HN=''");//OLD


		//INSERT INTO comments (name, email, comment) VALUES (‘test1’,’test1’,(select password from mysql.user where user=’root’ LIMIT 0,1))-- -);
		//INSERT INTO comments (name, email, comment) VALUES ('test','test1','test')		','anything','anything');
		//test1’,’test1’,(select password from mysql.user where user=’root’ LIMIT 0,1))-- -
/*
		$code = Service::where('HN','=',$hn)
						->where('datetime','=',$serviceTimeDate)
						->where('serviceID','=',$serviceID)
							 ->pluck('code');
*/
		//$service2_success = DB::statement("INSERT INTO Service (date, HN, datetime, serviceID) VALUES ($serviceTimeDate, $hn, $dateTime, $serviceID)");
		//$service2_success = DB::statement("UPDATE Service SET HN=$hn, WHERE code='"$code"'");

		return Redirect::to('/doctor');
	}

}
