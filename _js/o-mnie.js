var aboutMe = '<h1>O mnie</h1>' +
'<div class="kontakt">' +
'<p>' +
'Nazywam się Marcin Bazylak i jestem programistą oraz grafikiem komputerowym. Na codzień tworzę serwisy internetowe i aplikacje na smartfony z systemem Android. ' +
'</p>' +
'<h3>Zapraszam do zapoznania się z moją ofertą:</h3>' +
'<ul style="list-style-type: circle; padding-inline-start: 20px;">' +
'<li>programowanie obiektowe PHP</li>' +
'<li>projekotwanie responsywnych oraz zgodnych z <b>SEO</b> stron internetowych w technologiach <b>HTML 5</b>, <b>CSS 3</b>, <b>PHP 7</b>, <b>MySql</b>, <b>Javascript</b>. Wszystkie projektowane przez mnie witryny wyposażone są w pełen <b>CMS</b> (panel administracyjny), co pozwala na własnoręczne zmiany zawartości.</li>' +
'<li>rejestracja domen i utrzymanie na serwerze stron wykonanych dla moich kliektów</li>' +
'<li>grafika komputerowa: projektowanie plakatów, ulotek, banerów, opakowań, itp.</li>' +
'</ul>' +
'<h3>Certyfikaty potwierdzające moje kwalifikacje:</h3>' +
'<br>' +
'<center>' +
'<a href="img/cert1.jpg" data-lightbox="image-1"><img src="img/cert1m.jpg" alt="certyfikat" class="cert"></a>' +
'<a href="img/cert5.jpg" data-lightbox="image-1"><img src="img/cert5m.jpg" alt="certyfikat" class="cert"></a>' +
'<a href="img/cert6.jpg" data-lightbox="image-1"><img src="img/cert6m.jpg" alt="certyfikat" class="cert"></a>' +
'</center>' +
'</div>';

var aboutMeClick = document.getElementById("about-me");
aboutMeClick.onclick = function() {
	
	if(content != "aboutMe") {
		document.getElementById("content").style.opacity = "0";
		
		document.getElementById("input-toggle").checked = false;
		
		setTimeout(function(){
			document.getElementById("content").innerHTML = aboutMe;
		}, 500);
		
		setTimeout(function(){
			document.getElementById("content").style.opacity = "1";
		}, 500);
		content = "aboutMe";
	}

};