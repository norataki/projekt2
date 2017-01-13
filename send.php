<?php 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];



	$to = "nora.arhzane@student.kyh.se";
	$subject = "Kontakt förfrågan";
	$body = "This is an automated message. Please don't reply to this email. \n\n $request";

	mail ($to, $subject, $body);

	echo "Meddelande skickat! <a href='kontakt.php'>Klicka här</a> för att skicka ett till meddelande";

?>