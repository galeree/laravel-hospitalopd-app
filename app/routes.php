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

Route::get('/', 'HomeController@getIndex');
Route::get('userq', 'PatientController@getUser');
Route::get('serviceq', 'PatientController@getService');
Route::get('stafflogin', 'StaffController@getStaffLogin');
Route::get('staffq', 'StaffController@getStaffQueue');
Route::get('nextq', 'StaffController@getNextQueue');
Route::get('showq', 'StaffController@getShowQueue');
Route::get('test', function() {
	if(DB::connection()->getDatabaseName())
	{
	   echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
	}
});

