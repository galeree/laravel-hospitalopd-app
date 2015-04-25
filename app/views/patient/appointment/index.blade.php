@extends('layout.patient')

@section('title')
	<title>Appointment</title>
@endsection

@section('script')
	{{ HTML::script('js/msform.js') }}
	{{ HTML::style('css/msform.css') }}
	<!-- jQuery easing plugin -->
	<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header"><h3>Request Appointment</h3></div>
			
			<!-- Multistep form -->
			<form id="msform">
				<ul id="progressbar">
					<li class="active">Select Department</li>
					<li>Select Doctor</li>
					<li>Select Time</li>
				</ul>

				<!-- field set -->
				<fieldset>
						<h2 class="fs-title">Create your account</h2>
						<h3 class="fs-subtitle">This is step 1</h3>
						<input type="text" name="email" placeholder="Email" />
						<input type="password" name="pass" placeholder="Password" />
						<input type="password" name="cpass" placeholder="Confirm Password" />
						<input type="button" name="next" class="next action-button" value="Next" />
					</fieldset>
					<fieldset>
						<h2 class="fs-title">Social Profiles</h2>
						<h3 class="fs-subtitle">Your presence on the social network</h3>
						<input type="text" name="twitter" placeholder="Twitter" />
						<input type="text" name="facebook" placeholder="Facebook" />
						<input type="text" name="gplus" placeholder="Google Plus" />
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="button" name="next" class="next action-button" value="Next" />
					</fieldset>
					<fieldset>
						<h2 class="fs-title">Personal Details</h2>
						<h3 class="fs-subtitle">We will never sell it</h3>
						<input type="text" name="fname" placeholder="First Name" />
						<input type="text" name="lname" placeholder="Last Name" />
						<input type="text" name="phone" placeholder="Phone" />
						<textarea name="address" placeholder="Address"></textarea>
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="submit" name="submit" class="submit action-button" value="Submit" />
					</fieldset>
			</form>
		</div>
	</div>

@endsection