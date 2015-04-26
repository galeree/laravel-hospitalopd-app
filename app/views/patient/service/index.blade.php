@extends('layout.patient')

@section('title')
	<title>Service</title>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 col-md-offset-1"></div>
		<div class="page-header"><h3>Confirm Service</h3></div>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="text-center">Name</th>
						<th class="text-center">Date</th>
						<th class="text-center">Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($services as $service)
					<tr>
						<td class="text-center">{{ $service->name }}</td>
						<td class="text-center">{{ $service->date}}</td>
						<td class="text-center">{{ $service->status }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection