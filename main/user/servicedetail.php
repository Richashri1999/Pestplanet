
<?php
    require_once "header.php";

  if(isset($_GET['serviceid']))
  	$condition="id = ". $_GET['serviceid'];
  	$condition1="sid = ". $_GET['serviceid'];

 
  $rows=$objproject->select("*","servicetb",$condition);
  $rows1=$objproject->select("*","servicepricetb",$condition1);


  // echo "$rows";
  $rows=json_decode($rows,true);
  $rows1=json_decode($rows1,true);

  // pre($rows);
  $row=$rows['0'];
  $row1=$rows1['0'];
  // pre($row1);

?>

<!-- Intro Banner -->
<div class="container-fluid" style="box-shadow: 2px 2px 2px 2px lightgrey;">
  <div class="block-30 block-30-sm item" style="background-image: url('<?php echo $row['image']; ?>');height: 720px;background-repeat: no-repeat;background-size: cover;">
  </div>
 </div> 
<!--End Intro Banner -->
<br>
<!-- middlee -->

<div class="container" >
	<center>
		<h3 id="servicename" style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><?php echo $row['sname']; ?></h3>
	</center><br>

	
	<div class="row" style="border-top: 1px solid lightgrey;padding: 20px;">

		<div class="col-md-6">

			<div class="row">
			<div class="col-sm-12" >
			<label for="servicetype"><b style="font-size:19px;">Service-Timeframe</b></label>
			  <?php
					    	$objproject->dropdownlist("ddltymfrm", "id,tymfrm", "servicepricetb", $condition1, "form-control");
			  ?>
           <!--  <select id="servicetype" name="servicetype" class="form-control">
            	<option disabled>!---Choose service type----!</option>
				<option>Single Service</option>
				<option>1 Year 3 service</option>
				<option>2 Year 6 Service</option>
			</select> -->
            </div>
			</div>

		 			<br>
			<div class="row">
			<div class="col-md-12" >
			<label for="servicetype"><b style="font-size:19px;">House-Type</b></label>
			<select id="housetype" name="housetype" class="form-control">
				<option disabled="">!---Choose house area----!</option>
				<option>1BHK</option>
				<option>2BHK</option>
				<option>3BHK</option>
				<option>4BHK</option>
				<option>5BHK</option>
				<option>6BHK</option>
				<option>7BHK</option>
				<option>8BHK</option>
				<option>9BHK</option>
				<option>10BHK</option>
			</select>
            </div>
            </div>
           
           <br>
            <div class="row">
			<div class="col-sm-12" >
			<label for="pincode"><b style="font-size:19px;">Area-Pincode</b></label>
            <input type="text" name="pincode" id="pincode" class="form-control">
            <p style="float: right;color: red;" id="pincodechk" name="pincodechk">.</p>

            </div>
			</div>
             
             <br>
             <div style="text-align: center;">
			<button class="btn btn-danger" id="addtocart" name="addtocart">Book Now</button>
			<div id="errcart">..</div>
             </div>

		</div>

		<div class="col-md-6">
			<div class="row" style="font-size: 17px;/*border-bottom: 1px solid red;*/ padding: 10px;">
				<div class="col-md-4"  style="text-align: center;border-right: 1px solid lightgrey;">
					<b>Price</b><i>(Rs.)</i>
					<p id="price">----</p>
				</div>
			    <div class="col-md-4"  style="text-align: center;border-right: 1px solid lightgrey;">
			    	<b>Offer Price</b><i>(Rs.)10%</i>
					<p id="offerprice">---</p> 
			    </div>
			     <div class="col-md-4"  style="text-align: center;">
			    	<b>GST</b><i>(Rs.)12%</i>
					<p id="gst">---</p>
			    </div>
			</div>


			<div style="border-top: 1px solid lightgrey;text-align:center;padding:4px;font-size: 18px;"><b>Final Price</b><i>(Rs.)</i><p id="totalprice">-----</p></div>
			
		</div>

	</div>
</div>

<!-- middlee end -->
<br>

