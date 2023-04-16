<?php
  require_once "header.php";
?>
<!-- Intro Banner -->
<div class="container-fluid" style="box-shadow: 2px 2px 2px 2px lightgrey;">
  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/cart/cart8.jpg');height: 650px;background-repeat: no-repeat;margin-top: 75px;background-size: cover;">
  </div>
 </div> 
<!--End Intro Banner -->
<br>
<!-- <middle start -->
<div class="container">
	<center style="border-bottom: 1px solid lightgrey;">
		<h3 style="color: white;
          text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">My cart</h3>
 	</center><br>

     <?php
          $usernm=$_SESSION["username"];
          // echo $usernm;
            
           $rows= $objproject->select("*","carttb c,servicetb s","c.sid=s.id and username='$usernm'");
           $rows=json_decode($rows,true);
           // pre($rows);
           if($rows==0)
            echo "Cart Is Empty!!";
          else
          {
           foreach($rows as $row)
           {
           // echo $row['sid'];
            
           
          ?>

    
    
    	<div class="row servicebox" style="box-shadow: 2px 2px 2px 2px lightgrey;padding:20px;">

    


    		<div class="col-md-2">
    			<img src="<?php echo $row['image']; ?>" style="width: 70%;height: 90%;box-shadow: 2px 2px 2px 2px lightgrey;">


    		</div>
        
    		<div class="col-md-2" >
    	      <h5><?php echo $row['sname'] ; ?></h5>
    	      -->Housetype : <?php echo $row['housetype'] ; ?>   <br>
    	      --><?php echo $row['tymfrm'] ; ?> <br>	
    		</div>
    		<div class="col-md-1"><u>Price</u><p><?php echo $row['price'] ; ?></p></div>
    		<div class="col-md-2"><u>Discount(10%)</u><p><?php echo $row['discount'] ; ?> Rs.</p></div>
    		<div class="col-md-2"><u>Final Price</u><p><?php echo $row['finalprice'] ; ?> Rs.</p></div>

            <div class="col-md-3" style="text-align: right;s">
    	    <button class="btn-primary dltfrmcart" id="dltfrmcart" sid="<?php echo $row['sid']; ?>">delete</button>
            	
            </div>
            

    	</div>

      <?php
         
         }

      }
      ?>

  
      <br>  
    <button id="checkout" name="checkout" style="float: right;margin-right: 10px;" class="btn btn-danger">Checkout</button>
    <button id="continue" name="continue" style="float: right;margin-right: 20px;" class=" btn btn-danger">continue adding more services</button>
   
</div>
<!-- middle end -->
<br>
<br>


<?php
  re("footer");
?>

<script type="text/javascript">
	$(document).ready(function(){
		// alert()
		$(".dltfrmcart").click(function(){
			var result = confirm("Want to remove this pest service from cart??");
if (result) {
    //Logic to delete the item
    // alert(1)

      // exit();
          // sid  = $(this).attr("sid")
			// $(this).parentsUntill(".servicebox").slideUp(1000)
			$(this).parentsUntil(".servicebox").parent().slideUp(1000) 
               //parents will close all d parent
               sid  = $(this).attr("sid");
               // alert(sid);
          // $(this).parentsUntil(".car-box").parent().slideUp(1000)
                $.ajax({
                  url : "../../ajax/deletefromcart.php",
                  data : "sid=" + sid,
                  type: "post",
                  success: function(response){
                    setTimeout(function()
                     {
                    window.location.href = "cart.php";
                      
                     },1000);
                    // alert(response);

                  }
          })
  }


		})

    $("#checkout").click(function(){
      // alert(1)
      window.location.href="placeorder.php";
    })
    $("#continue").click(function(){
      // alert(2)
      window.location.href="service.php";
    })

	})
</script>