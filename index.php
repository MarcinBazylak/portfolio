<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl-PL">
<HEAD>
	<title>Marcin Bazylak - Portfolio</title>
	<meta name="description" content="Nazywam się Marcin Bazylak. Od kilkunastu lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.">
	<link rel="canonical" href="http://marcinbazylak.com/">

	<meta property="og:url" content="http://mbgrafika.pl">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Marcin Bazylak - Portfolio">
	<meta property="og:description" content="Nazywam się Marcin Bazylak. Od kilkunastu lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.">
	<meta property="og:image" content="http://www.marcinbazylak.com/img/og_logo.jpg">
	<meta charset="utf-8">
	
	<meta name="robots" content="index,follow">
	<link rel="shortcut icon" href="img/icon.png">
	
	<meta http-equiv="Expires" content="0" />
	<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
	<meta http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
	<link href="https://fonts.googleapis.com/css?family=KoHo|Montserrat|Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
	<link rel="Stylesheet" type="text/css" href="css/style.css" />
	<link rel="Stylesheet" type="text/css" href="css/menu.css" />
	<link rel="Stylesheet" type="text/css" href="css/lbx.css" />
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="_js/autoresize.jquery.js"></script>
	<script src="_lightbox/dist/js/lightbox.js"></script>
</HEAD>
<body>
	<div id="container">
		<header>
				<nav>		
					<label class="navigation-toggle" for="input-toggle">
						<span></span>
						<span></span>
						<span></span>
					</label>
						<input type="checkbox" id="input-toggle">
					<ul>
						<li>
							<a class="nav-link" alt="Strona główna" id="home">Home</a>
						</li>
						<li>
							<a class="nav-link" alt="O mnie" id="o-mnie">O mnie</a>
						</li>
						<li>
							<a class="nav-link" alt="Realizacje" id="realizacje">realizacje</a>
						</li>

						<li>
							<a class="nav-link" alt="Kontakt" id="kontakt">kontakt</a>
						</li>
					</ul>
				</nav>
		</header>
		<main>
			<div id="message">
			<?php
				if (isset($_POST['ok'])) {
					if($_POST['name'] != "" && $_POST['email'] != "" && $_POST['enquiry'] != "") {
						if ($_POST['kod']==$_SESSION['captcha']) {
							$name = strip_tags($_POST['name']);
							$name = addslashes($name);
							$email = strip_tags($_POST['email']);
							$email = addslashes($email);
							$enquiry = strip_tags($_POST['enquiry']);
							$enquiry = addslashes($enquiry);
							
							$adresat = "marcin@marcinbazylak.com";
							
							$temat = $name." wysłał wiadomość ze strony marcinbazylak.com.";
							$temat = "=?UTF-8?B?".base64_encode($temat)."?=";
							
							$reply = $email;
							$wiadomosc = $enquiry;
							$headers = 'From: Formularz strony marcinbazylak.com <marcin@marcinbazylak.com>' . "\r\n" . 'Reply-To: '. $reply . '' . "\r\n" . 'Content-Type: text/plain; charset=UTF-8';
							mail($adresat, $temat, $wiadomosc, $headers);
				
							echo '
							<div class="confirm">Wiadomość została wysłana. Dziękuję.</div>
							<script>
							setTimeout(function(){
								document.getElementById("message").className = "open";
							}, 500);

							setTimeout(function(){
								document.getElementById("message").className = "fade-in";
							}, 1000);

							setTimeout(function(){
								document.getElementById("message").className = "fade-out";
							}, 3000);

							setTimeout(function(){
								document.getElementById("message").className = "close";
							}, 3500);
							</script>
							';
						} else {
							echo '
							<div class="red" id="negative">Wiadomość nie została wysłana. Wpisałeś niepoprawny kod.</div>
							<script>
							setTimeout(function(){
								document.getElementById("message").className = "open";
							}, 500);

							setTimeout(function(){
								document.getElementById("message").className = "fade-in";
							}, 1000);

							setTimeout(function(){
								document.getElementById("message").className = "fade-out";
							}, 3000);

							setTimeout(function(){
								document.getElementById("message").className = "close";
							}, 3500);
							</script>
							';
						}
					} else {
						echo '
						<div class="red" id="negative">Wiadomość nie została wysłana. Wszystkie pola oznaczone gwiazdką muszą być wypełnione. Spróbuj jeszcze raz.</div>
						<script>
						setTimeout(function(){
							document.getElementById("message").className = "open";
						}, 500);

						setTimeout(function(){
							document.getElementById("message").className = "fade-in";
						}, 1000);

						setTimeout(function(){
							document.getElementById("message").className = "fade-out";
						}, 3000);

						setTimeout(function(){
							document.getElementById("message").className = "close";
						}, 3500);
						</script>
						';	
					}
				}?>
			</div>
			<div id="content">

			</div>
		</main>
		<footer>
			Copuright 2019 Marcin Bazylak
		</footer>
	</div>
	<script src="_js/o-mnie.js"></script>
	<script src="_js/realizacje.js"></script>
	<script src="_js/kontakt.js"></script>
	<script src="_js/home.js"></script>
	<script src="_js/start.js"></script>
	</body>
</html>