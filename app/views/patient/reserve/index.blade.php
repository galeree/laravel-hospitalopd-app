@extends('layout.patient')

@section('title')
	<title>Reserve List</title>
@endsection

@section('script')
	{{ HTML::script('js/reserve.js') }}
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header">
				<h4>Reserve list</h4>
			</div>

	    	<div class="centercontainer">
		    	<div class="btn-group" role="group">
		    		<button type="button" 
		    				class="btn btn-default active" 
		    				id="select-appointment">Appointment</button>
		    		<button type="button" 
		    				class="btn btn-default"
		    				id="select-service">Service</button>
		    	</div>
	    	</div>
			
	    	<!-- Appointment list -->
			<div class="table-responsive" id="appt-list">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center">Doctor</th>
							<th class="text-center">Datetime</th>
							<td class="text-center">Status</td>
						</tr>
					</thead>
					<tbody>
						@foreach($appointments as $appointment)
							<tr>
								<td class="text-center">{{ $appointment->firstName }} {{ $appointment->lastName }}</td>
								<td class="text-center">{{ $appointment->appt_dateTime }}</td>
								<td class="text-center">{{ $appointment->status }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<!-- Service list -->
			<div class="table-responsive" 
				 id="serv-list"
				 style="display: none">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center">Type</th>
							<th class="text-center">Date</th>
							<th class="text-center">Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($services as $service)
							<tr>
								<td class="text-center">{{ $service->name }}</td>
								<td class="text-center">{{ $service->date }}</td>
								<td class="text-center">{{ $service->status }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>	
	</div>

@endsection