<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route to root page
Route::get('/', array('before' => 'login','uses' => 'HomeController@getIndex'));

// Route to register page
Route::get('register', 'HomeController@getRegister');
Route::post('register', 'HomeController@postRegister');

// Route to logout
Route::post('logout', 'HomeController@postLogout');

// Module that test database connection
Route::get('test', function() {
	if(DB::connection()->getDatabaseName())
	{
	   echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
	}
});


// Module that control root page
Route::controller(
	'home',
	'HomeController'
);

// Patient dashboard
Route::group(array('before' => 'patient'), function() {
	Route::controller(
		'patient',
		'PatientController'
	);
	Route::get('appointment', 'AppointmentController@getIndex');
	Route::post('saveapp', 'AppointmentController@postSave');
	Route::get('service', 'ServiceController@getIndex');
	Route::post('service', 'ServiceController@postIndex');
	Route::get('reserve', 'ReserveController@getIndex');
	Route::post('cancel', 'ReserveController@cancel');
	Route::get('doclist', 'AppointmentController@getDoctorlist');
	Route::get('schedulelist', 'AppointmentController@getScheduleList');
});

// Doctor dashboard
Route::group(array('before' => 'doctor'), function() {
	Route::controller(
		'doctor',
		'DoctorController'
	);
	Route::get('record', 'RecordController@getIndex');
	Route::get('addrecord', 'RecordController@getAdd');
	Route::post('addrecord', 'RecordController@postAdd');
	Route::get('editappt', 'AppointmentController@getAddrecord');
	Route::post('saveedit', 'AppointmentController@postAddrecord');
	Route::get('apptlist', 'AppointmentController@getRequest');
	Route::get('orderservice', 'ServiceController@getAddorder');
	Route::post('orderservice', 'ServiceController@postAddorder');
});

