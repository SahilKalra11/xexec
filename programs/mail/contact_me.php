<?php
require_once('class.phpmailer.php');
	require_once('class.smtp.php');

$firstname 		= strip_tags(htmlspecialchars($_POST['firstname']));
$lastname 		= strip_tags(htmlspecialchars($_POST['lastname']));
$company 	= strip_tags(htmlspecialchars($_POST['company']));
$jobtitle 		= strip_tags(htmlspecialchars($_POST['jobtitle']));
$employees 		= strip_tags(htmlspecialchars($_POST['employees']));
$phonenumber 	= strip_tags(htmlspecialchars($_POST['phonenumber']));
$email 			= strip_tags(htmlspecialchars($_POST['email']));

$email_body = "You have received a new message from your website contact form.<br><br>"."Here are the details:<br><br>
First Name: $firstname<br>
Surname: $lastname<br>
Company Name: $company<br>
Job Title: $jobtitle<br>
Email: $email<br>
Phone: $phonenumber<br>
Employees: $employees";

	$mail = new PHPmailer();
$mail -> From 	= 'no-reply@xexec.com';
$mail -> FromName = 'XEXEC US';
$mail -> Subject = "XEXEC US - Contact Enquiry Form:  $firstname";
$mail -> WordWrap = 80; 
$mail -> AddAddress('lewis.worlidge@xexec.com');
//$mail -> AddAddress($cbemail);
$mail -> AddAddress("nick@nowdesign.co.uk");
$mail -> IsHTML(true);
$mail -> Body = $email_body;
if($mail -> Send()){
	return true;  
}

	
	




     
?>
