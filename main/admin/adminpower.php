<?php
  require_once "header.php";
?>
<!-- common to all headings-->
<div class="container categoryheading" >
	<div class="row" id="myHeader">
    <div class="col-sm-4">
      <div id="Add-ServiceCategory" style="padding: 8px;border-radius: 40px;width: 90%;text-align: center; background-image: linear-gradient(to right,  red ,lightblue)">Add-ServiceCategory</div>
    </div>
    <div class="col-sm-4">
      <div id="Add-Service" style="padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Add-Service</div>
    </div>
    <div class="col-sm-4">
      <div id="Add-ServiceDetail" style="padding: 8px;border-radius: 40px;width: 90%;text-align: center;">Add-ServiceDetail</div>
    </div>  
  </div><hr>
</div>
<!-- common ro all -->
<!-- service category -->
<br>
<div class="container category" style="box-shadow: 5px 5px 5px 5px lightgrey;padding-left: 10px;padding-bottom: 20px; ">
     <div class="row">
          <div class="col-md-9">
            <form method="post" name="categoryform" id="categoryform">
            <div class="form-group">
              <label for="catgory">Category:</label>
              <input type="text" class="form-control" name="txtcategory" id="txtcategory">
            </div>

            <button type="button" class="btn btn-primary" id="btnaddcategory">Save Category</button>

            <div id="errcategory" class="text-danger"></div>
        </form>
          </div>
      </div>
  </div>
  <br>
<!-- service category end -->

<!-- service  -->
<br>
<div class="container service" style="box-shadow: 5px 5px 5px 5px lightgrey;padding: 10px;padding-left: 20px;">
		 <div class="row">
         	<div class="col-md-9">
         		<form method="post" name="serviceform" id="serviceform" enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="txtservice">Service-Name:</label>
					    <input type="text" class="form-control" name="txtservice" id="txtservice">
					  </div>

					  <div class="form-group">
					    <label for="ddlcategory">Service-Category:</label>
					    <?php
					    	$objproject->dropdownlist("ddlcategory", "id,catname", "servicecategorytb", "1=1", "form-control");
					    ?>
					  </div>
					  

					 <!--  <div class="form-group">
					    <label for="product">Type:</label>
					    <input type="text" class="form-control" name="txttype" id="txttype">
					  </div> -->

					 

					  <div class="form-group">
					    <label for="image">Service-Image:</label>
					    <input type="file" class="form-control" name="image" id="image">
					  </div>

					  <div class="form-group">
					    <label for="txtdescription">Service-Description:</label>
					    <textarea class="form-control" name="txtdescription" id="txtdescription"></textarea>
					  </div>

					  <button type="button" class="btn btn-primary" id="btnaddservice">Add Service</button>
					  <div id="errservice" class="text-danger"></div>
				</form>
        	</div>
    	</div>
	</div>
<!-- service end -->
<!-- service detail--.timeframe n cost -->
<div class="container servicedetail" style="box-shadow: 5px 5px 5px 5px lightgrey;padding: 10px;padding-left: 20px;">
		 <div class="row">
         	<div class="col-md-9">
         		<form method="post" name="costform" id="costform" enctype="multipart/form-data">
                 
                  <div class="form-group">
					    <label for="product">Service-Name:</label>
					    <!-- <input type="text" class="form-control" name="txtproduct" id="txtproduct"> -->
					     <?php
					    	$objproject->dropdownlist("ddlserviceid", "id,sname", "servicetb", "1=1", "form-control");
					    ?>

			      </div>

                  <div class="form-group">
					    <label for="product">Service-Timeframe:</label>
					    <select class="form-control" name="txttymfrm" id="txttymfrm">
					    	<option>--Select timeframe--</option>
					    	<option>Single Service</option>
					    	<option>1 Year 3 Service</option>
					    	<option>2 Year 6 Service</option>
					    	<option>6 month</option>
					    	<option>12 month</option>
					    </select>
				  </div> 

				   <div class="form-group">
					    <label for="product">Service-Cost:</label>
					    <input type="text" class="form-control" name="txtprice" id="txtprice">
				   </div>

				   <button type="button" class="btn btn-primary" id="btnaddcost">Save</button>
                   <div id="errcost" class="text-danger"></div>


         		</form>
         	</div>
         </div>
 </div>	
<!-- service detail--.timeframe n cost end -->

<style type="text/css">
	.categoryheading div div
	{
		cursor: pointer;
	}
</style>
<?php
  js("adminpower")
?>