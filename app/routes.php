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
Route::get('/', 'HomeController@getIndex');

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
});

// Module that control service information
Route::controller(
	'service',
	'ServiceController'
);

// Module that control reserve information
Route::controller(
	'reserve',
	'ReserveController'
);

// Module that control appointment information
Route::controller(
	'appointment',
	'AppointmentController'
);

// Module that control doctor information
Route::controller(
	'doctor',
	'DoctorController'
);

// Module that control doctor record
Route::controller(
	'record',
	'RecordController'
);

