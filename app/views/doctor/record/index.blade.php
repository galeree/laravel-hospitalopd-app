@extends('layout.doctor')

@section('title')
	<title>Doctor record page</title>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header">
				<h3>ตารางเวลางาน 
					<a class="btn btn-primary" 
					   href="/addrecord" 
					   style="display: inline-block"><i class="fa fa-plus"></i>Add new</a>
				</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Start</th>
							<th>End</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($records as $record)
							<tr>
								<td>{{ $record->day }}</td>
								<td>{{ $record->startTime }}</td>
								<td>{{ $record->endTime }}</td>
								<td>{{ $record->status }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection