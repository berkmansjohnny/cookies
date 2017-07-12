<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<!--
	▄████▄   ▒█████   ▒█████   ██ ▄█▀ ██▓▓█████   ██████
	▒██▀ ▀█  ▒██▒  ██▒▒██▒  ██▒ ██▄█▒ ▓██▒▓█   ▀ ▒██    ▒
	▒▓█    ▄ ▒██░  ██▒▒██░  ██▒▓███▄░ ▒██▒▒███   ░ ▓██▄
	▒▓▓▄ ▄██▒▒██   ██░▒██   ██░▓██ █▄ ░██░▒▓█  ▄   ▒   ██▒
	▒ ▓███▀ ░░ ████▓▒░░ ████▓▒░▒██▒ █▄░██░░▒████▒▒██████▒▒
	░ ░▒ ▒  ░░ ▒░▒░▒░ ░ ▒░▒░▒░ ▒ ▒▒ ▓▒░▓  ░░ ▒░ ░▒ ▒▓▒ ▒ ░
	░  ▒     ░ ▒ ▒░   ░ ▒ ▒░ ░ ░▒ ▒░ ▒ ░ ░ ░  ░░ ░▒  ░ ░
	░        ░ ░ ░ ▒  ░ ░ ░ ▒  ░ ░░ ░  ▒ ░   ░   ░  ░  ░
	░ ░          ░ ░      ░ ░  ░  ░    ░     ░  ░      ░
	░

-->


<!-- search meta -->
<title> Cookies.css </title>
<meta name="author" content="[]" />
<meta name="description" content="[]" />
<meta name="keywords" content="[]" />
<meta name="robots" contents="[]" />

<!-- styles -->
<link rel="stylesheet" href="assets/css/normalize.css" />
<link rel="stylesheet" href="assets/css/cookies.css" />
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<!-- icons -->
<link rel="shortcut icon" href="cookie.ico" />
<link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png" />

<!-- head scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>


<body>
	<header>
		<h1>Cookies.css<br>	<span><em>Ready-to-use cookiebars</em> v.0.0.1</span></h1>
		<div class="buttons">
			<a href="#" class="btn btn--show" id="show-1">note</a>
			<a href="#" class="btn btn--show" id="show-2">Notification</a>
			<a href="#" class="btn btn--show" id="show-3">Triangle</a>
			<a href="#" class="btn btn--show" id="show-4">Monster</a>

		</div>
	</header>
	<section class="first">
		<div class="cookie note top ghost" id="cookie-1">
			<div class="cookie--img">
				<img src="assets/img/cookie-m.png" alt="cookie">
			</div>
			<div class="cookie--text">
				<p>Om je beter en persoonlijker te helpen, gebruiken wij cookies en vergelijkbare technieken. Met de cookies volgen wij en derde partijen jouw internetgedrag binnen onze site. Hiermee tonen we advertenties op basis van jouw interesse en kun je informatie delen via social media. Als je verdergaat op onze website gaan we ervan uit dat je dat goed vindt. Meer weten? <a href="#">Lees onze cookiepagina</a></p>
			</div>
			<div class="cookie--close">
				<a href="#"><span class="lnr lnr-cross-circle"></span></a>
			</div>
		</div>

		<div class="cookie notification bottom ghost" id="cookie-2">
			<div class="cookie--text">
				<p>Om je beter en persoonlijker te helpen, gebruiken wij cookies en vergelijkbare technieken. Met de cookies volgen wij en derde partijen jouw internetgedrag binnen onze site. Hiermee tonen we advertenties op basis van jouw interesse en kun je informatie delen via social media. Als je verdergaat op onze website gaan we ervan uit dat je dat goed vindt. Meer weten? <a href="#">Lees onze cookiepagina</a></p>
			</div>
			<div class="cookie--close">
				<a href="#">Sluiten <span class="lnr lnr-cross"></span></a>
			</div>
		</div>

		<div class="cookie triangle bottom ghost" id="cookie-3">
			<div class="cookie--text">
				<p>Wij maken gebruik van cookies om uw surfervaring op deze website makkelijker te maken.<a href="#">Meer weten</a></p>
			</div>
			<div class="cookie--close">
				<a href="#"><span class="lnr lnr-cross"></span></a>
			</div>
		</div>

		<div class="cookie monster ghost" id="cookie-4">
			<div class="cookie--text">
				<p>Om je beter en persoonlijker te helpen, gebruiken wij cookies en vergelijkbare technieken. Met de cookies volgen wij en derde partijen jouw internetgedrag binnen onze site. Hiermee tonen we advertenties op basis van jouw interesse en kun je informatie delen via social media. Als je verdergaat op onze website gaan we ervan uit dat je dat goed vindt. Meer weten? <a href="#">Lees onze cookiepagina</a></p>
			</div>
			<div class="cookie--buttons text-center">
				<a href="#" class="btn btn--agree">Ik ga akkoord</a>
				<a href="#" class="btn btn--disagree">Ik ben niet akkoord</a>
			</div>
			<div class="cookie--close">
				<a href="#"><span class="lnr lnr-cross-circle"></span></a>
			</div>
			<div class="cookie--img">
				<img src="assets/img/cookiemonster.jpg" alt="cookie monster">
			</div>
		</div>


	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$(".cookie--close").click(function(){
			$(this).closest('.cookie').toggleClass("ghost",true);
		});

		$('[id^=show-]').each(function (i) {
			$("#show-"+ i).click(function(){
				$('#cookie-'+ i).toggleClass("ghost", false);
			});
		});

	});
	</script>

</body>
</html>
