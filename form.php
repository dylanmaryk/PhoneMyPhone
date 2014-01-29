<?php
	include_once "database.php";
	require_once "twilio-php-master/Services/Twilio.php";

	$sid = "YOUR_TWILIO_ACCOUNT_SID";
	$token = "YOUR_TWILIO_AUTH_TOKEN";

	$client = new Services_Twilio($sid, $token);

	$number = $_POST["fieldNumber"];

	$call = $client->account->calls->create(
		"YOUR_TWILIO_NUMBER",
		$number,
		"URL_TO_REQUEST.XML"
	);
?>
