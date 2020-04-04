var contact = '<h1>Kontakt</h1>' +
'<form enctype="multipart/form-data" action="" method="post" name="contactForm">' +
'<input type="hidden" name="ok" value="1">' +
'<div class="kontakt">' +
'Marcin Bazylak<br>' +
'tel. +48 883 662 652<br><br>' +
'Jeżeli chciałbyś skontaktować się ze mną w celu nawiązania współpracy, zapoznania się dokładniej z moją ofertą lub masz do mnie jakieś inne pytania, możesz się ze mną skontaktować korzystając z poniższego formularza.' +
'<div class="form_field">' +
'<input placeholder="Twoje imię" type="text" name="name" class="contact" maxlength="80" autocomplete="off" required>' +
'</div>' +
'<div class="form_field">' +
'<input placeholder="Twój adres email" type="email" name="email" class="contact" maxlength="80" autocomplete="off" required>' +
'</div>' +
'<div class="form_field">' +
'<textarea placeholder="Twoja wiadomość" class="contact" id="txtInput" name="enquiry" required oninput="this.style.height = \'\';this.style.height = this.scrollHeight + \'px\'"></textarea>' +
'</div>' +
'<div class="form_field">' +
'Przepisz kod z obrazka' +
'</div>' +
'<div class="form_field">' +
'<img style="margin-bottom: -9px;" src="img/captcha.php"><input type="text" name="kod" class="captcha" maxlength="6" autocomplete="off">' +
'</div>' +
'<div class="form_field">' +
'<button type="submit" class="contact">Wyślij wiadomość</button>' +
'</div>' +
'</div>' +
'</form>';

var contactClick = document.getElementById("contact");
contactClick.onclick = function() {

	if(content != "contact") {
		document.getElementById("content").style.opacity = "0";
		
		document.getElementById("input-toggle").checked = false;
		
		setTimeout(function(){
			document.getElementById("content").innerHTML = contact;
		}, 500);
		
		setTimeout(function(){
			document.getElementById("content").style.opacity = "1";
		}, 500);
		content = "contact";
		
	}

};