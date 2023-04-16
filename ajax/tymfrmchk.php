<?php
 require_once "../class/project.php";
 // pre($_POST);
$tymfrm=$_POST['tymfrm'];

$housetype=$_POST['housetype'];
// echo "$tymfrm";
// echo "$housetype";
$condition="tymfrm='$tymfrm'";
// echo "$condition";
$rows=$objproject->select("*","servicepricetb","$condition");
// pre($rows);
$rows=json_decode($rows,true);
// pre($rows);
$row=$rows[0];
// echo "$row";
// pre($row);
$price= $row['price'];
// echo $price;
// if(isset())
$houseno=$housetype[0];
$pricetotal=$price*$houseno;
echo $pricetotal;
?>