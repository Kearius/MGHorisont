<?php $baseUrl = "http://localhost/horisont/"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>HORISONT PARK</title>
	<link rel="stylesheet" href="<?= $baseUrl; ?>assets/css/main.css"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	<header class="animate">
		<div class="content">
			<nav>
				<a class="one" class="animate">Hjem</a>
				<a class="two" class="animate">Om prosjektet</a>
			</nav>
			<figure>
				<a href="<?= $baseUrl; ?>">
					<img src="<?= $baseUrl; ?>assets/images/menu-logo.png" href="<?= $baseUrl; ?>"/>
				</a>
			</figure>
			<nav>
				<a class="three" class="animate">Leilighetene</a>
				<a class="four" class="animate">Kontakt</a>
			</nav>
			<a>
				<img src="<?= $baseUrl; ?>assets/images/menu.png" id="open-menu"/>
			</a>
		</div>
	</header>
	<div id="menu-wrapper">
		<a>
			<img src="<?= $baseUrl; ?>assets/images/close.png" id="close-menu"/>
		</a>
		<div class="menu-wrapper-content">
			<a class="one" class="animate">Hjem</a>
			<a class="two" class="animate">Om prosjektet</a>
			<a class="three" class="animate">Leilighetene</a>
			<a class="four" class="animate">Kontakt</a>
		</div>
	</div>