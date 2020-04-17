var burgerBtn = document.getElementById("input-toggle");
burgerBtn.onclick = function() {
    if(burgerBtn.checked == true) {
      makeBurgerCrossed()
    } else {
      makeBurgerNormal();
    }
   };

   function  makeBurgerNormal() {
      document.getElementById("sp-one").className = "";
      document.getElementById("sp-two").className = "";
      document.getElementById("sp-three").className = "";
   }

   function makeBurgerCrossed() {
      document.getElementById("sp-one").className = "sp-one-open";
      document.getElementById("sp-three").className = "sp-three-open";
      document.getElementById("sp-two").className = "sp-two-open";
   }