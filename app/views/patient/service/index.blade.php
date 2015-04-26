@extends('layout.patient')

@section('title')
	<title>Service</title>
@endsection

@section('content')
	<div class="container">
<<<<<<< HEAD
		<h4>Service page</h4>
		<p>Use ajax confirm box</p>

		<ul>
			<li><a href=""> </a>service1</li>
			<li><a href=""></a>service2</li>
			<li><a href=""></a>service3</li>
			<li><a href=""></a>service4</li>
			<li><a href=""></a>service5</li>
			<li><a href=""></a>service6</li>
		</ul>

		<li> Service :: {{ $serviceName}}  date :: {{ $date}} status ::{{ $status }}</li>
	</ul>
=======
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
>>>>>>> 537c64df24c39c26ac5d91c93910ad0663f17742
	</div>

@endsection