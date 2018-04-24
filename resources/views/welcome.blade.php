<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cliente Fiel</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
	<!-- Styles -->
	<style>
		html, body {
			background: url("images/back.jpg");
			background-size: cover;
			background-position: center;
			color: #fff;
			font-family: 'Titillium Web', sans-serif;
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

		.content {
			text-align: center;
			background: rgba(0, 0, 0, .8);
			border-radius: 4px;
			padding: 0 30px 0;
			position: relative;
		}

		.links > a {
			padding: 0 25px;
			text-decoration: none;
			border: 1px solid;
			color: #fff;
			border-radius: 3px;
		}

		.links svg {
			position: relative;
			top: 7px;
			left: 3px;
		}

		h1 {
			text-transform: uppercase;
			color: #fb003a;
			max-width: 350px;
			margin: 0 auto 20px;
			line-height: 1.2em;
		}

		.content-up {
			position: relative;
			top: -55px;
		}

		.o {
			margin: 0 3px 0 6px;
		}
		p{
			max-width: 380px;
			margin: 20px auto 0;
			font-size: 18px;
		}
		@media (max-width: 600px) {
			html, body {
				background-image:linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)),  url("images/back.jpg");
			}
			.content-up {
				top: 0;
			}
			.content {
				background: transparent;
			}
			h1, p, img{
				max-width: 100%;
			}
			span{
				display: block;
				height: 8px;
				visibility: hidden;
			}
			.link a{
				display: block;
				width: 100%;
			}
			a.more{
				padding: 0 33px ;
			}

		}
	</style>
</head>
<body>
<div class="flex-center position-ref full-height">

	<div class="content">
		<div class="content-up">
			<figure class="logo">
				<img src="{{asset('images/logo-cliente-fiel.png')}}" alt="">
			</figure>
			<h1>Suscríbete a través de tus redes sociales </h1>
			<div class="links">
				<a  class="more" href="{{ route('social.auth', 'facebook') }}">Inscribirme con
					<svg class="svg" width="15px" height="30px" viewBox="0 0 15 30" version="1.1" xmlns="http://www.w3.org/2000/svg"
						 xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="Artboard" transform="translate(-8.000000, 0.000000)" fill-rule="nonzero" fill="#FFFFFF">
							<path d="M8.47845062,15.9784532 L11.7344961,15.9784532 L11.7344961,29.5162843 C11.7344961,29.7845323 11.9489845,30 12.2123321,30 L17.7318761,30 C17.9964528,30 18.210634,29.7848427 18.210634,29.5162843 L18.210634,16.0421 L21.9521977,16.0421 C22.1952642,16.0421 22.4002266,15.8586109 22.4278827,15.6130274 L22.9969839,10.6299482 C23.0123484,10.4930299 22.9684059,10.3551802 22.8789845,10.2514825 C22.7867975,10.1487162 22.6561992,10.089416 22.5212989,10.089416 L18.2103267,10.089416 L18.2103267,6.96730727 C18.2103267,6.02471359 18.7124387,5.54689683 19.7019126,5.54689683 C19.8441879,5.54689683 22.5209916,5.54689683 22.5209916,5.54689683 C22.7849538,5.54689683 22.9997495,5.32987674 22.9997495,5.06224968 L22.9997495,0.487130926 C22.9997495,0.220435282 22.7852611,0.0043466112 22.5209916,0.0043466112 L18.6374599,0.0043466112 C18.6091892,0.00155236114 18.5486531,0 18.4589244,0 C17.7844227,0 15.4431797,0.13381353 13.5923717,1.85445062 C11.5421325,3.76012916 11.8282195,6.04085815 11.8958233,6.43639976 L11.8958233,10.0897265 L8.47875791,10.0897265 C8.21510304,10.0897265 8,10.3073675 8,10.5749946 L8,15.4947375 C8,15.7617436 8.21479575,15.9784532 8.47845062,15.9784532 Z"
								  id="facebook"></path>
						</g>
					</svg>
				</a>
				<span class="o">o</span>
				<a href="{{ route('social.auth', 'google') }}">Inscribirme con
					<svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg"
						 xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="Artboard" fill-rule="nonzero" fill="#FFFFFF">
							<path d="M16.4533238,18.0940103 L23.7797205,18.0940103 C22.4944259,21.7308822 19.0102496,24.3360548 14.9320243,24.305939 C9.98461818,24.2699242 5.89366107,20.312645 5.70206243,15.3696163 C5.49586875,10.0701656 9.7479923,5.69468019 15.0031363,5.69468019 C17.4057274,5.69468019 19.5983984,6.6096419 21.2513637,8.10829143 C21.6429454,8.46378216 22.2382365,8.46719735 22.6248496,8.10518671 L25.315615,5.57142271 C25.7360762,5.17619154 25.7370078,4.50743432 25.3180993,4.1094089 C22.6965827,1.62718329 19.1798004,0.0794791408 15.3015582,0.00279249597 C7.0305211,-0.157721655 0.058131551,6.62268173 0.000372478439,14.8933519 C-0.0576971267,23.2270479 6.6814824,30 15.0031363,30 C23.0049416,30 29.5425854,23.7356015 29.9804364,15.8440179 C29.9928577,15.7446668 30,12.4011912 30,12.4011912 L16.4533238,12.4011912 C15.8987125,12.4011912 15.4487506,12.8513759 15.4487506,13.4058794 L15.4487506,17.089943 C15.4484401,17.644757 15.8987125,18.0940103 16.4533238,18.0940103 Z"
								  id="google"></path>
						</g>
					</svg>
				</a>
			</div>
			<p class="p">Y anda al día con nuestras promociones, eventos y regalos que #barsotano303 tiene para ti por un cliente
				fiel.</p>
		</div>
	</div>
</div>
</body>
</html>
