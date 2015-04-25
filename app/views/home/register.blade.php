@extends('layout.default')

@section('title')
	<title>Register</title>
@endsection

@section('script')
	{{ HTML::script('js/form.js') }}
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
		<div class="col-md-6 col-md-offset-3 register">
			<form method="POST"
				  action="/register"
				  novalidate="novalidate"
				  id="register"
				  class="form-signup form-horizontal">
					
					<div class="page-header">
						<h4>
							<i class="fa fa-user" style="margin-right: 0.5em"></i>Register
						</h4>
					</div>
					<div class="form-group">
				  		<label for="username" class="col-sm-2 control-label">Username</label>
				  		<div class="col-sm-10">
					  		<input type="text"
						  			   class="form-control"
						  			   name="username"
						  			   placeholder="Username"></input>
				  		</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="password" class="col-sm-2 control-label">Password</label>
				  		<div class="col-sm-10">
					  		<input type="password"
					  			   class="form-control"
					  			   name="password"
					  			   placeholder="password"></input>
				  		</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="HN" class="col-sm-2 control-label">HN</label>
				  		<div class="col-sm-10">
					  		<input type="text"
					  			   class="form-control"
					  			   name="HN"
					  			   placeholder="HN"></input>
				  		</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="firstName" class="col-sm-2 control-label">Firstname</label>
				  		<div class="col-sm-10">
					  		<input type="text"
						  			   class="form-control"
						  			   name="firstName"
						  			   placeholder="Firstname"></input>
				  		</div>
	
				  	</div>

				  	<div class="form-group">
				  		<label for="lastName" class="col-sm-2 control-label">Lastname</label>
				  		<div class="col-sm-10">
					  		<input type="text"
					  			   class="form-control"
					  			   name="lastName"
					  			   placeholder="Lastname"></input>
				  		</div>
				  	</div>

				  	<div class="row">
					  	<div class="form-group col-sm-6">
					  		<label for="bloodType" class="col-sm-5 control-label">Bloodtype</label>
					  		<div class="col-sm-7" style="padding-left: 0.5em">
						  		<select class="form-control" name="bloodType">
						  			<option>A</option>
						  			<option>B</option>
						  			<option>O</option>
						  			<option>AB</option>
						  		</select>
					  		</div>
					  	</div>

					  	<div class="form-group col-sm-6">
					  		<label for="sex" class="col-sm-4 control-label">Sex</label>
					  		<div class="col-sm-8">
						  		<select class="form-control" name="sex">
						  			<option>ชาย</option>
						  			<option>หญิง</option>
						  		</select>
					  		</div>
					  	</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="birthDate" class="col-sm-2 control-label">Birthdate</label>
				  		<!--<p class="help-block">dd/mm/yyyy ex. 20/05/1993</p>-->
				  		<div class="col-sm-10">
					  		<input type="text" 
					  			   id="datepicker" 
					  			   name="date"
					  			   class="form-control">
				  		</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="tel" class="col-sm-2 control-label">Tel</label>
				  		<!--<p class="help-block">Ex. 0863477004</p>-->
				  		<div class="col-sm-10">
					  		<input type="tel"
					  			   class="form-control"
					  			   name="tel"
					  			   placeholder="Tel"></input>
				  		</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="address" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<textarea type="text" 
									  class="form-control" 
									  name="address" 
									  rows="6" ></textarea>
						</div>

				  	</div>

					<div class="centercontainer submit">
			    		<button class="btn btn-primary btn-block" type="submit">Submit</button>
			    	</div>

			</form>
		</div>
	</div>
@endsection