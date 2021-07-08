<?php 

$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){

	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

	$firstName = $_POST["First_name"];
	$lastName = $_POST["Last_name"];
	$email = $_POST["Email_address"];
	$telephone = $_POST["Tel_number"];
	$address1 = $_POST["Addr_1"];
	$address2 = $_POST["Addr_2"];
	$town = $_POST["Town"];
	$county = $_POST["County"];
	$postcode = $_POST["Postcode"];
	$country = $_POST["country"];
	$description = $_POST["Description"];
	$file = $_POST["file"];


$to = "digitalgrads@digitalgrads.com";
$body ="";

$body .= "From: ".$firstName. "\r\n";
$body .= "email: ".$email. "\r\n";
$body .= "telephone: ".$telephone. "\r\n";
$body .= "address: ".$address1. "\r\n";
$body .= "country: ".$country. "\r\n";
$body .= "description: ".$description. "\r\n";
$body .= "file: ".$file. "\r\n";

mail($to, $subject, $body);

$message_sent = true;
}
}
 ?>

