<?php
 require_once "../class/project.php";
 require_once "../assets/thirdparty/test.php";

 // pre($_POST);
 // return;



 $date=$_POST['date'];
 $tym=$_POST['time'];
 session_start();
 $usernm=$_SESSION['username'];
 $_SESSION['date']=$date;
 $_SESSION['time']=$tym;
 // echo $date;

 $rows=$objproject->select("*","carttb,servicetb","servicetb.id = carttb.sid and username='$usernm'");
 $rows=json_decode($rows,true);

 // pre($rows);

 $totalbill=0;

 foreach($rows as $row)
 {
 	$totalbill=$totalbill+$row['finalprice'];
 }
 // return;

//  // echo $row;


// $objproject->insert("ordertb","username,totalcost,date,time,status","'$usernm','$totalbill','$date','$tym','pending'");

// $oid=1;
// foreach($rows as $row)
		

// {
// 	$scost=$row['finalprice'];
// 	$tymfrm=$row['tymfrm'];
// 	$housetype=$row['housetype'];
// 	$sname=$row['sname'];
//     $objproject->insert("orderdetails","oid,sname,scost,tymfrm,housetype","'$oid','$sname','$scost','$tymfrm','$housetype'");

// }


//mail part

    
	$userdata = $objproject->select("email", "usertb", "username='$usernm'");
	$userdata = json_decode($userdata, true);
	$user = $userdata[0];	

	

    $otp1 = random_int(100000, 999999);
	$_SESSION['otp1'] = $otp1;

    $srno=0;
	$to = $user['email'];
	$subject = "This is the Confirmation for PestControlService before Payment.";

	


	$body="<center><h2>Pest Control Service</h2><hr>This is the summary report of pestservice that you Wanted to book....<br><br><h4>Order Summary</h4>
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
	   <br><br><hr>To Proceed Payment Use the given OTP.<br><br>

	   <b>OTP ---</b>$otp1;
	   <hr>
	    </center>";

	mysendmail($to, $subject, $body);


?>