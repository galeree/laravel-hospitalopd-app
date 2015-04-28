@extends('layout.doctor')

@section('title')
	<title>Doctor order service</title>
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
		<h4>Order service page</h4>
		<div class="col-md-6 col-md-offset-3 register">
			<form method="POST"
				  action="/orderservice"
				  novalidate="novalidate"
				  id="orderservice"
				  class="form-signup form-horizontal">
			
					<div class="page-header">
						<h4>
							<i class="fa fa-user" style="margin-right: 0.5em"></i>Order Service
						</h4>

				  	<div class="form-group">
				  		<label for="serviceDate" class="col-sm-2 control-label">Service Date</label>
				  		<!--<p class="help-block">dd/mm/yyyy ex. 20/05/1993</p>-->
				  		<div class="col-sm-10">
					  		<input type="text" 
					  			   id="datepicker" 
					  			   name="serviceDate"
					  			   class="form-control">
				  		</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="serviceTime" class="col-sm-2 control-label">Service Time</label>
				  		<div class="col-sm-10">
					  		<input class="form-control"
						  			   name="serviceTime"
						  			   type="text"></input>
						  	<p class="help-block">hh:mm ex. 20:20</p>
						</div>
				  	</div>


				  	<div class="form-group">
				  		<label for="HN" class="col-sm-2 control-label">HN</label>
				  		<div class="col-sm-10">
					  		<input class="form-control"
						  			   name="HN"
						  			   type="text"></input>
						  	<p class="help-block">ex. HN0000001</p>
						</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="serviceTypeName" class="col-sm-2 control-label">Service Type</label>
				  		<div class="col-sm-10">
					  		<select class="form-control" 
					  				name="serviceTypeName">
								@foreach($serviceTypes as $serviceType)
									<option>{{ $serviceType->name }}</option>
								@endforeach
							</select>
				  		</div>
				  	</div>


					<div class="form-group">
					  	<label for="status" class="col-sm-2 control-label">Status</label>
					  	<div class="col-sm-4">
						  	<select class="form-control" name="status">
						  		<option>false</option>
						  		<option>true</option>
						  	</select>
					  	</div>
					</div>

					<div class="centercontainer submit">
			    		<button class="btn btn-primary" type="submit">Submit</button>
			    		<a class="btn btn-default" href="/">Cancel</a>
			    	</div>

			</form>
		</div>
	</div>
@endsection