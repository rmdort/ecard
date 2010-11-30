<?php

require("phpmailer/class.phpmailer.php");

// DB Connect
include("db.php");


// Post Variable

$FacebookUID = $_POST['FacebookUID'];
$FacebookUsername = $_POST['FacebookUsername'];
$FacebookEmail = $_POST['FacebookEmail'];
$CardID = $_POST['CardID'];
$ImageURL = $_POST['ImageURL'];
$Message = $_POST['Message'];
$RecipientEmails = $_POST['RecipientEmails'];

$NoFacebookEmail = $_POST['NoFacebookEmail'];
$NoFacebookName = $_POST['NoFacebookName'];

// Common Variables 

$emailsubject = "This is a sample subject!"; // Subject



// Send EDM if the Facebook UID is Empty

if ($FacebookUID == null){
	
	//Add to  Database
	
	
	
	mysql_close($conn);	
	
	
	// Email Recipient
	
	$emailsubject = "This is a sample subject!";
	$emailbody = file_get_contents("edm.html");
	
	$mail = new PHPMailer();
	$mail->Mailer = "smtp";
	$mail->Port = 465;
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com"; // SMTP server
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->SMTPKeepAlive = true;
	$mail->Username = "rmdort@gmail.com"; // SMTP username
	$mail->Password = ""; // SMTP password
	$webmaster_email = "rmdort@gmail.com"; //Reply to this email ID
	$mail->AddReplyTo($webmaster_email,"Webmaster"); // Reply To

	$mail->From = $webmaster_email;
	$mail->FromName = "Germs Ecard Emailer";
	
	$email=$RecipientEmails[0]; // Recipients Email
	$name="name"; // Recipient's name
	$mail->AddAddress($email,$name);
	
	$mail->Subject = $emailsubject; 
	$mail->IsHTML(true);
	$mail->Body = file_get_contents("edm.html");
	
	if(!$mail->Send())
	{
	echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
	echo "Message has been sent";
	}
	
	
	
}

// Else Send Facebook Email to Inbox
else {
	
	
	
}


?>