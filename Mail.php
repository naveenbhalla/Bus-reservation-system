<?php
	$message = "Your message including any html";

	// Include the PEAR classes
	include('Mail.php');
	include('Mail/mime.php');

	// Constructing the email
	$sender = "me@domain.com";
	$recipient = "somebody@home.com";
	$subject = "Information requested";
	// smtp mail server - get from your hosts
	$host = "mail.server.com";
	$username = "me@domain.com";
	// Sender email address password
	$password = "123456";
	$crlf = "\
	";
	$headers = array(
		'From'          => $sender,
		'Return-Path'   => $sender,
		'Subject'       => $subject
		);

	// Creating the Mime message
	$mime = new Mail_mime($crlf);

	// Setting the body of the email
	$mime->setTXTBody($text);
	$mime->setHTMLBody($message);
	$body = $mime->get();
	$headers = $mime->headers($headers);

	// Setup the SMTP part
	$smtp = Mail::factory('smtp',
	   array ('host' => $host,
	    'auth' => true,
	    'username' => $username,
	    'password' => $password));

	// Send the email via STMP	
	$mail = $smtp->send($recipient, $headers, $body);
	}
?>