@extends('layout.default')

@section('title')
	<title>Register</title>
@endsection

@section('script')
	{{ HTML::script('js/form.js') }}
@endsection

@section('content')
	<div class="container">
		<div class="col-md-4 col-md-offset-4 login">
			<form method="POST"
				  action="/register"
				  novalidate="novalidate"
				  id="register">
					
					<div class="form-group">
				  		<label for="username">Username:</label>
				  		<input type="text"
				  			   class="form-control"
				  			   name="username"
				  			   placeholder="Username"></input>
				  	</div>

				  	<div class="form-group">
				  		<label for="password">Password:</label>
				  		<input type="password"
				  			   class="form-control"
				  			   name="password"
				  			   placeholder="password"></input>
				  	</div>

				  	<div class="form-group">
				  		<label for="HN">HN:</label>
				  		<input type="text"
				  			   class="form-control"
				  			   name="HN"
				  			   placeholder="HN"></input>
				  	</div>

				  	<div class="form-group">
				  		<label for="firstName">Firstname:</label>
				  		<input type="text"
				  			   class="form-control"
				  			   name="firstName"
				  			   placeholder="Firstname"></input>
				  	</div>

				  	<div class="form-group">
				  		<label for="lastName">Lastname:</label>
				  		<input type="text"
				  			   class="form-control"
				  			   name="lastName"
				  			   placeholder="Lastname"></input>
				  	</div>

				  	<div class="form-group">
				  		<label for="bloodType">Bloodtype:</label>
				  		<select class="form-control" name="bloodType">
				  			<option>A</option>
				  			<option>B</option>
				  			<option>O</option>
				  			<option>AB</option>
				  		</select>
				  	</div>

				  	<div class="form-group">
				  		<label for="sex">Sex:</label>
				  		<select class="form-control" name="sex">
				  			<option>Male</option>
				  			<option>Female</option>
				  		</select>
				  	</div>

				  	<div class="form-group">
				  		<label for="birthDate">Birthdate:</label>
				  		<p class="help-block">dd/mm/yyyy ex. 20/05/1993</p>
				  		<div class="input-group">
					  		<input type="number"
					  			   class="form-control"
					  			   name="day"></input>
					  		<div class="input-group-addon">/</div>
					  		<input type="number"
					  			   class="form-control"
					  			   name="month"></input>
					  		<div class="input-group-addon">/</div>
					  		<input type="number"
					  			   class="form-control"
					  			   name="year"></input>
				  		</div>
				  	</div>

				  	<div class="form-group">
				  		<label for="tel">Tel:</label>
				  		<p class="help-block">Ex. 0863477004</p>
				  		<input type="number"
				  			   class="form-control"
				  			   name="tel"
				  			   placeholder="Tel"></input>
				  	</div>

				  	<div class="form-group">
				  		<label for="address">Address:</label>
						<textarea type="text" 
								  class="form-control" 
								  name="address" 
								  rows="6" ></textarea>
				  	</div>

					<div class="centercontainer submit">
			    		<button class="btn btn-primary" type="submit">Submit</button>
			    	</div>

			</form>
		</div>
	</div>
@endsection