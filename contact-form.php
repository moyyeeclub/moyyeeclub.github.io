<?php
	$name = $_POST[‘name’];
	$visitor_email = $_POST[‘email’];
	$message = $_POST[‘message’];

	$email_subject = “MYKFC Inquiry”;

	$email_body = “Name: $name.\n”.
				“Email: $visitor_email.\n”.
					“Message: $message.\n”;
	
	$to = “columbia@moyyee.club”;

	$headers = “Reply-To: $visitor_email \r\n”;

	mail($to,$email_subject,$email_body,$headers);

	header(“Location: index.html”);

?>
