<?php
  require_once "header.php";
// echo "<br><br><br><br><br><br><br><br>";
  // session_start();
  $Username=$_SESSION['username'];
  $rows=$objproject->select("*","usertb","username='$Username'");
  $rows=json_decode($rows,true);
  // pre($rows);
  $row=$rows[0];
  $username=$row['username'];
  $name=$row['name'];
  $email=$row['email'];
  $phnno=$row['phoneno'];
  $address=$row['address'];
   // pre($row);
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
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Schedule</div>
    </div>
    <div class="col-sm-4">
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Payement</div>
    </div>  
  </div>
<!-- middle -->
<br>

<div class="container" style="box-shadow: 3px 3px 3px 3px lightgrey;">

  <h3 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;padding-top: 5px;">User Details</h3>
	<hr>
    <br>
  
	<div class="row">
		<div class="col-sm-8">
			
				<label for="name">Full Name</label>
				<input disabled type="text" name="name" id="name" class="form-control "  value="<?php echo $name; ?>">
                <br>
                <label for="name">Username</label>
				<input disabled type="text" name="uname" id="uname" class="form-control" value="<?php echo $Username; ?>">
                <br>
				<label for="email">Email address:</label>
                <input disabled type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                <br>
                <label for="phoneno">Phone No.:</label>
                <input disabled type="text" class="form-control" id="phoneno" name="phoneno" value="<?php echo $phnno; ?>">
                <br>
                <a href="#" id="verifynumber" style="float: right;" value="<?php echo $phoneno; ?>">Verified</a>
                <br>
                <label for="address">Address:</label>
                <input disabled type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>">  
			<!-- </form> -->
		</div>
         

		<div class="col-sm-4" >
    <img src="../../assets/images/idaddress.png"  style="width: 100%;height: 80%;">  
    </div>
        



	</div>
    <br>
    <br>
    <br>

    <div style="text-align: right;">
	<button class="btn btn-danger" id="booknext" name="booknext">Next</button style="border: 1px solid;">
    </div>
    <div id="err2" name="err2"></div>
    <br>
  
<!-- 
     <br><br>
     <div class="row">
    <div class="col-sm-4">
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;color: white; background-image: linear-gradient(to right,  red ,lightblue)"> details</div>
    </div>
    <div class="col-sm-4">
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Schedule</div>
    </div>
    <div class="col-sm-4">
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Payement</div>
    </div>  
  </div>
	 -->
</div>

<!-- midddle end -->



<br>
<br>
<?php
   re("footer");
?>

<script type="text/javascript">
	$(document).ready(function(){


		// alert()

		$("#booknext").click(function(){
      window.location.href="schedule.php"
	
		})



	})

  //javascript

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

// alert(sticky)
function myFunction() {
  if (window.pageYOffset > sticky) {
    // alert(1)
    header.classList.add("sticky");
  } else {
    // alert(2)
    header.classList.remove("sticky");
  }
}


</script>