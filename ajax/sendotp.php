<?php
	require_once '../class/project.php';

	require_once '../assets/thirdparty/textlocal-api.php';
	// echo "<br><br><br><br><br><br><br><br><br>";
	// pre($_POST);
	session_start();
    $phoneno=$_POST['phoneno'];
	$otp = random_int(100000, 999999);
	$_SESSION["otp"] = $otp;

	$username = $_SESSION["username"];

	$userdata = $objproject->select("phoneno", "usertb", "username='$username'");

	$userdata = json_decode($userdata, true);
	$user = $userdata[0];
	// $phoneno = $user['phoneno'];

	sendSMS($phoneno, "The Pest Control Service... OTP: $otp");
	// pre($userdata);
	echo "OTP is sent to your registered phone number $phoneno $otp" ;
?>