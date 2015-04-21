<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1,user-scalable=no" name="viewport"/>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/jquery-2.1.1.min.js') }}
	{{ HTML::style('css/custom.css') }}
	<link href="{{{ asset('img/favicon.ico') }}}" rel="icon"/>
	<link href="{{{ asset('img/apple-touch-icon.png') }}}" rel="apple-touch-icon"/>
	@yield('title')
    <style>
        .btn-lg {
          padding: 14px 20px;
          font-size: 36px;
          line-height: 1.5;
          border-radius: 6px;
        }
    </style>
</head>
<body class="custom">
	<div class="container jumbotron">
	    <img src="img/logo.png" class="img-responsive center-block"></img>
	</div>
	@yield('content')
        
</body>
</html>