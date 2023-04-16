<?php
require_once "../../../class/project.php";
session_start();
 $usernm=$_SESSION['username'];
// $usernm="richuser";	


 $rows=$objproject->select("*","carttb,servicetb","servicetb.id = carttb.sid and username='$usernm'");
 $rows=json_decode($rows,true);

 // pre($rows);

 $totalbill=0;

 foreach($rows as $row)
 {
 	$totalbill=$totalbill+$row['finalprice'];
 }

 $userdata = $objproject->select("*", "usertb", "username='$usernm'");
	$userdata = json_decode($userdata, true);
	// pre($userdata);	
	$user = $userdata[0];
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#container
    {
      width: 60%;
      margin: 30px auto;
      box-shadow:10px 10px 10px 10px lightblue;
      padding: 30px;
      text-align: center;
    }
	</style>
</head>
<body>
	<div id="container">
 <div>

 	 <h1 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">Payment Gateway for pest control service</h1>
  <hr>
  
  <!-- <h3>Fill the form and submit it for starting the transaction...</h3> -->
 </div>

<div>
<table>
 <form name="postForm" action="form_process.php" method="POST" >
 <tr><td>txnid</td><td><input type="text" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
 <tr><td>amount</td><td><input type="text" name="amount" value="<?php echo $totalbill ?>" /></td></tr>
 <tr><td>username</td><td><input type="text" name="firstname" value="<?php echo $rows[0]['username'] ?>" /></td></tr>
 <tr><td>email</td><td><input type="text" name="email" value="<?php echo $user['email']; ?>" /></td></tr>
 <tr><td>phone</td><td><input type="text" name="phone" value="<?php echo $user['phoneno']; ?>" /></td></tr>
 <tr><td>Service Name</td><td><input type="text" name="productinfo" value="<?php echo $rows[0]['sname']; ?>" /></td></tr>
 <tr><td>success url</td><td><input type="hidden" name="surl" value="http://localhost:8000/PAYMENT_RICH/success.php" size="64" /></td></tr>
 <tr><td>failure url</td><td><input type="hidden" name="furl" value="http://localhost:8000/PAYMENT_RICH/fail.php" size="64" /></td></tr>
 <br><br>
 <tr><td><input type="submit" /></td><td><input type="reset" /></td></tr>
 </form>
</table>
</div>
</body>

</html>


