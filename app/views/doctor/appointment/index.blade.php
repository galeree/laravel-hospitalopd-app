@extends('layout.doctor')

@section('title')
	<title>Doctor appointment page</title>
@endsection

@section('script')
	{{ HTML::script('js/appointment.js') }}
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header"><h3>Appointment</h3></div>
			<div class="centercontainer">
		    	<div class="btn-group choice" role="group">
		    		<button type="button" 
		    				class="btn btn-default active" 
		    				id="select-request">Request</button>
		    		<button type="button" 
		    				class="btn btn-default"
		    				id="select-record">Recorded</button>
		    	</div>
	    	</div>
			
			<!-- Request appointment list -->
			<div class="table-responsive" id="req-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Patient</th>
							<th>Datetime</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($requests as $request)
							<tr data-hn='{{ $request->HN }}'
								data-datetime='{{ $request->appt_dateTime }}'
								class="reqElem pointer">
								<td>{{ $request->HN }}</td>
								<td>{{ $request->appt_dateTime }}</td>
								<td>{{ $request->status }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<!-- All appointment list -->
			<div class="table-responsive" 
				 id="record-list"
				 style="display: none">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Patient</th>
							<th>Datetime</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($appointments as $appointment)
							<tr>
								<td>{{ $appointment->HN }}</td>
								<td>{{ $appointment->appt_dateTime }}</td>
								<td>{{ $appointment->status }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection