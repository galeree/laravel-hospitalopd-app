@extends('layout.doctor')

@section('title')
	<title>Add record</title>
@endsection

@section('script')
	{{ HTML::style('jquery-ui/jquery-ui.min.css') }}
	{{ HTML::script('jquery-ui/jquery-ui.min.js') }}
@endsection

@section('content')
	<script>
		$(function() {
			$( "#datepicker" ).datepicker();
		});
	</script>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="page-header"><h3>Add record</h3></div>
			<form method="POST"
				  action="/addrecord">
				  	<div class="form-group">
				  		<label for="date">Date:</label>
				  		<input type="text" 
				  			   id="datepicker" 
				  			   name="date"
				  			   class="form-control">
				  	</div>
				  	<div class="form-group">
				  		<label for="starttime">Start:</label>
				  		<p class="help-block">hh:mm ex. 20:20</p>
				  		<input class="form-control"
					  			   name="startTime"
					  			   type="number"></input>
				  	</div>
				  	<div class="form-group">
				  		<label for="endtime">End:</label>
				  		<p class="help-block">hh:mm ex. 20:20</p>
				  		<input class="form-control"
					  			   name="endTime"
					  			   type="number"></input>
				  	</div>
				  	<div class="form-group">
				  		<label for="status">Status:</label>
				  		<select class="form-control">
				  			<option>available</option>
				  			<option>unavailable</option>
				  		</select>
				  	</div>
				  	<div class="centercontainer">
				  		<button class="btn btn-primary" type="submit">Submit</button>
				  		<a class="btn btn-default" type="button" href="/record">Cancel</a>
				  	</div>
			</form>
		</div>
	</div>
@endsection