@extends('layout.doctor')

@section('title')
	<title>Doctor appointment page</title>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header"><h3>Appointment</h3></div>
			<p>Doctor appointment page</p>
			<p>one choice list of all appointment</p>
			<p>other choice list of request appointment</p>
			<div class="centercontainer">
		    	<div class="btn-group" role="group">
		    		<button type="button" 
		    				class="btn btn-default active" 
		    				id="select-appointment">Request</button>
		    		<button type="button" 
		    				class="btn btn-default"
		    				id="select-service">All</button>
		    	</div>
	    	</div>
			
			<!-- Request appointment list -->
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

			<!-- All appointment list -->
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