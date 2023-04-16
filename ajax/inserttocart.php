<?php
  require_once "../class/project.php";
  // echo "<br><br><br><br>";
  session_start();
  // pre($_POST);
  // return;
  $username=$_SESSION['username'];
  $tymfrm=$_POST['tymfrm'];
  $housetype=$_POST['housetype'];
  $finalprice=$_POST['finalprice'];
  $price=$_POST['price'];
  $discount=$_POST['discount'];
  $sname=$_POST['sname'];

  $rows=$objproject->select("*","servicetb","sname='$sname'");
  $rows=json_decode($rows,true);
  // pre($rows);
  $sid=$rows[0]['id'];
  $rows1=$objproject->select("*","carttb","sid='$sid'");
  $rows1=json_decode($rows1,true);
  // pre($rows1);
  // return;

  if($rows1==0)
   {
  // echo $row;

 //    id int Primary Key AUT$usernameO,'$tymfrm','$housetype','','','','',_INCREMENT,
	// username Varchar(50),
	// tymfrm Varchar(101),
	// housetype Varchar(51),
	// price int,
	// finalprice int,
	// discount int,
	// created_at timestamp

  $objproject->insert("carttb","username,sid,tymfrm,housetype,price,finalprice,discount","'$username','$sid','$tymfrm','$housetype','$price','$finalprice','$discount'");

  echo "Serice Will get added to your cart..";
    }

     else
    echo "This Service is already present in the cart..changes will be updated to same service if you continue readding.....";
  $objproject->delete("carttb", "sid = '$sid'");

  $objproject->insert("carttb","username,sid,tymfrm,housetype,price,finalprice,discount","'$username','$sid','$tymfrm','$housetype','$price','$finalprice','$discount'");


?>