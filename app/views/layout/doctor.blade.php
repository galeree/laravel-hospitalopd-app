<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1,user-scalable=no" name="viewport"/>
	<!-- Inculde javascript and css library -->
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::script('js/jquery-2.1.1.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::style('css/custom.css') }}
	{{ HTML::style('font-awesome/css/font-awesome.min.css') }}
	<link href="{{{ asset('img/favicon.ico') }}}" rel="icon"/>
	<link href="{{{ asset('img/apple-touch-icon.png') }}}" rel="apple-touch-icon"/>
	
	<!-- Include custom script file for each page -->
	@yield('script')

	<!-- Title for each page -->
	@yield('title')
</head>
<body class="patient">
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" 
					class="navbar-toggle collapsed" 
					data-toggle="collapse" 
					data-target="#menu">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
			<a href="/doctor" class="navbar-brand">Doctor</a>
		</div>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/doctor">Home</a></li>
				<li class=""><a href="/doctor/profile">Profile</a></li>
				<li class=""><a href="/record">Record</a></li>
				<li class=""><a href="/orderservice">Service</a></li>
				<li class=""><a href="/apptlist">Appointment</a></li>
			</ul>
			<!-- Log out -->
			<form class="navbar-form navbar-left"
				  method="POST"
				  action="/logout">
        		<button type="submit" class="btn btn-default">Log out</button>
      		</form>
		</div>
	</div>
</nav>
	@yield('content')
        
	{{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_TH.js') }}
</body>
</html>