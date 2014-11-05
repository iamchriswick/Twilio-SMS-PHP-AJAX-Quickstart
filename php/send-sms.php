<?php
ini_set("display_errors", 1);
error_reporting(E_ALL^E_NOTICE|E_STRICT);

header("content-type: text/javascript");
header("Access-Control-Allow-Origin: *");
header("content-type: Access-Control-Allow-Origin: *");
header("content-type: Access-Control-Allow-Methods: GET");
header("content-type: Access-Control-Allow-Methods: POST");

// Step 3.2: Include ChromePhp
include '../vendor/chromephp/ChromePhp.php';

// Step 4.2: Require the Twilio-PHP library
require "../vendor/twilio/twilio-php/Services/Twilio.php";

// Step 5.1: Set our AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$AuthToken = "YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY";

// Step 5.2: Your Twilio number
$twilioFromNumber = "YYY-YYY-YYYY";// change the 'From' number below to be a valid Twilio number

// Instantiate a new Twilio Rest Client
$client = new Services_Twilio($AccountSid, $AuthToken);

// Get JSON variables sendt via AJAX
$number = (string) $_POST['number'];
$smsContent = (string) $_POST['smsContent'];

try {
	$sms = $client->account->messages->sendMessage(
		"$twilioFromNumber",
		"$number", // the number we are sending to - Any phone number
		"$smsContent $dealURL"// the sms body
	);
}

// Step 6: Validate
 catch (Exception $e) {
	ChromePhp::group("Twilio response:");
	ChromePhp::error("Error: " . $e->getMessage());
	ChromePhp::groupEnd();
	echo "Error: " . $e->getMessage();
	die();
}
ChromePhp::group("Twilio response:");
ChromePhp::info("Success! An SMS with the following content was sent to " . $number . ": " . $smsContent . " " . $dealURL . ".");
ChromePhp::groupEnd();
echo "Success! An SMS with the following content was sent to " . $number . ": " . $smsContent . " " . $dealURL . ".";
?>
