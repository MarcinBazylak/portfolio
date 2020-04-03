<?
echo"				<h1>Kontakt</h1>";
session_start();

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
			$wiadomosc = $message_top.$enquiry.$message_bottom;
			$headers = "From: Formularz strony marcinbazylak.com <marcin@marcinbazylak.com>\r\nReply-To: ".$reply."\r\nContent-Type: text/plain; charset=UTF-8";
			mail($adresat, $temat, $wiadomosc, $headers);

			echo "
			<div class=\"confirm\">Wiadomość została wysłana. Dziękuję.</div>
			";
		} else {
			echo "
			<div class=\"red\">Wpisałeś niepoprawny kod.</div>
			";
		}
	} else {
		echo "
		<div class=\"red\">Wszystkie pola oznaczone gwiazdką muszą być wypełnione. Spróbuj jeszcze raz.</div>
		";	
	}
}

echo "				<form enctype=\"multipart/form-data\" action=\"kontakt\" method=\"post\">
					<input type=\"hidden\" name=\"ok\" value=\"1\">
					<div class=\"kontakt\">
						Marcin Bazylak<br>
						tel. +48 883 662 652<br><br>
						Jeżeli chciałbyś skontaktować się ze mną w celu nawiązania współpracy, zapoznania się dokładniej z moją ofertą lub masz do mnie jakieś inne pytania, możesz się ze mną skontaktować korzystając z poniższego formularza.
						<div class=\"form_field\">
							<input placeholder=\"Twoje imię\" type=\"text\" name=\"name\" class=\"contact\" maxlength=\"80\" autocomplete=\"off\" required>
						</div>
						<div class=\"form_field\">
							<input placeholder=\"Twój adres email\" type=\"email\" name=\"email\" class=\"contact\" maxlength=\"80\" autocomplete=\"off\" required>
						</div>
						<div class=\"form_field\">
							<textarea placeholder=\"Twoja wiadomość\" class=\"contact\" id=\"txtInput\" name=\"enquiry\" required></textarea>
						</div>
						<script>
							$('textarea').autoResize();
						</script>
						<div class=\"form_field\">
							Przepisz kod z obrazka
						</div>
						<div class=\"form_field\">
							<img style=\"margin-bottom: -9px;\" src=\"img/captcha.php\"><input type=\"text\" name=\"kod\" class=\"captcha\" maxlength=\"6\" autocomplete=\"off\">
						</div>
						<div class=\"form_field\">
							<button type=\"submit\" class=\"contact\">Wyślij wiadomość</button>
						</div>
					</div>
				</form>";
?>