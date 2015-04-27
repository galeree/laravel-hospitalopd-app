@extends('layout.patient')

@section('title')
	<title>Service</title>
@endsection

@section('content')
	<div class="container">

		<div class="col-md-10 col-md-offset-1 tableCon">
			<div class="page-header change"><h3>Confirm Service</h3></div>
			<form method="POST"
					  action="/service"
					  novalidate="novalidate"
					  id="confirm"
					  class="form-signup form-horizontal">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th class="text-center change">Name</th>
								<th class="text-center change">Date</th>
								<th class="text-center change">Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($services as $service)
							<tr class="appElem">
								<td class="text-center">{{ $service->name }}</td>
								<td class="text-center">{{ $service->date}}</td>
								<td class="text-center">{{ $service->status }}</td>
								<td class="text-center"><button class="btn btn-primary" type="submit">Confirm</button></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>

@endsection