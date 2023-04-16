<?php
require_once "../class/project.php";
require_once "../assets/thirdparty/test.php";


// pre($_POST);
$agentnm=$_POST['agennm'];
echo $agentnm;
 function update($table, $collist, $condition)
    {
        $sql= "update $table set $collist where $condition";
        return $this->conn->query($sql);
    }

    $objproject->update("ordertb","status='confirm'","1=1");
    $objproject->update("orderdetails","pestcontrolagent='$agentnm'","1=1");



$rows=$objproject->select("*","orderdetails od,ordertb o","1=1");
$rows=json_decode($rows,true);
// pre($rows);



    $srno=0;
$usernm=$rows[0]['username'];
 $userdata = $objproject->select("*", "usertb", "username='$usernm'");
  $userdata = json_decode($userdata, true);
  // pre($userdata);  
  $user = $userdata[0];
// pre($user);
// return;


      $to = $user['email'];
  $subject = "PestAgent Name along with Comfirmation of PestControlService ";

  


  $body="<center><h2>Pest Control Service</h2><hr>Our Pest-Agent Will reach On Your Declred date and time<br><br><h4>Order Summary</h4>
     <table>
     <tr>
     <th>Sr no.</th>
     <th>Service Name</th>
     <th>Service Cost</th>
     <th>Timeframe</th>
     <th>housetype</th>
     <th>Pest-Agent</th>

     </tr>";
     foreach ($rows as $row)
     {
      $srno=$srno+1;
      $snm=$row['sname'];
      $scost=$row['scost'];
      $tymfrm=$row['tymfrm'];
      $housetype=$row['housetype'];
      $agentname=$row['pestcontrolagent'];
      $totalbill=$row['totalcost'];
      $date=$row['date'];
      $tym=$row['time'];
     $body=$body.
     "<tr>
     <td>$srno</td>
     <td>$snm</td>
     <td>$scost Rs</td>
     <td>$tymfrm</td>
     <td>$housetype</td>
     <td>$agentname</td>

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
     <br><br><hr>

     Your Order For Pest Control Service is Confirmed Now.
     Thank You For Booking Our PestService  :)<br><br>

     <hr>
      </center>";

  mysendmail($to, $subject, $body);

?>