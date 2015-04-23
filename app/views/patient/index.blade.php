@extends('layout.patient')

@section('title')
	<title>Patient</title>
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
			<div class="row text-center">
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/appointment')"
					 id="item">
					<i class="fa fa-stethoscope"></i>
					<h3>Appointment</h3>
				</div>
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/service')"
					 id="item">
					<i class="fa fa-medkit"></i>
					<h3>Service</h3>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/patient/profile')"
					 id="item">
					<i class="fa fa-user"></i>
					<h3>Profile</h3>
				</div>
				<div class="col-md-6 text-center pointer" 
					 onclick="linkto('/reserve')"
					 id="item">
					<i class="fa fa-list-alt"></i>
					<h3>Reserve list</h3>
				</div>	
			</div>
		</div>
	</div>
@endsection