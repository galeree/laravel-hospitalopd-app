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
							<th>Doctor</th>
							<th>Date</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Patraporn Kuhavattana</td>
							<td>31 May 2558</td>
							<td>13.00</td>
						</tr>
						<tr>
							<td>Patraporn Kuhavattana</td>
							<td>31 May 2558</td>
							<td>13.00</td>
						</tr>
						<tr>
							<td>Patraporn Kuhavattana</td>
							<td>31 May 2558</td>
							<td>13.00</td>
						</tr>
						<tr>
							<td>Patraporn Kuhavattana</td>
							<td>31 May 2558</td>
							<td>13.00</td>
						</tr>
						<tr>
							<td>Patraporn Kuhavattana</td>
							<td>31 May 2558</td>
							<td>13.00</td>
						</tr>

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
							<th>Type</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>X-ray</td>
							<td>31 May 2558</td>
						</tr>
						<tr>
							<td>X-ray</td>
							<td>31 May 2558</td>
						</tr>
						<tr>
							<td>X-ray</td>
							<td>31 May 2558</td>
						</tr>
						<tr>
							<td>X-ray</td>
							<td>31 May 2558</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>	
	</div>

@endsection