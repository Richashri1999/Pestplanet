<?php
	require_once("../class/project.php");

	// pre($_POST);
	// return;

	$name = $_POST["Name"];
	$email = $_POST["email"];
	$phoneno = $_POST["phoneno"];
	// $username = $_POST["username"];
	$Services = $_POST["Service-specialist"];
	$pincode = $_POST["pincode"];

	if(val_alphaspace($name,"2,50") == false)
		echo "Please enter name";
	else
		if(val_email($email) == false)
			echo "Please enter proper emailid";
		else
			if(val_num($phoneno, "10") == false)
				echo "Please enter proper phone number";
				else
					if(val_alphanum($Services,"3,100") == false)
						echo "Please enter proper ServiceName";
					
					else
						if(val_num($pincode, "6") == false)
				echo "Please enter proper Area-Pincode";
						else
						{
							// echo "Save in db";

							$rows = $objproject->select("count(*) AS flag", "pestcontrolagent", "name='$name'");

							// pre($rows);
							$rows = json_decode($rows, true);
							// pre($rows);
							$row = $rows[0];
							// pre($row);
							$count = $row['flag'];

							if($count == 1)
								echo "Pest-Agent already exist!!";
							else
								{

									// $password = sha1($password);
									//generate message digest of fixed len for all password
									

									$objproject->insert("pestcontrolagent", "name,email,phoneno,areapincode,servicespecialist", "'$name','$email','$phoneno','$pincode','$Services'");
								
									echo "Pest-agent Added Successfully";
								}
						}
?>