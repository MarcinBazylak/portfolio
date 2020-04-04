
function aboutMeClick2() {
		
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

function portfolioClick2() {
		
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


function contactClick2() {
		
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

var home = '<h1>' +
'<span class="desk">Marcin Bazylak<br><span style="color: #999999;">PORTFOLIO</span></span>' +
'</h1>' +
'<div class="buttons">' +
'<button type="button" class="home" id="o-mnie-btn" tabIndex="-1" onclick="aboutMeClick2()">O mnie</button>' +
'<button type="button" class="home" id="realizacjeBtn" tabIndex="-1" onclick="portfolioClick2()">Realizacje</button>' +
'<button type="button" class="home" id="kontaktBtn" tabIndex="-1" onclick="contactClick2()">Kontakt</button>' +
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