<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Patient extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Patient';
	public $timestamps = false;
	protected $fillable = [
		'HN', 'firstName','lastName' ,'bloodType','tel','birthDate',
		'address','sex','IPDflag','OPDflag'
	];

}
