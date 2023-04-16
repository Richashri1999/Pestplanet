<?php
  require_once "header.php";
?>

<!-- Intro Banner -->
<div class="container-fluid" style="box-shadow: 2px 2px 2px 2px lightgrey;">
  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/bookpest.jpg');height: 480px;background-repeat: no-repeat;margin-top: 75px;background-size: cover;">
  </div>
 </div> 
<!--End Intro Banner -->
<br>
<div class="row" id="myHeader">
    <div class="col-sm-4">
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;color: white; background-image: linear-gradient(to right,  red ,lightblue)">User details</div>
    </div>
    <div class="col-sm-4">
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;color: white; background-image: linear-gradient(to right,	red	,lightblue)">Schedule</div>
    </div>
    <div class="col-sm-4">
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;color: white; background-image: linear-gradient(to right,	red	,lightblue)">Payement</div>
    </div>  
  </div>
  <br>
<!-- middle -->
<div class="container" style="box-shadow: 3px 3px 3px 3px lightgrey;">
	<h3 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;padding-top: 5px;">Order Summary</h3>
	<hr>
    <br>
	<div class="row">
		<div class="col-sm-2">
			<div style="border: 1px solid;padding: 5px;border-radius:10px;width: 95%;text-align: center;color: white; background-image: linear-gradient(to right,	grey	,lightblue);box-shadow: 2px 2px 2px 2px blue;">Sr no.</div>
		</div> 
		<div class="col-sm-2">
			<div style="border: 1px solid;padding: 5px;border-radius: 10px;width: 95%;text-align: center;color: white; background-image: linear-gradient(to right,	grey	,lightblue);box-shadow: 2px 2px 2px 2px blue;">PestImage</div>
		</div>
		<div class="col-sm-2">
			<div style="border: 1px solid;padding: 5px;border-radius: 10px;width: 95%;text-align: center;color: white; background-image: linear-gradient(to right,	grey	,lightblue);box-shadow: 2px 2px 2px 2px blue;">Service</div>
		</div>
		<div class="col-sm-2">
			<div style="border: 1px solid;padding:5px;border-radius: 10px;width: 95%;text-align: center;color: white; background-image: linear-gradient(to right,	grey	,lightblue);box-shadow: 2px 2px 2px 2px blue;">Service Cost(Rs.)</div>
		</div> 
		<div class="col-sm-2">
			<div style="border: 1px solid;padding: 5px;border-radius: 10px;width: 95%;text-align: center;color: white; background-image: linear-gradient(to right,	grey	,lightblue);box-shadow: 2px 2px 2px 2px blue;">Timeframe</div>
		</div> 
		<div class="col-sm-2">
			<div style="border: 1px solid;padding: 5px;border-radius: 10px;width: 95%;text-align: center;color: white; background-image: linear-gradient(to right,	grey	,lightblue);box-shadow: 2px 2px 2px 2px blue;">Housetype</div>
		</div> 
		 
	</div>

<br>
<?php
// session_start();
 $usernm=$_SESSION['username'];
$rows=$objproject->select("*","carttb,servicetb","servicetb.id = carttb.sid and username='$usernm'");
 $rows=json_decode($rows,true);
 // pre($rows);
 $servicno=0;
 $Totalcost=0;
 $srno=0;
 $date=$_SESSION['date'];
 $time=$_SESSION['time'];
