<?php
 require_once "header.php";
?>

<div class="container">

			<div class="richcard1">
            <img style="width: 200px;" src="../../assets/images/ADMIN LOGO.png">
            </div>
            <br>		
	<div class="row">

		<div class="col-md-2">

<div class="richcard" id="feedback">
<img src="../../assets/images/icons/feedback.png">
</div>

		</div>

		<div class="col-md-2">
			<div class="richcard" id="agent">
            <img src="../../assets/images/icons/agentsc.png">
            </div>
		</div>

		<div class="col-md-2" >			
         <div class="richcard" id="orderlist">
         <img src="../../assets/images/icons/orderlistc.png">
         </div>
		</div>

		<div class="col-md-2">
			<div class="richcard" id="deliver">
            <img src="../../assets/images/icons/deliver.png">
            </div>
 		</div>
		<div class="col-md-2">
			<div class="richcard" id="adminpower">
            <img src="../../assets/images/icons/adminpowerc.png">
            </div>
		</div>
		<div class="col-md-2">
			<div class="richcard" id="user">
            <img src="../../assets/images/icons/usersc.png">
            </div>
		</div>
	</div>
	

</div>
<style type="text/css">
	.richcard
	{
		/*border:1px solid;*/\
		padding-top: 10px;
		box-shadow: 5px 5px 5px 5px lightgrey;
		padding-bottom: 20px;
		text-align: center;
	}
	.richcard1
	{
		padding-top: 10px;
		box-shadow: 5px 5px 5px 5px lightgrey;
		padding-bottom: 20px;
		text-align: center;
	}
	.richcard:hover
	{
		cursor: pointer;
		transform: rotate(20deg);	
	}
	.richcard img
	{
		width: 100px;
	}
</style>

<script type="text/javascript">
	$("#user").click(function(){
		alert("user")
		window.location.href="users.php";

	})
	$("#agent").click(function(){
		alert("agent");
		window.location.href="agent.php";

	})
	$("#adminpower").click(function(){
		alert("adminpower")
		window.location.href="adminpower.php";

	})
	$("#deliver").click(function(){
		alert("deliver")
		window.location.href="delivereds.php";

	})
	$("#orderlist").click(function(){
		alert("orderlist")
		window.location.href="orders.php";

	})

	$("#feedback").click(function(){
		alert("feedback")
		window.location.href="feedback.php";

	})
	
	
</script>


	