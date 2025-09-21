<?php

	
// Check for empty fields
if(empty($_POST['firstname'])      ||
empty($_POST['companyname'])      ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   

$firstname = strip_tags(htmlspecialchars($_POST['firstname']));
$companyname = strip_tags(htmlspecialchars($_POST['companyname']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$ebook = strip_tags(htmlspecialchars($_POST['ebook']));
   

$email_subject = "XEXEC US - Request for FREE - eBook";
$email_body = "You have received a request for a FREE e-Book from your website contact form.\n\n"."Here are the details:\n\n
Name: $firstname\n\n
Company Name: $companyname\n\n
Email: $email\n\n
eBook: $ebook";


$mail = new PHPmailer();
$mail -> From 	= 'no-reply@xexec.com';
$mail -> FromName = 'XEXEC US';
$mail -> Subject = "XEXEC US - Request for eBook:  $firstname";
$mail -> WordWrap = 80; 
$mail -> AddAddress("nick@nowdesign.co.uk");
$mail -> IsHTML(true);
$mail -> Body = $email_body;
if($mail -> Send()){
	return true;  
}

        
?>
