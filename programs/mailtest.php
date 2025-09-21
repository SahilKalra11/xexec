<?php 
require_once('mail/class.phpmailer.php');
	require_once('mail/class.smtp.php');
$responderMsg=	"This is a test to check the PHP Mail functionality";
	

$mail = new PHPmailer();
$mail -> From 	= 'testsend@xexec.com';
$mail -> FromName = 'XEXEC US';
$mail -> Subject = 'PHP Mail Test script';
$mail -> WordWrap = 50; 
//$mail -> AddAddress('nick@nowdesign.co.uk');
//$mail -> AddAddress($cbemail);
$mail -> AddAddress("nick@nowdesign.co.uk");
$mail -> IsHTML(true);
$mail -> Body = $responderMsg;
if($mail -> Send()){
	echo "Test email sent";
}



    
?>