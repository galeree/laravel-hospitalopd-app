@extends('layout.default')

@section('title')
	<title>Register</title>
@endsection

@section('script')
	{{ HTML::script('js/form.js') }}
	{{ HTML::style('jquery-ui/jquery-ui.min.css') }}
	{{ HTML::script('jquery-ui/jquery-ui.min.js') }}
	{{ HTML::script('js/register.js') }}
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

					<div class="form-group">
					  	<label for="bloodType" class="col-sm-2 control-label">Bloodtype</label>
					  	<div class="col-sm-4">
						  	<select class="form-control" name="bloodType">
						  		<option>A</option>
						  		<option>B</option>
						  		<option>O</option>
						  		<option>AB</option>
						  	</select>
					  	</div>

					  	<label for="sex" class="col-sm-2 control-label">Sex</label>
					  	<div class="col-sm-4">
						  	<select class="form-control" name="sex">
						  		<option>ชาย</option>
						  		<option>หญิง</option>
						  	</select>
					  	</div>
					</div>

				  	<div class="form-group">
				  		<label for="birthDate" class="col-sm-2 control-label">Birthdate</label>
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


				  	<div class="form-group" id="problems">
				  		<label for="problem" class="col-sm-2 control-label">Problems</label>
				  		<div class="col-sm-9">
				  			<input type="text"
				  				   class="form-control" 
				  				   name="problems[]"></input>
				  		</div>
				  		<div class="col-sm-1">
				  			<a class="btn btn-primary pull-right" 
				  			   id="add">+</a>
				  		</div>
				  	</div>

				  	<div class="form-group" id="allergies">
				  		<label class="col-sm-2 control-label">Allergies</label>
				  		<div class="col-sm-9">
				  			<input type="text"
				  				   class="form-control"
				  				   name="allergies[]"></input>
				  		</div>
				  		<div class="col-sm-1">
				  			<a class="btn btn-primary pull-right" 
				  			   id="add">+</a>
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
			    		<button class="btn btn-primary" type="submit">Submit</button>
			    		<a class="btn btn-default" href="/">Cancel</a>
			    	</div>

			</form>
		</div>
	</div>
@endsection