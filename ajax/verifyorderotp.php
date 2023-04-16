<?php
	require_once '../class/project.php';

	// pre($_POST);
	// return;
   
	session_start();

	$otp1 = $_POST["givenotp"];

	if(val_num($otp1, "6") == false)
		echo "Please enter proper otp";
	else
	{
		$actualotp = $_SESSION["otp1"];
		if($otp1 == $actualotp)
		{
			echo "OTP matched.Order Condirmation successful!!!";
           // $_SESSION['nostatusverify'] = "verified";
			
		}
		else
			echo "OTP doesnot match.Order will not proceed further  :(";
	}

?>