<?php
  re("footer");
?>

<script type="text/javascript">
	$(document).ready(function(){
		// alert()


		$("#ddltymfrm").change(function(){
			// alert()
			// alert($(this).find("option:selected").text());
		   data="tymfrm="+$(this).find("option:selected").text();
		   // alert(data)
		   data1="housetype="+$("#housetype").find("option:selected").text();
		   // alert(data1);	
		   $.ajax({

		   	url:"../../ajax/tymfrmchk.php",
		   	data:data+"&"+data1,
		   	type:"post",
		   	success:function(res){
                      // alert(res*10);
                      $price=res;
                      $offerpc=$price-($price*0.1);
                      $gst=($offerpc*1.2)-$offerpc;
                      $totalpc=$offerpc+$gst;

                      // alert(res);
                      $("#price").html("calculating...")
				        setTimeout(function(){
					     $("#price").html(res);
				          },1000);

				         $("#offerprice").html("calculating...")
				        setTimeout(function(){
					     $("#offerprice").html($offerpc);
				          },1000);

				         $("#gst").html("calculating...")
				        setTimeout(function(){
					     $("#gst").html($gst);
				          },1000);

				         $("#totalprice").html("calculating...")
				        setTimeout(function(){
					     $("#totalprice").html($totalpc);
				          },1000);

                      // $("#price").html(res);
                      
		   	}

		   })


		})


		$("#housetype").change(function(){
			// alert(11)
			 data="tymfrm="+$("#ddltymfrm").find("option:selected").text();
		     // alert(data)
		     data1="housetype="+$(this).find("option:selected").text();
             // alert(data1);

			 $.ajax({
		   	url:"../../ajax/tymfrmchk.php",
		   	data:data+"&"+data1,
		   	type:"post",
		   	success:function(res){
                      // alert(res);
                       $price=res;
                      $offerpc=$price-($price*0.1);
                      $gst=($offerpc*1.2)-$offerpc;
                      $totalpc=$offerpc+$gst;
                      $("#price").html("calculating...")
				        setTimeout(function(){
					     $("#price").html(res);
				          },1000);

				         $("#offerprice").html("calculating...")
				        setTimeout(function(){
					     $("#offerprice").html($offerpc);
				          },1000);

				         $("#gst").html("calculating...")
				        setTimeout(function(){
					     $("#gst").html($gst);
				          },1000);

				         $("#totalprice").html("calculating...")
				        setTimeout(function(){
					     $("#totalprice").html($totalpc);
				          },1000);
                      // $("#price").html(res);
                      
		   	}

		   })
		})



		$("#addtocart").click(function(){
			// alert()
			chk1=$("#pincodechk").text();
			// alert(chk1);
			if(chk1=="pincode is not servicable")
			{
				alert("you can not book this service as pincode is not servicable..!");
				location.reload();
				return;
			}
			tymfrm=$("#ddltymfrm").find("option:selected").text();
			housetype=$("#housetype").find("option:selected").text();
			finalpc=$("#totalprice").text();
			pc=$("#price").text();
			sname=$("#servicename").text();
			discount=$("#offerprice").text();
			// alert(finalpc);
             $.ajax({
             	url:"../../ajax/inserttocart.php",
             	data:"tymfrm="+tymfrm+"&housetype="+housetype+"&finalprice="+finalpc+"&price="+pc+"&discount="+discount+"&sname="+sname,
             	type:"post",
             	success:function(resp)
             	{
             		alert(resp);
             		// $("#errcart").html(resp);
             	}
             })
           window.location.href="cart.php";
		})

		$("#pincode").change(function()
		{
			// alert(12346);
			$chk=$("#pincodechk").text();
			// alert($chk);
			$chk=$("#pincode").val();
			// alert($chk);
			if(($chk==400072)||($chk==400042)||($chk==400084)||($chk==400086))
			{
			$("#pincodechk").text("pincode is servicable");	
			}
			else
			{
			$("#pincodechk").text("pincode is not servicable");	

			}

		})
	})
</script>