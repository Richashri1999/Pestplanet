<!DOCTYPE html>
<html>
<head>

  <style type="text/css">
    
    #Container
    {
      width: 70%;
      margin: 30px auto;
      padding: 10px;
      /*border: 1px solid;*/
      box-shadow:10px 10px 10px 10px lightblue;
    }
  </style>
</head>
<body>
<div id="Container">


 <div>
  <br>
  <h1 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">Payment Success</h1>
  <hr>
 </div>

  <div>
  <?php 
require_once "../../../class/project.php";
session_start();
 $usernm=$_SESSION['username'];
// $usernm="richuser";  


 $rows=$objproject->select("*","carttb,servicetb","servicetb.id = carttb.sid and username='$usernm'");
 $rows=json_decode($rows,true);

 // pre($rows);

 $totalbill=0;
If($rows==0)
{
  echo"order has been placed!!<br>  CHECK your email";
  return;
}
 foreach($rows as $row)
 {
  $totalbill=$totalbill+$row['finalprice'];
 }

 $userdata = $objproject->select("*", "usertb", "username='$usernm'");
  $userdata = json_decode($userdata, true);
  // pre($userdata);  
  $user = $userdata[0];





 $firstname =$_POST['firstname'];
 $email =$_POST['email'];
 $phone =$_POST['phone'];
 $amount=$totalbill;
 $productinfo =$_POST['productinfo'];

  

   if(isset($_POST['status'])){
    if($_POST['status']=="success"){
     echo "<center><p><h3>Payment Done Successfully.</h3></p>";
     echo "<p><h3>Txn Id: ".$_POST['txnid']."</h3></p>";
     echo "<p><h3>Name: ".$firstname."</h3></p>";
     echo "<p><h3>Email: ".$email."</h3></p>";
     echo "<p><h3>Amount: ".$amount." Rs.</h3></p>";
     echo "<p><h3>Phone No: ".$phone."</h3></p>";
     echo "<p><h3>Product Info: ".$productinfo."</h3></p>";
     echo "<p><h3>encryptedPaymentId: ".$_POST['encryptedPaymentId']."</h3></p>";
     // echo "HIII";
    }
   }

    ?><br>
    <hr><h2><font color="red">
   Thanks For Payment. After Payment Confirmation Your Service Activated.<br> If Your Service Not Activated in your given time. Please Send Mail....</font></h2>
<br>
<br>

 </center>
 </div>

</div>
</body>

</html>

<?php
 require_once "../../../class/project.php";
 require_once "../test.php";

 // pre($_POST); // return;



 // session_start();
 $usernm=$_SESSION['username'];
 // echo $usernm;
$date=$_SESSION['date'];
$tym=$_SESSION['time'];
 $rows=$objproject->select("*","carttb,servicetb","servicetb.id = carttb.sid and username='$usernm'");
 $rows=json_decode($rows,true);

 // pre($rows);

 $totalbill=0;

 foreach($rows as $row)
 {
  $totalbill=$totalbill+$row['finalprice'];
 }
 // return;

 // echo $row;


$objproject->insert("ordertb","username,totalcost,date,time,status","'$usernm','$totalbill','$date','$tym','pending'");

$oid=$objproject->select("*","ordertb","username='$usernm'");
$oid=json_decode($oid,true);
$oid=$oid[0]['id'];
// pre($rows);
$oid=1;

foreach($rows as $row)
    

{
 $scost=$row['finalprice'];
 $tymfrm=$row['tymfrm'];
 $housetype=$row['housetype'];
 $sname=$row['sname'];
    $objproject->insert("orderdetails","oid,sname,scost,tymfrm,housetype","'$oid','$sname','$scost','$tymfrm','$housetype'");

}

 // function delete($table,$condition)
 //    {
 //        $sql= "delete from $table where $condition";
 //        return $this->conn->query($sql);
 //    }
// echo "$usernm";
// $rows=$objproject->delete("carttb","username= '$usernm");
$objproject->delete("carttb", "username = '$usernm'");
// echo $rows;
// echo "hiii";
// return;

//mail part

    
  $userdata = $objproject->select("email", "usertb", "username='$usernm'");
  $userdata = json_decode($userdata, true);
  $user = $userdata[0]; 

  

   

    $srno=0;
  $to = $user['email'];
  $subject = "Order summary or Invoice for PestControlService after Payment.";

  


  $body="<center><h2>Pest Control Service</h2><hr>This is the summary report or Invoice of pestservice that you have booked<br><br><h4>Order Summary</h4>
     <table>
     <tr>
     <th>Sr no.</th>
     <th>Service Name</th>
     <th>Service Cost</th>
     <th>Timeframe</th>
     <th>housetype</th>
     </tr>";
     foreach ($rows as $row)
     {
      $srno=$srno+1;
      $snm=$row['sname'];
      $scost=$row['finalprice'];
      $tymfrm=$row['tymfrm'];
      $housetype=$row['housetype'];
     $body=$body.
     "<tr>
     <td>$srno</td>
     <td>$snm</td>
     <td>$scost Rs</td>
     <td>$tymfrm</td>
     <td>$housetype</td>
     </tr>";
     }
     $body=$body.
     "</table>
     <br>
     <br>
     <br>
       <b>Total service :</b> $srno <br>
       <b>Total Cost :</b> $totalbill Rs. <br>
       <b>Date :</b> $date <br>
       <b>Time :</b> $tym
     <br><br><hr>Thank You For Booking Our PestService  :)<br><br>

     <hr>
      </center>";

  mysendmail($to, $subject, $body);


?>
?>
