<?php 


include "./mailSender.php";

$mail = new SendMail();

$mail->sendMail("thaetun99@gmail.com","Mail Test","reply mail text");


?>