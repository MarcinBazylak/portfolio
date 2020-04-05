
var aboutMeClick = document.getElementById("about-me");
aboutMeClick.onclick = function() {	
	document.getElementById("input-toggle").checked = false;

	if(content != "aboutMe") {
		document.getElementById("home-div").className = "";
		document.getElementById("portfolio-div").className = "";
		document.getElementById("contact-div").className = "";

		setTimeout(function(){
		document.getElementById("about-me-div").style.opacity = "1";
		document.getElementById("about-me-div").style.display = "block";
	}, 500);

		setTimeout(function(){
			document.getElementById("home-div").style.display = "none";
			document.getElementById("portfolio-div").style.display = "none";
			document.getElementById("contact-div").style.display = "none";
		}, 500);

		setTimeout(function(){
			document.getElementById("about-me-div").className = "inplace";
		}, 600);
		content = "aboutMe";
	}

};

var aboutMeClickBtn = document.getElementById("o-mnie-btn");
aboutMeClickBtn.onclick = function() {	
	document.getElementById("input-toggle").checked = false;

	if(content != "aboutMe") {
		document.getElementById("home-div").className = "";
		document.getElementById("portfolio-div").className = "";
		document.getElementById("contact-div").className = "";

		setTimeout(function(){
		document.getElementById("about-me-div").style.opacity = "1";
		document.getElementById("about-me-div").style.display = "block";
	}, 500);

		setTimeout(function(){
			document.getElementById("home-div").style.display = "none";
			document.getElementById("portfolio-div").style.display = "none";
			document.getElementById("contact-div").style.display = "none";
		}, 500);

		setTimeout(function(){
			document.getElementById("about-me-div").className = "inplace";
		}, 600);
		content = "aboutMe";
	}

};