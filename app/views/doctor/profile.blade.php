@extends('layout.doctor')

@section('title')
	<title>Doctor profile</title>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header"><h3>Profile</h3></div>
			<p>DoctorID: {{ $doctor['doctorID'] }}</p>
			<p>Firstname: {{ $doctor['firstName'] }}</p>
			<p>Lastname: {{ $doctor['lastName'] }}</p>
			<p>Department: {{ $doctor['dept_name'] }}</p>
		</div>
	</div>
@endsection