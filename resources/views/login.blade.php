<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page d'Authentification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ url('domain') }}/css/main.css">
</head>
<body>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="{{route('login')}}" method="POST">
				{!! csrf_field() !!}

				<span class="login100-form-title p-b-26">
						Bienvenu
					</span>
				<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
				<div class="wrap-input100 validate-input" data-validate = "Entrez un email du format : a@b.c">
					<input class="input100" type="text" name="username"/>
					<span class="focus-input100" data-placeholder="Email"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Entrez un mot de pass">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
					<input class="input100" type="password" name="password" />
					<span class="focus-input100" data-placeholder="Mot de Pass"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<input class="login100-form-btn" type="submit"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>

<script src="{{ url('domain') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ url('domain') }}/vendor/animsition/js/animsition.min.js"></script>
<script src="{{ url('domain') }}/vendor/bootstrap/js/popper.js"></script>
<script src="{{ url('domain') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('domain') }}/vendor/select2/select2.min.js"></script>
<script src="{{ url('domain') }}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{ url('domain') }}/vendor/daterangepicker/daterangepicker.js"></script>
<script src="{{ url('domain') }}/vendor/countdowntime/countdowntime.js"></script>
<script src="{{ url('domain') }}/js/main.js"></script>

</body>
</html>