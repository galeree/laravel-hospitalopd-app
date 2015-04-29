@extends('layout.doctor')

@section('title')
	<title>Doctor profile</title>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1 tableCon">
			<div class="page-header"><h3 class="change">Profile</h3></div>
			<p>DoctorID: {{ $doctor['doctorID'] }}</p>
			<p>Firstname: {{ $doctor['firstName'] }}</p>
			<p>Lastname: {{ $doctor['lastName'] }}</p>
			<p>Department: {{ $doctor['dept_name'] }}</p>
		</div>
	</div>
@endsection