@extends('layout.patient')

@section('title')
	<title>Patient profile</title>
@endsection

@section('content')
	<div class="container profile">
		<div class="col-md-10 col-md-offset-1">
			<h4>Profile</h4>
			<p>HN: {{ $patient['HN'] }}</p>
			<p>Firstname: {{ $patient['firstName'] }}</p>
			<p>Lastname: {{ $patient['lastName'] }}</p>
			<p>Sex: {{ $patient['sex'] }}</p>
			<p>Bloodtype: {{ $patient['bloodType'] }}</p>
			<p>Tel: {{ $patient['tel'] }}</p>
			<p>Address: {{ $patient['address'] }}</p>
		</div>
	</div>

@endsection