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
		<div class="col-md-6 col-md-offset-3 formCon">
			<div class="page-header"><h3>Add record</h3></div>
			<form method="POST"
				  action="/addrecord"
				  class="form-horizontal"
				  style="margin-bottom: 2em">
				  	<div class="form-group">
				  		<label for="date" class="col-sm-2 control-label">Date</label>
				  		<div class="col-sm-4">
					  		<input type="text" 
					  			   id="datepicker" 
					  			   name="date"
					  			   class="form-control">
				  		</div>
				  		
				  		<label for="status" class="col-sm-2 control-label">Status</label>
				  		<div class="col-sm-4">
					  		<select class="form-control" name="status">
					  			<option>available</option>
					  			<option>unavailable</option>
					  		</select>
				  		</div>
				  	</div>
				  	<div class="form-group">
				  		<label for="starttime" class="col-sm-2 control-label">Start</label>
				  		<div class="col-sm-4">
					  		<input class="form-control"
						  			   name="startTime"
						  			   type="text"></input>
				  		</div>
				  		<label for="endtime" class="col-sm-2 control-label">End</label>
				  		<div class="col-sm-4">
					  		<input class="form-control"
						  			   name="endTime"
						  			   type="text"></input>
				  		</div>
				  		<p class="help-block col-sm-4 col-sm-offset-2">hh:mm ex. 20:20</p>
				  		<p class="help-block col-sm-4 col-sm-offset-2">hh:mm ex. 20:20</p>
				  	</div>

				  	<div class="centercontainer" style="padding-top: 0.4em;">
				  		<button class="btn btn-primary" type="submit">Submit</button>
				  		<a class="btn btn-default" type="button" href="/record">Cancel</a>
				  	</div>
			</form>
		</div>
	</div>
@endsection