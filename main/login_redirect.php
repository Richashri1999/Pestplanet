<?php
  session_start();
  $username=$_SESSION["username"];

  if ($username=="admin") 
  {
  	header("location: admin/index.php");

  }
  else
  {
  	header("location: user/service.php");
  }
?>