<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Admin - Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('css/backend-css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/backend-css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/backend-css/style.css') }}">

	<!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/backend-css/main.css') }}">
    
    <!-- CUSTOM made CSS -->
    <link rel="stylesheet" href="{{ asset('css/backend-css/custom.css') }}">

	<!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/backend-img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/backend-img/favicon.png') }}">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center" style="font-family: Vivaldi !important;color: #f1b8c4;font-size:50px;">Burgeon</div>
								<p class="lead">Login to your account</p>
							</div>
							@if(Session::has('error_message'))
								<div class="alert alert-danger alert-block">
									<button type="button" class="close" data-dismiss="alert">×</button>	
									<strong>{!! session('error_message') !!}</strong>
								</div>
							@endif
							@if(Session::has('success_message'))
								<div class="alert alert-success alert-block">
									<button type="button" class="close" data-dismiss="alert">×</button>	
									<strong>{!! session('success_message') !!}</strong>
								</div>
							@endif

							<form class="form-auth-small" method="POST" action="{{ url('admin') }}">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" name="username" class="form-control" id="signin-email" value="" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" value="" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="element-left box"> <!-- i deleted fancy-checkbox class from here -->
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right" style="background-image: url('{{ asset('images/backend-img/login-bg.jpg') }}')">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Admin Ecommerce Dashboard</h1>
							<p>by Burgeon</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="{{ asset('js/backend-js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/backend-js/bootstrap.min.js') }}"></script>

</body>

</html>