foreach($rows as $row)
{
$srno=$srno+1;
$servicno=$servicno+1;
$Totalcost=$Totalcost+$row['finalprice'];
?>
<!-- start -->
<div class="row">
	<div class="col-sm-2">
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: center;"><?php echo $srno; ?></div>
		</div> 
		<div class="col-sm-2">
			<div style="padding: 5px;border-radius: 10px;width: 95%;text-align: center;"><img src="<?php echo $row['image']; ?>" style="width: 70%;height: 90%;box-shadow: 2px 2px 2px 2px lightgrey;" ></div>
		</div>
		<div class="col-sm-2">
			<div style="padding: 5px;border-radius: 10px;width: 95%;text-align: center;"><?php echo $row['sname']; ?></div>
		</div>
		<div class="col-sm-2">
			<div style="padding:5px;border-radius: 10px;width: 95%;text-align: center;"><?php echo $row['finalprice']; ?></div>
		</div> 
		<div class="col-sm-2">
			<div style="padding: 5px;border-radius: 10px;width: 95%;text-align: center;"><?php echo $row['tymfrm']; ?></div>
		</div> 
		<div class="col-sm-2">
			<div style="padding: 5px;border-radius: 10px;width: 95%;text-align: center;"><?php echo $row['housetype']; ?></div>
		</div> 
		 
	</div>

	

<!-- end -->
<?php
}
?>
<hr>

    <br>	
    <br>	
    <center>
    		<div id="totaldisplay" name="totaldisplay" class="row" style="width: 50%;padding: 7px;;box-shadow: 2px 2px 2px 2px blue; background-image: radial-gradient(white,	grey	,lightblue);border-radius: 100px;">
		<div class="col-sm-6">
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: right;"><b>Total Servcies :</b></div>
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: right;"><b>Total Cost :</b></div>
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: right;"><b>Date :</b></div>
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: right;"><b>Time :</b></div>

		
		</div>
         

		<div class="col-sm-6">
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: left;"><?php echo $servicno; ?></div>
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: left;"><?php echo $Totalcost; ?> Rs.</div>
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: left;"><?php echo $date; ?></div>
			<div style="padding: 5px;border-radius:10px;width: 95%;text-align: left;"><?php echo $time; ?></div>
        

	</div>
    <br>
   

     <br>
	
</div>
    </center>



    <hr>
    <br>
    	<h5 style="color: blue;">A Confirmation Email along with OTP has been sent.</h5><br>
    	<!-- <label>OTP</label> -->
    	<div style="box-shadow: 2px 2px 2px 2px blue;border: 1px solid;padding: 5px;border-radius:10px;width: 25%;height: 44px;"><b>OTP :</b>
    	<input id="otp1chk" name="otp1chk" type="text" name="otp1" id="otp1"></div>

    	<div id="otp1err" name="otp1err" style="color: red;text-align: center;width: 50%;">.</div>





    <br>	
    <br>	
    <br>	

    	<div style="text-align: right;">
	<button type="button" class="btn btn-danger" id="paymentnext" name="paymentnext">Payment using PayuMoney </button style="border: 1px solid;">
    </div>	

    	<br>
</div>
 
<!-- midddle end -->
<br>
<br>
<?php
   re("footer");
?>
<style type="text/css">
	#totaldisplay
	{
		transition: 1s;
	}

	#totaldisplay:hover
  {
    transform: rotate(10deg);
    /*transition: 3s;	*/
    /*transform: rotate(-10deg);*/

  }
</style>
<script type="text/javascript">
	$(document).ready(function(){
		// alert()
		$("#paymentnext").click(function(){

            lastchk=$("#otp1err").text();
            // alert(lastchk);
			if(lastchk=="	OTP matched.Order Condirmation successful!!!")
			{
				// alert(1);
			window.location.href="../../assets/thirdparty/PAYMENT_rich/index.php";
               
			}
			else
			{
				alert("Plaese Enter  correct Confirmation OTP ! ");
			}
			
		    
		})
		$("#otp1chk").change(function()
		{
			// alert(111);
			chk=$("#otp1chk").val();
			// alert(chk);	
			// $realotp1=$_SESSION['otp1'];
			// alert($realotp1);
			$.ajax({
				url:"../../ajax/verifyorderotp.php",
				data:"givenotp="+chk,
				type:"post",
				success:function(res)
				{
					// alert(res);
					$("#otp1err").text(res);
				}
			})
		})
	})
</script>