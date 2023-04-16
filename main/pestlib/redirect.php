<?php session_start();

	$username = $_SESSION["username"];
	
	if($username == "")
		header("location: ../index.php");
	else
		header("location: ../user/service.php");
	?>