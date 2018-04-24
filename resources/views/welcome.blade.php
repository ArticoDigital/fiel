<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cliente Fiel</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<style>
		html, body {
			background: url("http://barsotano303.com/wp-content/themes/303/assets/images/back.jpg");
			background-size: cover;
			background-position: center;
			color: #636b6f;
			font-family: 'Raleway', sans-serif;
			font-weight: 100;
			height: 100vh;
			margin: 0;
		}

		.full-height {
			height: 100vh;
		}

		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}

		.position-ref {
			position: relative;
		}

		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
		}

		.content {
			text-align: center;
			background: black;
			border-radius: 4px;
			padding: 60px 100px;
		}

		.title {
			font-size: 84px;
		}

		.links > a {
			color: #636b6f;
			padding: 0 25px;
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
		}

		.m-b-md {
			margin-bottom: 30px;
		}
	</style>
</head>
<body>
<div class="flex-center position-ref full-height">

	<div class="content">

		<h1>¡Inscribite!</h1>
		<p>Inscribite con estas redes</p>
		<div class="links">
			<a class="btn btn-primary" href="{{ route('social.auth', 'facebook') }}">
				Facebook
			</a>
			<a class="btn btn-primary" href="{{ route('social.auth', 'google') }}">
				Google
			</a>
		</div>
		<p>y participa por polas gratis, guaro</p>
	</div>
</div>
</body>
</html>
