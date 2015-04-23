@extends('layout.default')

@section('title')
	<title>HospitalQ</title>
@endsection

@section('script')
	{{ HTML::script('js/login.js') }}
@endsection

@section('content')
    <div class="container">
    	<div class="col-md-4 col-md-offset-4 login">
	    	<div class="centercontainer">
		    	<div class="btn-group" role="group">
		    		<button type="button" 
		    				class="btn btn-default active" 
		    				id="select-patient">Patient</button>
		    		<button type="button" 
		    				class="btn btn-default"
		    				id="select-doctor">Doctor</button>
		    	</div>
	    	</div>
	    	<form method="POST" 
	    		  action="/home/login" 
	    		  id="patient"
	    		  novalidate="novalidate">
		    	<div class="form-group">
		    		<label for="HN">HN:</label>
		    		<input type="text"
		    			   class="form-control"
		    			   name="HN"
		    			   placeholder="HN"></input>
		    	</div>
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
		    			   placeholder="Username"></input>
		    	</div>
		    	<div class="centercontainer submit">
		    		<button class="btn btn-primary" type="submit">Submit</button>
		    	</div>
	    	</form>

	    	<form method="POST"
	    		  action="/home/login"
	    		  id="doctor"
	    		  style="display: none"
	    		  novalidate="novalidate">
	    		<div class="form-group">
	    			<label for="doctorID">DoctorID:</label>
	    			<input type="text" class="form-control"
	    				   name="doctorID" placeholder="Enter your ID"></input>
	    		</div>
	    		<div class="centercontainer submit">
	    			<button class="btn btn-primary" 
	    					type="submit"
	    					id="submit-button">Submit</button>
	    		</div>
	    	</form>
    	</div>
    </div>
@endsection