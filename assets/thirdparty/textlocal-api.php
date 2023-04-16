
<?php

	function sendSMS($phoneno, $msg)
	{
		// echo "hiii";

	$apiKey = urlencode('qQ/sbpQ5Lws-oo76mpOhUNoJSmTomCnIW9m0oKXxqB');
	// 6SfdYJGJ4fs-5pm6LRCo1vYUDHo5T66th9KVk6RZn1
	// 6SfdYJGJ4fs-xrQTM7jqWAcBvGf3PH2KCUdAVar61F
	// ohJcJ63QrqA-cmlszgAVLyPaF0YGnxUS7qc4XsflsD
		// qQ/sbpQ5Lws-oo76mpOhUNoJSmTomCnIW9m0oKXxqB
	
	// Message details
	$numbers = array($phoneno);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($msg);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	// echo $response;

	}
?>

<!-- 

Card Type: Visa

Card Name: Test

Card Number: 4012001037141112

Expiry Date : 05/20

CVV : 123

Card Type: Master

Card Name: Test

Card Number: 5123456789012346

Expiry Date : 05/20

CVV : 123 -->