@extends('layout.default')

@section('title')
	<title>HospitalQ</title>
@endsection

@section('content')
	<div class="container center-block">
		<center>
	        <a href="/userq" class="col-md-6">
	        	<img src="img/icon_client.png" 
	        		 alt="client interface" 
	        		 class="img-responsive">
	        	</img>
	        </a>
	        <a href="/stafflogin" class="col-md-6">
	        	<img src="img/icon_doctor.png" 
	        		 alt="client interface" 
	        		 class="img-responsive">
	        	</img>
	        </a>
		</center>
    </div>
    <div class="container center-block">
		<center>
	        <a href="userq.html" class="col-md-6"><h2>Patients</h2></a>
	        <a href="stafflogin.html" class="col-md-6"><h2>Doctors & Staffs</h2></a>
		</center>
    </div>
@endsection