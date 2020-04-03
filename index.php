<?
session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($ip);
$site = $_SERVER['REQUEST_URI'];
$referer = $_SERVER['HTTP_REFERER'];
$mtime = time();

switch ($_GET['page']) {
    case "":
        $title = 'O mnie';
		$description = 'Nazywam się Marcin Bazylak. Od kilkunastu lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.';
        break;
    case "realizacje":
        $title = 'Realizacje';
		$description = 'Moje projekty cechuje nienaganna staranność wykonania oraz pełna zgodność z najpopularniejszymi wyszukiwarkami. Zapoznaj się z moimi ostatnimi pracami.';
        break;
    case "kontakt":
        $title = 'Kontakt';
		$description = 'Skorzystaj z formularza kontaktowego jeżeli chciałbyś zapoznać się bliżej z moją ofertą.';
        break;
}

echo '
<!DOCTYPE html>
<html lang="pl-PL">
<HEAD>
	<title>Marcin Bazylak - '.$title.'</title>
	<meta name="description" content="'.$description.'">
	<link rel="canonical" href="http://marcinbazylak.com/'.$site.'">

	<meta property="og:url" content="http://mbgrafika.pl">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Marcin Bazylak - '.$title.'">
	<meta property="og:description" content="'.$description.'">
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