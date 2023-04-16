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
      <div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Payement</div>
    </div>  
  </div>
<!-- middle -->
<br>
<div class="container" style="box-shadow: 3px 3px 3px 3px lightgrey;" >
	<!-- <div class="row">
		<div class="col-sm-4">
			<div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;color: white; background-image: linear-gradient(to right,	red	,lightblue)">User details</div>
		</div>
		<div class="col-sm-4">
			<div >Schedule</div>
		</div>
		<div class="col-sm-4">
			<div style="border: 1px solid;padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Payement</div>
		</div>  
	</div> -->
    <h3 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;padding-top: 5px;">Schedule</h3>
	<hr>
    <br>
	<div class="row">
		<div class="col-sm-8">
			<form id="scheduleform" name="scheduleform" method="post">
				<label for="time">Timeslot</label>
                <select class="form-control" id="time" name="time">
    	            <option>4:00am-6:00am</option>
    	            <option>7:00am-6:00am</option>
    	            <option>10:00am-12:00am</option>
    	            <option>3:00pm-5:00am</option>
    	            <option>5:00pm-7:00am</option>
                </select>
<br>
                <label for="date">Date</label>
  	            <input class="form-control" type="date" name="date" id="date">
  	            <div id="errschedule" name="errschedule"></div>
			<!-- </form> -->
		</div>
         

		<div class="col-sm-4">
			<img style="border-radius: 10px;" src="../../assets/images/datentym1.jpg">
		</div>
        

	</div>
    <br>
    <br>
    <br>	

    <div style="text-align: left; float: left;">
	<button type="button" class="btn btn-danger" id="scheduleback" name="scheduleback">back</button style="border: 1px solid;">
    </div>
    <div style="text-align: right;">
	<button  type="button" class="btn btn-danger" id="schedulenext" name="schedulenext">Next</button style="border: 1px solid;">
    </div>
</form>
    <br>

     
	
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
		$("#schedulenext").click(function()
		{
			data=$("#scheduleform").serialize()
			// alert(data)
			$.ajax({
				url:"../../ajax/schedulenext.php",
				data:data,
				type:"post",
				success:function(response)
				{
					// alert(response);
             		$("#errschedule").html(response);
			       window.location.href="payment.php";


					
				}
			})
		})

		$("#scheduleback").click(function()
		{
			window.location.href="placeorder1.php";
		})

		
	})
</script>