@extends('layout.patient')

@section('title')
	<title>Patient profile</title>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header">
				<h4>Profile</h4>
			</div>
			<p>HN: {{ $patient['HN'] }}</p>
			<p>Firstname: {{ $patient['firstName'] }}</p>
			<p>Lastname: {{ $patient['lastName'] }}</p>
			<p>Sex: {{ $patient['sex'] }}</p>
			<p>Bloodtype: {{ $patient['bloodType'] }}</p>
			<p>Birthdate: {{ $patient['birthDate'] }}</p>
			<p>Tel: {{ $patient['tel'] }}</p>
			<p>Address: {{ $patient['address'] }}</p>
			<p>Medical Problem:</p>
			<ul>
				@foreach ($problems as $problem)
				    <li>{{ $problem->problem }}</li>
				@endforeach
			</ul>
			<p>Allergies:</p>
			<ul>
				@foreach ($allergies as $allergy)
				    <p>{{ $allergy->allergy }}</p>
				@endforeach
			</ul>
		</div>
	</div>

@endsection