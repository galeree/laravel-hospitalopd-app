@extends('layout.patient')

@section('title')
	<title>Reserve List</title>
@endsection

@section('script')
	{{ HTML::script('js/reserve.js') }}
	{{ HTML::script('js/cancel.js')}}
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1 tableCon">
			<div class="page-header">
				<h3 class="change">Reserve List</h3>
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

				<form method="POST"
					  action="/cancel"
					  novalidate="novalidate"
					  id="confirm"
					  class="form-signup form-horizontal">

				<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center change">Doctor</th>
							<th class="text-center change">Datetime</th>
						</tr>
					</thead>
					<tbody>
						@foreach($appointments as $appointment)
							<tr class="appElem">
								<td class="text-center">{{ $appointment->firstName }} {{ $appointment->lastName }}</td>
								<td class="text-center">{{ $appointment->appt_dateTime }}</td>
								<td class="text-center"><button class="btn btn-primary cancel" type="submit" data-datetime="{{$appointment->appt_dateTime}}" data-docid="{{ $appointment->doctorID }}">Cancel</button></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</form>
			</div>

			<!-- Service list -->
			<div class="table-responsive" 
				 id="serv-list"
				 style="display: none">
				<table class="table table-striped">
					<thead>
						<tr class="appElem">
							<th class="text-center change">Type</th>
							<th class="text-center change">Date</th>
							<th class="text-center change">Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($services as $service)
							<tr>
								<td class="text-center">{{ $service->name }}</td>
								<td class="text-center"><?php echo explode(" ",$service->date)[0] ?></td>
								<td class="text-center">{{ $service->status }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>	
	</div>

@endsection