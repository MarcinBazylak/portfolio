<?php
session_start();
// $link = mysqli_connect("localhost", "motolux", "Bzyku130579", "motolux");
// $link->set_charset("utf8");

// $query = "INSERT INTO subscriptions VALUES ('', '$_POST[email]', '$_POST[name] $_POST[text]', '', '')";
// $go = mysqli_query($link, $query);
   
if ($_POST['kod']==$_SESSION['captcha']) {
   $name = strip_tags($_POST['name']);
   $name = addslashes($name);
   $email = strip_tags($_POST['email']);
   $email = addslashes($email);
   $enquiry = strip_tags($_POST['text']);
   $enquiry = addslashes($enquiry);
   
   $adresat = "marcin@marcinbazylak.com";
   
   $temat = $name." wysłał wiadomość ze strony marcinbazylak.com.";
   $temat = "=?UTF-8?B?".base64_encode($temat)."?=";
   
   $reply = $email;
   $wiadomosc = $enquiry;
   $headers = 'From: Formularz strony marcinbazylak.com <marcin@marcinbazylak.com>' . "\r\n" . 'Reply-To: '. $reply . '' . "\r\n" . 'Content-Type: text/plain; charset=UTF-8';
   mail($adresat, $temat, $wiadomosc, $headers);
   echo"success";
} else {
   echo"wrongtoken";
}

?>