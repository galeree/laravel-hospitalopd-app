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
<body class="custom" style="background-color: #2ecc71">
	@yield('content')
        
	{{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js') }}
    {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_TH.js') }}
   	{{ HTML::script('js/form.js') }}
</body>
</html>