var contactClick = document.getElementById("contact");
contactClick.onclick = function() {
    document.getElementById("input-toggle").checked = false;

    if (content != "contact") {
        document.getElementById("home-div").className = "";
        document.getElementById("about-me-div").className = "";
        document.getElementById("portfolio-div").className = "";

        setTimeout(function() {
            document.getElementById("contact-div").style.opacity = "1";
            document.getElementById("contact-div").style.display = "block";
        }, 200);

        setTimeout(function() {
            document.getElementById("home-div").style.display = "none";
            document.getElementById("about-me-div").style.display = "none";
            document.getElementById("portfolio-div").style.display = "none";
        }, 200);

        setTimeout(function() {
            document.getElementById("contact-div").className = "inplace";
        }, 300);
        content = "contact";
    }

};

var contactClickBtn = document.getElementById("kontaktBtn");
contactClickBtn.onclick = function() {
    document.getElementById("input-toggle").checked = false;

    if (content != "contact") {
        document.getElementById("home-div").className = "";
        document.getElementById("about-me-div").className = "";
        document.getElementById("portfolio-div").className = "";

        setTimeout(function() {
            document.getElementById("contact-div").style.opacity = "1";
            document.getElementById("contact-div").style.display = "block";
        }, 200);

        setTimeout(function() {
            document.getElementById("home-div").style.display = "none";
            document.getElementById("about-me-div").style.display = "none";
            document.getElementById("portfolio-div").style.display = "none";
        }, 200);

        setTimeout(function() {
            document.getElementById("contact-div").className = "inplace";
        }, 300);
        content = "contact";
    }

};