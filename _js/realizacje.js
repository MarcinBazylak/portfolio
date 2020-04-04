var portfolio = '<h1>Realizacje</h1>' +
'<div class="projects">' +
'<div class="projects_photo">' +
'<a href="img/tracker1.jpg" data-lightbox="image-1"><img src="img/tracker1.jpg" alt="realizacje" class="realizacje" style="max-width: 120px;"></a>' +
'<a href="img/tracker2.jpg" data-lightbox="image-1"><img src="img/tracker2.jpg" alt="realizacje" class="realizacje"  style="max-width: 120px; margin-left: 15px;"></a>' +
'</div>' +
'<div class="projects_description">' +
'<h3>Child Tracker</h3> Aplikacja na system Android, pozwalająca rodzicom na śledzenie lokalizacji telefonu dziecka.' +
'<br>' +
'<b>Użyte technologie:</b>' +
'<br>' +
'Java, Android SDK, Google FIrebase, Mapy OSM<br><br>' +
'<a href="http://marcinbazylak.com/pobierz"><button type="button" class="contact">pobierz</button></a>' +
'</div>' +
'<div style="clear:both;"></div>' +
'</div>' +
'<div class="projects">' +
'<div class="projects_photo">' +
'<a href="img/photolio.jpg" data-lightbox="image-2"><img src="img/photolio.jpg" alt="realizacje" class="realizacje"></a>' +
'</div>' +
'<div class="projects_description">' +
'<h3><a href="http://photolio.pl">photolio.pl</a></h3>serwis dla fotografów oferujący darmową przestrzeń na portfolio.' +
'<br>' +
'<b>Użyte technologie:</b>' +
'<br>' +
'Responsive Web Design,' +
'<br>' +
'<b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>, Obsługa przez <b>CMS</b>' +
'</div>' +
'<div style="clear:both;"></div>' +
'</div>' +
'<div class="projects">' +
'<div class="projects_photo">' +
'<a href="img/mika.jpg" data-lightbox="image-3"><img src="img/mika.jpg" alt="realizacje" class="realizacje"></a>' +
'</div>' +
'<div class="projects_description">' +
'<h3>Patryk Mika fotografia ślubna</h3>Projekt strony dla fotografa ślubnego Patryka Miki.' +
'<br>' +
'<b>Użyte technologie:</b>' +
'<br>' +
'Responsive Web Design,' +
'<br>' +
'<b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>' +
'</div>' +
'<div style="clear:both;"></div>' +
'</div>' +
'<div class="projects">' +
'<div class="projects_photo">' +
'<a href="img/czyscioch.jpg" data-lightbox="image-4"><img src="img/czyscioch.jpg" alt="realizacje" class="realizacje"></a>' +
'</div>' +
'<div class="projects_description">' +
'<h3>czyścioch</h3>Projekt strony firmy zajmującej się kompleksowymi pracami porządkowymi.' +
'<br>' +
'<b>Użyte technologie:</b>' +
'<br>' +
'Responsive Web Design,' +
'<br>' +
'<b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>' +
'</div>' +
'<div style="clear:both;"></div>' +
'</div>' +
'<div class="projects">' +
'<div class="projects_photo">' +
'<a href="img/motolux.jpg" data-lightbox="image-5"><img src="img/motolux.jpg" alt="realizacje" class="realizacje"></a>' +
'</div>' +
'<div class="projects_description">' +
'<h3>moto-lux</h3>Projekt strony dealera samochodów używanych MOTO-LUX.' +
'<br>' +
'<b>Użyte technologie:</b>' +
'<br>' +
'<b>HTML</b>, <b>CSS</b>, <b>PHP</b>, <b>MySQL</b>, <b>Javascript</b>, Obsługa przez <b>CMS</b>' +
'</div>' +
'<div style="clear:both;"></div>' +
'</div>';

var portfolioClick = document.getElementById("portfolio");
portfolioClick.onclick = function() {
	
	if(content != "portfolio") {
		document.getElementById("content").style.opacity = "0";
		
		document.getElementById("input-toggle").checked = false;
		
		setTimeout(function(){
			document.getElementById("content").innerHTML = portfolio;
		}, 500);
		
		setTimeout(function(){
			document.getElementById("content").style.opacity = "1";
		}, 500);
		content = "portfolio";
	}

};