
function oMnieClick2() {
		
	document.getElementById("content").style.opacity = "0";
	
	document.getElementById("input-toggle").checked = false;
	
	setTimeout(function(){
		document.getElementById("content").innerHTML = oMnie;
	}, 500);
	
	setTimeout(function(){
		document.getElementById("content").style.opacity = "1";
	}, 500);
	content = "oMnie";

}

function realizacjeClick2() {
		
	document.getElementById("content").style.opacity = "0";
	
	document.getElementById("input-toggle").checked = false;
	
	setTimeout(function(){
		document.getElementById("content").innerHTML = realizacje;
	}, 500);
	
	setTimeout(function(){
		document.getElementById("content").style.opacity = "1";
	}, 500);
	content = "realizacje";

}


function kontaktClick2() {
		
	document.getElementById("content").style.opacity = "0";
	
	document.getElementById("input-toggle").checked = false;
	
	setTimeout(function(){
		document.getElementById("content").innerHTML = kontakt;
	}, 500);
	
	setTimeout(function(){
		document.getElementById("content").style.opacity = "1";
	}, 500);
	content = "kontakt";

}

var home = '<h1>' +
'<span class="desk">Marcin Bazylak - PORTFOLIO</span>' +
'<span class="mob">Marcin<br>Bazylak<br>PORTFOLIO</span>' +
'</h1>' +
'<div class="buttons">' +
'<button type="button" class="home" id="o-mnie-btn" tabIndex="-1" onclick="oMnieClick2()">O mnie</button>' +
'<button type="button" class="home" id="realizacjeBtn" tabIndex="-1" onclick="realizacjeClick2()">Realizacje</button>' +
'<button type="button" class="home" id="kontaktBtn" tabIndex="-1" onclick="kontaktClick2()">Kontakt</button>' +
'</div>';

var homeClick = document.getElementById("home");
homeClick.onclick = function() {
	
	if(content != "home") {
		document.getElementById("content").style.opacity = "0";
		
		document.getElementById("input-toggle").checked = false;
		
		setTimeout(function(){
			document.getElementById("content").innerHTML = home;
		}, 500);
		
		setTimeout(function(){
			document.getElementById("content").style.opacity = "1";
		}, 500);
		content = "home";
	}

};