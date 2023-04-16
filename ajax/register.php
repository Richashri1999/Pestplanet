<?php
	require_once("../class/project.php");

	//pre($_POST);

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phoneno = $_POST["phoneno"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	if(val_alphaspace($name,"2,50") == false)
		echo "Please enter name";
	else
		if(val_email($email) == false)
			echo "Please enter proper emailid";
		else
			if(val_num($phoneno, "10") == false)
				echo "Please enter proper phone number";
				else
					if(val_alphanum($username,"3,50") == false)
						echo "Please enter proper username";
					else
						if(!(strlen(trim($password))>= 8 && strlen(trim($password))<= 16))
							echo "Please select password 8 to 16 character wide";
					else
						if($password != $cpassword)
							echo "Password does not match";
						else
						{
							// echo "Save in db";

							$rows = $objproject->select("count(*) AS flag", "usertb", "username='$username'");

							// pre($rows);
							$rows = json_decode($rows, true);
							// pre($rows);
							$row = $rows[0];
							// pre($row);
							$count = $row['flag'];

							if($count == 1)
								echo "Please select another username";
							else
								{

									$password = sha1($password);
									//generate message digest of fixed len for all password
									
									$objproject->insert("usertb", "name,email,phoneno,username,password", "'$name','$email','$phoneno','$username','$password'");
								
									echo "Registered Successfully";
								}
						}
?>