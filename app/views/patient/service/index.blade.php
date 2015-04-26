@extends('layout.patient')

@section('title')
	<title>Service</title>
@endsection

@section('content')
	<div class="container">
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
	</div>

@endsection