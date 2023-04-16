<?php
  require_once "../class/project.php";
  // pre($_POST);
  
  $sid=$_POST['ddlserviceid'];
  $tymfrm=$_POST['txttymfrm'];
  $cost=$_POST['txtprice'];
  // echo "$sid";
  // echo "$tymfrm";
  // echo "$cost"; 


  if ($sid==-1) {
  	echo "Please Select Any Service!";
  }
  else if ($tymfrm=='--Select timeframe--') {
  	echo "Select any tymfrm!";
  }
  else if ($cost==0) {
  	echo "Enter cost for the service!";
  }
  else
  {
  	// echo "1";
   
  	$objproject->insert("servicepricetb","sid,price,tymfrm","'$sid','$cost','$tymfrm'");
  	echo "Inserted successfully  :)";
  }
?>