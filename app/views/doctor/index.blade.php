@extends('layout.doctor')

@section('title')
	<title>Doctor</title>
@endsection

@section('content')
	<!--<p>Doctor page</p>
	<p>list of the things doctor can do</p>
	<ul>
		<li><a href="/doctor/profile">See their profile</a></li>
		<li><a href="/record">Provide medical recorddetail</a></li>
		<li><a href="/service/orderservice">Order Service page</a></li>
		<li><a href="/appointment/main">Appointment list</a></li>
	</ul>-->
	<script type="text/javascript">
		$(document).ready(function() {
		});
		function linkto(url) {
			document.location = url;
		}
	</script>
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center">
			<div class="row text-center">
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/doctor/profile')">
					<p>Profile</p>
					<i class="fa fa-camera-retro fa-5x"></i>
				</div>
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/record')">
					<p>Medical Record</p>
					<i class="fa fa-camera-retro fa-5x"></i>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/service/order')">
					<p>Service</p>
					<i class="fa fa-camera-retro fa-5x"></i>
				</div>
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/appointment/main')">
					<p>Appointment</p>
					<i class="fa fa-camera-retro fa-5x"></i>
				</div>	
			</div>
		</div>
	</div>
@endsection