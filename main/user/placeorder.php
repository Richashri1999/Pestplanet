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
			<form id="chkuserdetail" name="chkuserdetail" method="post">
				<label for="name">Full Name</label>
				<input  type="text" name="name" id="name" class="form-control "  value="<?php echo $name; ?>">
                <br>
                <label for="name">Username</label>
				<input disabled type="text" name="uname" id="uname" class="form-control" value="<?php echo $Username; ?>">
                <br>
				<label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                <br>
                <label for="phoneno">Phone No.:</label>
                <input type="text" class="form-control" id="phoneno" name="phoneno" value="<?php echo $phnno; ?>">
                <br>
                <a href="#" id="verifynumber" style="float: right;" value="<?php echo $phoneno; ?>">Verify Your Number</a>
                <br>
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address">  
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
  </form>
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


<!-- OTP -->
<div class="modal" id="myotpmodel"  style="z-index: 10000;">
        <form id="otpform" name="otpform" method="post" role="form" style="display: block;">
  <div class="modal-dialog">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Verifying OTP</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="modalpanel">
        
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                
                  <div class="form-group">
                    <input type="text" name="txtotp" id="txtotp" tabindex="1" class="form-control" placeholder="Enter OTP" value="">
                  </div>
                  
                  <div class="form-group  text-center">
                    
                  <button type="button" name="btnsend" id="btnsend"  class="form-control btn-danger" style="height:45px;">Verify OTP</button>
                      

                  <div class="form-group text-danger" id="err1"></div>        
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </form>
</div>
<!-- OTP end -->


<br>
<br>
<?php
   re("footer");
?>

<script type="text/javascript">
	$(document).ready(function(){


		// alert()

		$("#booknext").click(function(){
			// alert()
      // address=$("#address").text();
      // alert(address);
      nostatus=$("#verifynumber").text();
      // alert(nostatus);
    
      if(nostatus=="Verify Your Number")
        alert("Please, Verfiy Your Number to continue....")
      else if($.trim($('#address').val()) == '')
        alert("Enter Your Address To continue...")
      else
      {
      // else if(nostatus=="verified")
        data = $("#chkuserdetail").serialize()
    // alert(data)
    $.ajax({
      url : "../../ajax/userdetailupdate.php",
      data : data,
      type : "post",
      success : function(result){
        alert(result)
      window.location.href="schedule.php"

        // $("#err2").html("Please wait....")

        // setTimeout(function(){
        //   $("#err2").html(result)
        // }, 1000)
      }
    })


    }

		})
		$("#verifynumber").click(function(){
			// alert()
         $("#myotpmodel").modal('show');
         phoneno=$("#phoneno").val();
         $.ajax({

          url:"../../ajax/sendotp.php",
          data:"phoneno="+phoneno,
          type:"post",
          success:function(res)
          {
            // alert(res);
            $("#err1").html(res);
          }
         })

		})


    $("#btnsend").click(function(){
      
      otp = $("#txtotp").val()


      // alert(username)
      
      // return
      $.ajax({
        url : "../../ajax/verifyotp.php",
        data : "otp=" + otp,
        type : "post",
        success : function(res)

        {
            $("#verifynumber").html("verified");
            alert(res);

          if(res == "verfied successfully!!!")
          {
         $("#myotpmodel").modal('hide');
            
          }
           
          
        }
      })
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