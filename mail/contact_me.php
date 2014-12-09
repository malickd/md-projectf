<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'malickd@stu.aii.edu'; // Email address where the form will send a message to
$email_subject = "From: $name, via Mockup Product Webpage Contact Form";
$email_body = "Message details:\n\n"."Name: $name\nEmail: $email_address\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@nimbaprodcut.com\n"; // This is the email address the generated message will be from, something like noreply@yourdomain.com
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>