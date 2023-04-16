<?php
  require_once "../class/project.php";
  // pre($_POST);
  // pre($_FILES);

  $servicenm=$_POST["txtservice"];
  $categoryid=$_POST["ddlcategory"];
  $servicedesc=$_POST["txtdescription"];

  // echo "$servicenm";
  // echo "$categoryid";
  // echo "$servicedesc";
    $filename = "../assets/images/" . time() . "_" . $_FILES['image']['name'];
   
	if(val_alphanumspace($servicenm, "2,50") == false)
		echo "Please enter proper servicename";
	else
		if($categoryid == -1)
			echo "Please select service category";
	else
		if(strlen($servicedesc) < 5)
			echo "Please enter proper description";
	else
	{
        move_uploaded_file($_FILES['image']['tmp_name'],  $filename);
        

	    $filename = '../' . $filename;
	    // echo "$filename";


		$result=$objproject->insert("servicetb","sname,catid,image,description","'$servicenm','$categoryid','$filename','$servicedesc'");

			echo "Service added Successfully";
		// echo $result;

    }

?>