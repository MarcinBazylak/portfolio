<?
session_start();
$site = $_SERVER['REQUEST_URI'];

echo '
<!DOCTYPE html>
<html lang="pl-PL">
<HEAD>
	<title>Marcin Bazylak - Portfolio</title>
	<meta name="description" content="Nazywam się Marcin Bazylak. Od kilkunastu lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.">
	<link rel="canonical" href="http://marcinbazylak.com/'.$site.'">

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
							<a href="http://marcinbazylak.com" alt="Strona główna">Home</a>
						</li>
						<li>
							<a href="http://marcinbazylak.com/o-mnie" alt="O mnie">O mnie</a>
						</li>
						<li>
							<a href="http://marcinbazylak.com/realizacje" alt="Realizacje">realizacje</a>
						</li>

						<li>
							<a href="http://marcinbazylak.com/kontakt" alt="Kontakt">kontakt</a>
						</li>
					</ul>
				</nav>
		</header>
		<main>
			<div id="content">
			';
				if (empty($_GET['page'])){
					include 'home.php';
				} else {
					include $_GET['page'].'.php';
				}

			echo '
			</div>
		</main>
		<footer>
			Copuright 2019 Marcin Bazylak
		</footer>
	</div>
</body>
</html>
';
?>