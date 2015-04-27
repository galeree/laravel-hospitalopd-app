@extends('layout.doctor')

@section('title')
	<title>Doctor record page</title>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1 tableCon">
			<div class="page-header">
				<h3 style="vertical-align: bottom" class="change">Schedule 
					<a class="btn btn-primary btn-sm" 
					   href="/addrecord" 
					   style="display: inline-block; margin-left: 0.5em">
					   <i class="fa fa-plus"></i> Add new
					</a>
				</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="change">Date</th>
							<th class="change">Start</th>
							<th class="change">End</th>
							<th class="change">Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($records as $record)
							<tr class="appElem">
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