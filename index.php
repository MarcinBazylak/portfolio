<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl-PL">

<HEAD>
    <title>Marcin Bazylak - Portfolio</title>
    <meta name="description"
        content="Nazywam się Marcin Bazylak. Od kilkunastu lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.">
    <link rel="canonical" href="http://marcinbazylak.com/">

    <meta property="og:url" content="http://mbgrafika.pl">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Marcin Bazylak - Portfolio">
    <meta property="og:description"
        content="Nazywam się Marcin Bazylak. Od kilku lat zajmuję się programowaniem PHP, Web Designem oraz projektowaniem grafiki. Zapraszam do zapoznania się z moją ofertą.">
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
    <script src="_lightbox/dist/js/lightbox.js"></script>
    <script src="_js/cookie.js"></script>
	<script>CookieAlert.init();</script>
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
                        <a class="nav-link" alt="O mnie" id="about-me">O mnie</a>
                    </li>
                    <li>
                        <a class="nav-link" alt="Realizacje" id="portfolio">realizacje</a>
                    </li>

                    <li>
                        <a class="nav-link" alt="Kontakt" id="contact">kontakt</a>
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
							}, 1500);

							setTimeout(function(){
								document.getElementById("message").className = "fade-in";
							}, 2000);

							setTimeout(function(){
								document.getElementById("message").className = "fade-out";
							}, 4000);

							setTimeout(function(){
								document.getElementById("message").className = "close";
							}, 4500);
							</script>
							';
						} else {
							echo '
							<div class="red" id="negative">Wiadomość nie została wysłana. Wpisałeś niepoprawny kod.</div>
							<script>
							setTimeout(function(){
								document.getElementById("message").className = "open";
							}, 1500);

							setTimeout(function(){
								document.getElementById("message").className = "fade-in";
							}, 2000);

							setTimeout(function(){
								document.getElementById("message").className = "fade-out";
							}, 4000);

							setTimeout(function(){
								document.getElementById("message").className = "close";
							}, 4500);
							</script>
							';
						}
					} else {
						echo '
						<div class="red" id="negative">Wiadomość nie została wysłana. Wszystkie pola oznaczone gwiazdką muszą być wypełnione. Spróbuj jeszcze raz.</div>
						<script>
						setTimeout(function(){
							document.getElementById("message").className = "open";
						}, 1500);

						setTimeout(function(){
							document.getElementById("message").className = "fade-in";
						}, 2000);

						setTimeout(function(){
							document.getElementById("message").className = "fade-out";
						}, 4000);

						setTimeout(function(){
							document.getElementById("message").className = "close";
						}, 4500);
						</script>
						';	
					}
				}?>
            </div>
            <div id="content">
                <div id="home-div">
                    <h1>
                        <span class="desk">Marcin Bazylak<br><span style="color: #999999;">PORTFOLIO</span></span>
                    </h1>
                    <div class="buttons">
                        <button type="button" class="home" id="o-mnie-btn" tabIndex="-1">O mnie</button>
                        <button type="button" class="home" id="realizacjeBtn" tabIndex="-1">Realizacje</button>
                        <button type="button" class="home" id="kontaktBtn" tabIndex="-1">Kontakt</button>
                    </div>
                </div>

                <div id="about-me-div">
                    <h1>O mnie</h1>
                    <div class="kontakt">
                        <p>
                            Nazywam się Marcin Bazylak i jestem programistą oraz grafikiem komputerowym. Na codzień
                            tworzę serwisy internetowe i aplikacje na smartfony z systemem Android.
                        </p>
                        <h3>Zapraszam do zapoznania się z moją ofertą:</h3>
                        <ul style="list-style-type: circle; padding-inline-start: 20px;">
                            <li>programowanie obiektowe PHP</li>
                            <li>projekotwanie responsywnych oraz zgodnych z <b>SEO</b> stron internetowych w
                                technologiach <b>HTML 5</b>, <b>CSS 3</b>, <b>PHP 7</b>, <b>MySql</b>,
                                <b>Javascript</b>. Wszystkie projektowane przez mnie witryny wyposażone są w pełen
                                <b>CMS</b> (panel administracyjny), co pozwala na własnoręczne zmiany zawartości.</li>
                            <li>rejestracja domen i utrzymanie na serwerze stron wykonanych dla moich kliektów</li>
                            <li>grafika komputerowa: projektowanie plakatów, ulotek, banerów, opakowań, itp.</li>
                        </ul>
                        <h3>Certyfikaty potwierdzające moje kwalifikacje:</h3>
                        <br>
                        <center>
                            <a href="img/cert1.jpg" data-lightbox="image-1"><img src="img/cert1m.jpg" alt="certyfikat"
                                    class="cert"></a>
                            <a href="img/cert5.jpg" data-lightbox="image-1"><img src="img/cert5m.jpg" alt="certyfikat"
                                    class="cert"></a>
                            <a href="img/cert6.jpg" data-lightbox="image-1"><img src="img/cert6m.jpg" alt="certyfikat"
                                    class="cert"></a>
                        </center>
                    </div>
                </div>

                <div id="portfolio-div">
                    <h1>Realizacje</h1>
                    <div class="projects">
                        <div class="projects_photo">
                            <a href="img/tracker1.jpg" data-lightbox="image-1"><img src="img/tracker1.jpg"
                                    alt="realizacje" class="realizacje" style="max-width: 120px;"></a>
                            <a href="img/tracker2.jpg" data-lightbox="image-1"><img src="img/tracker2.jpg"
                                    alt="realizacje" class="realizacje"
                                    style="max-width: 120px; margin-left: 15px;"></a>
                        </div>
                        <div class="projects_description">
                            <h3>Child Tracker</h3> Aplikacja na system Android, pozwalająca rodzicom na śledzenie
                            lokalizacji telefonu dziecka.
                            <br>
                            <b>Użyte technologie:</b>
                            <br>
                            Java, Android SDK, Google FIrebase, Mapy OSM<br><br>
                            <a href="http://marcinbazylak.com/pobierz"><button type="button"
                                    class="contact">pobierz</button></a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="projects">
                        <div class="projects_photo">
                            <a href="img/photolio.jpg" data-lightbox="image-2"><img src="img/photolio.jpg"
                                    alt="realizacje" class="realizacje"></a>
                        </div>
                        <div class="projects_description">
                            <h3><a href="http://photolio.pl">photolio.pl</a></h3>serwis dla fotografów oferujący darmową
                            przestrzeń na portfolio.
                            <br>
                            <b>Użyte technologie:</b>
                            <br>
                            Responsive Web Design,
                            <br>
                            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>, Obsługa przez
                            <b>CMS</b>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="projects">
                        <div class="projects_photo">
                            <a href="img/mika.jpg" data-lightbox="image-3"><img src="img/mika.jpg" alt="realizacje"
                                    class="realizacje"></a>
                        </div>
                        <div class="projects_description">
                            <h3>Patryk Mika fotografia ślubna</h3>Projekt strony dla fotografa ślubnego Patryka Miki.
                            <br>
                            <b>Użyte technologie:</b>
                            <br>
                            Responsive Web Design,
                            <br>
                            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="projects">
                        <div class="projects_photo">
                            <a href="img/czyscioch.jpg" data-lightbox="image-4"><img src="img/czyscioch.jpg"
                                    alt="realizacje" class="realizacje"></a>
                        </div>
                        <div class="projects_description">
                            <h3>czyścioch</h3>Projekt strony firmy zajmującej się kompleksowymi pracami porządkowymi.
                            <br>
                            <b>Użyte technologie:</b>
                            <br>
                            Responsive Web Design,
                            <br>
                            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="projects">
                        <div class="projects_photo">
                            <a href="img/motolux.jpg" data-lightbox="image-5"><img src="img/motolux.jpg"
                                    alt="realizacje" class="realizacje"></a>
                        </div>
                        <div class="projects_description">
                            <h3>moto-lux</h3>Projekt strony dealera samochodów używanych MOTO-LUX.
                            <br>
                            <b>Użyte technologie:</b>
                            <br>
                            <b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>, Obsługa przez
                            <b>CMS</b>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>

                <div id="contact-div">
                    <h1>Kontakt</h1>
                    <form enctype="multipart/form-data" action="" method="post" name="contactForm">
                        <input type="hidden" name="ok" value="1">
                        <div class="kontakt">
                            Marcin Bazylak<br>
                            tel. 48 883 662 652<br><br>
                            Jeżeli chciałbyś skontaktować się ze mną w celu nawiązania współpracy, zapoznania się
                            dokładniej z moją ofertą lub masz do mnie jakieś inne pytania, możesz się ze mną
                            skontaktować korzystając z poniższego formularza.
                            <div class="form_field">
                                <input placeholder="Twoje imię" type="text" name="name" class="contact" maxlength="80"
                                    autocomplete="off" required>
                            </div>
                            <div class="form_field">
                                <input placeholder="Twój adres email" type="email" name="email" class="contact"
                                    maxlength="80" autocomplete="off" required>
                            </div>
                            <div class="form_field">
                                <textarea placeholder="Twoja wiadomość" class="contact" id="txtInput" name="enquiry"
                                    required
                                    oninput="this.style.height = '' ;this.style.height = this.scrollHeight + 'px'"></textarea>
                            </div>
                            <div class="form_field">
                                Przepisz kod z obrazka
                            </div>
                            <div class="form_field">
                                <img style="margin-bottom: -9px; margin-right: 10px;" src="img/captcha.php"><input type="text" name="kod"
                                    class="captcha" maxlength="6" autocomplete="off" required>
                            </div>
                            <div class="form_field">
                                <button type="submit" class="contact">Wyślij wiadomość</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </main>
        <footer>
            Copuright 2019 Marcin Bazylak
        </footer>
	</div>
	<script src="_js/start.js"></script>
	<script src="_js/o-mnie.js"></script>
	<script src="_js/home.js"></script>
    <script src="_js/realizacje.js"></script>
    <script src="_js/kontakt.js"></script>
    
    
</body>

</html>