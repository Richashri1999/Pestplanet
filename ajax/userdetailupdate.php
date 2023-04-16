<?php
	require_once("../class/project.php");

	// pre($_POST);
	session_start();
	$username = $_SESSION["username"];

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phoneno = $_POST["phoneno"];
	$address = $_POST["address"];
	if(val_alphaspace($name,"2,50") == false)
		echo "Please enter name";
	else
		if(val_email($email) == false)
			echo "Please enter proper emailid";
		else
			if(val_num($phoneno, "10") == false)
				echo "Please enter proper phone number";
			else
				if(strlen(trim($address)) < 10)
					echo "Please enter detailed address";
			
						else
						{
							

									$objproject->update("usertb", "name='$name',email='$email',phoneno='$phoneno',address='$address'","username='$username'");
								
									echo "Upadted Successfully";
						
						}
?>