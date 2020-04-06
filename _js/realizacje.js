var portfolioClick = document.getElementById("portfolio");
portfolioClick.onclick = function() {
    document.getElementById("input-toggle").checked = false;

    if (content != "portfolio") {
        document.getElementById("home-div").className = "";
        document.getElementById("about-me-div").className = "";
        document.getElementById("contact-div").className = "";

        setTimeout(function() {
            document.getElementById("portfolio-div").style.opacity = "1";
            document.getElementById("portfolio-div").style.display = "block";
        }, 200);

        setTimeout(function() {
            document.getElementById("home-div").style.display = "none";
            document.getElementById("about-me-div").style.display = "none";
            document.getElementById("contact-div").style.display = "none";
        }, 200);

        setTimeout(function() {
            document.getElementById("portfolio-div").className = "inplace";
        }, 300);
        content = "portfolio";
    }

};

var portfolioClickBtn = document.getElementById("realizacjeBtn");
portfolioClickBtn.onclick = function() {
    document.getElementById("input-toggle").checked = false;

    if (content != "portfolio") {
        document.getElementById("home-div").className = "";
        document.getElementById("portfolio-div").className = "";
        document.getElementById("contact-div").className = "";

        setTimeout(function() {
            document.getElementById("portfolio-div").style.opacity = "1";
            document.getElementById("portfolio-div").style.display = "block";
        }, 200);

        setTimeout(function() {
            document.getElementById("home-div").style.display = "none";
            document.getElementById("about-me-div").style.display = "none";
            document.getElementById("contact-div").style.display = "none";
        }, 200);

        setTimeout(function() {
            document.getElementById("portfolio-div").className = "inplace";
        }, 300);
        content = "portfolio";
    }

};