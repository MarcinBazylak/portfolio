var homeClick = document.getElementById("home");
homeClick.onclick = function() {
    document.getElementById("input-toggle").checked = false;

    if (content != "home") {
        document.getElementById("about-me-div").className = "";
        document.getElementById("portfolio-div").className = "";
        document.getElementById("contact-div").className = "";

        setTimeout(function() {
            document.getElementById("home-div").style.opacity = "1";
            document.getElementById("home-div").style.display = "block";
        }, 200);

        setTimeout(function() {
            document.getElementById("about-me-div").style.display = "none";
            document.getElementById("portfolio-div").style.display = "none";
            document.getElementById("contact-div").style.display = "none";
        }, 200);

        setTimeout(function() {
            document.getElementById("home-div").className = "inplace";
        }, 300);
        content = "home";
    }

};