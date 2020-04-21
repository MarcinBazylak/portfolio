var messageField = document.getElementById("message");
   function showAlert(data) {

      setTimeout(function(){

         messageField.className = "open";
         if(data == "success") {
            messageField.innerHTML = '<div class="confirm">Wiadomość została wysłana. Dziękuję.</div>';
         }else if(data == "wrongtoken") {
            messageField.innerHTML = '<div class="red">Wprowadziłeś niepoprawny kod. Wiadomość nie została wysłana</div>';
         }else {
            messageField.innerHTML = '<div class="red">Wystąpił nieoczekiwany błąd. Wiadomość nie została wysłana<br>'+data+'</div>';
         }
         }, 500);

         setTimeout(function(){
            messageField.className = "fade-in";
         }, 1000);

         setTimeout(function(){
            messageField.className = "fade-out";
         }, 3000);

         setTimeout(function(){
            messageField.className = "close";
         }, 3200);
      }