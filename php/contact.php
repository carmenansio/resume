<?php
	
	$name 		= $_GET['name'];
    $email	 	= $_GET['email'];
    $subject 	= $_GET['subject'];
	$message 	= $_GET['message'];

	$to 			= "carmenansio@gmail.com";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $name;
    $body .= "\r\n Email: " . $email;
    $body .= "\r\n Subject: " . $subject;
	$body .= "\r\n Message: " . $message;

    mail($to, $subject, $body);
?>
