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
			
			<!-- Multistep form -->
			<form id="msform">
				<ul id="progressbar">
					<li class="active">Select Department</li>
					<li>Select Doctor</li>
					<li>Select Time</li>
				</ul>

					<!-- field set -->
					<fieldset data-step="1">
						<h2 class="fs-title">Select Department</h2>
						<h3 class="fs-subtitle">Step 1</h3>
						<select name="department">
							@foreach($departments as $department)
								<option>{{ $department }}</option>
							@endforeach
						</select>
						<input type="button" name="next" class="next action-button" value="Next" />
					</fieldset>
					<fieldset data-step="2">
						<h2 class="fs-title">Select Doctor</h2>
						<h3 class="fs-subtitle" id="hasAfter">Step 2</h3>
						<script type="custom/template" id="doctortemplate">
							<select name="doctor">
								<option data-id="{id}">{docname}</option>
							</select>
						</script>
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="button" name="next" class="next action-button" value="Next" />
					</fieldset>
					<fieldset data-step="3">
						<h2 class="fs-title">Select Time</h2>
						<h3 class="fs-subtitle" id="hasAfter">Step 3</h3>
						<script type="custom/template" id="scheduletemplate">
							<select name="schedule">
								<option data-date="{date}" data-start="{start}" data-end="{end}">{date_dis}&ensp;{start_dis} - {end_dis}</option>
							</select>
						</script>
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="submit" name="submit" class="submit action-button" value="Submit" />
					</fieldset>
			</form>
		</div>
	</div>

@endsection