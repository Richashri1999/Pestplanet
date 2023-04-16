<?php
  require_once "../class/project.php";
  // pre($_POST)
  $category=$_POST['txtcategory'];
  // echo "$category";
  if(val_alphaspace($category, "2,50")==false)
  {
  	echo "Plaese enter proper category";
  }
  else
  {
  	$rows=$objproject->select("count(*) as flag","servicecategorytb","catname='$category'");
  	// pre($rows);
  	$rows=json_decode($rows,true);
  	// pre($rows);
  	$row=$rows[0];
  	// pre($row);
  	$count=$row['flag'];
  	// echo $count;
  	if($count==1)
  	{
  		echo "Category already exist!!";
  	}
  	else
  	{
  		// echo 1;
  		$objproject->insert("servicecategorytb","catname","'$category'");
  		echo "Category Added  :) ";
  	}
  }

?>