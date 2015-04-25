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
	    	<div class="centercontainer tabSelect">
		    	<div class="btn-group" role="group" style="width: 90.8%">
		    		<button type="button" 
		    				class="btn btn-default active" 
		    				id="select-patient"
		    				style="width: 50%">Patient</button>
		    		<button type="button" 
		    				class="btn btn-default"
		    				id="select-doctor"
		    				style="width: 50%">Doctor</button>
		    	</div>
	    	</div>
	    	<div class="form-container">
	    		<img class="profile-img" 
	    			 src="/img/icon_client.png"></img>
		    	<form method="POST" 
		    		  action="/home/login" 
		    		  id="patient"
		    		  novalidate="novalidate"
		    		  class="form-signin">
			    	<div class="form-group">
			    		<input type="text" 
			    			   class="form-control"
			    			   name="username" 
			    			   placeholder="Username"></input>
			    	</div>
			    	<div class="form-group">
			    		<input type="password" 
			    			   class="form-control"
			    			   name="password" 
			    			   placeholder="Password"></input>
			    	</div>
			    	<div class="centercontainer submit">
			    		<button class="btn btn-primary btn-block" type="submit">Submit</button>
			    	</div>
			    	<div class="row text-center" style="margin-top: 5%">
			    		<a href="/register" class="signup">Register here</a>
			    	</div>
		    	</form>

		    	<form method="POST"
		    		  action="/home/login"
		    		  id="doctor"
		    		  style="display: none"
		    		  novalidate="novalidate"
		    		  class="form-signin">
		    		<div class="form-group">
		    			<input type="text" class="form-control"
		    				   name="doctorID" placeholder="Enter your ID"></input>
		    		</div>
		    		<div class="centercontainer submit">
		    			<button class="btn btn-primary btn-block"
		    					style="margin-bottom: 2em" 
		    					type="submit"
		    					id="submit-button">Submit</button>
		    		</div>
		    	</form>
	    	</div>
    	</div>
    </div>
@endsection