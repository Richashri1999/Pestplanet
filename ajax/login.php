<?php
	require_once("../class/project.php");
	// pre($_POST);
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if(val_alphanum($username,"3,50") == false)
		echo "Please enter proper username";
	else
		if(!(strlen(trim($password))>= 8 && strlen(trim($password))<= 16))
			echo "Please enter proper password";
		else
		{
			$password = sha1($password);
			
			$rows = $objproject->select("count(*) AS flag", "usertb", "username='$username' and password = '$password'");

							// pre($rows);

			$rows = json_decode($rows, true);
			// pre($rows);
			$row = $rows[0];
			// pre($row);
			// echo $row['flag'];
			// return;
			$count = $row['flag'];

			if($count == 1)
			{
				session_start();
				$_SESSION['username'] = $username;
				echo "1";
			}
			else
			{
				echo "Incorrect username or password";
			}
						}
?>