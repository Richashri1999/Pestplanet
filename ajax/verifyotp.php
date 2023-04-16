<?php
	require_once '../class/project.php';

	// pre($_POST);

	session_start();

	$otp = $_POST["otp"];

	if(val_num($otp, "6") == false)
		echo "Please enter proper otp";
	else
	{
		$actualotp = $_SESSION["otp"];
		if($otp == $actualotp)
		{
			echo "verfied successfully!!!";
           // $_SESSION['nostatusverify'] = "verified";
			
		}
		else
			echo "OTP doesnot match";
	}

?>