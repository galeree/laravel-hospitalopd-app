@extends('layout.doctor_home')

@section('title')
	<title>Doctor</title>
@endsection

@section('content')
	<script type="text/javascript">
		$(document).ready(function() {
		});
		function linkto(url) {
			document.location = url;
		}
	</script>
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center option">
			<div class="row text-center itemCon">
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/doctor/profile')"
					 id="item" style="float: left; background-color: #16a085;">
					<i class="fa fa-user"></i>
					<h3>Profile</h3>
				</div>
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/record')"
					 id="item" style="float: right; background-color: #3498db">
					<i class="fa fa-list-alt"></i>
					<h3>Worktime</h3>
				</div>	
			</div>
			<div class="row text-center itemCon">
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('orderservice')"
					 id="item" style="float: left; background-color: #2ecc71">
					<i class="fa fa-medkit"></i>
					<h3>Service</h3>
				</div>
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/apptlist')"
					 id="item" style="float: right; background-color: #1abc9c">
					<i class="fa fa-stethoscope"></i>
					<h3>Appointment</h3>
				</div>	
			</div>
		</div>
	</div>
@endsection