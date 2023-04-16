
<?php
    require_once "header.php";
?>
<!-- Intro Banner -->
<div class="container-fluid" style="box-shadow: 2px 2px 2px 2px lightgrey;">
  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/6.png');height: 470px;background-repeat: no-repeat;margin-top: 75px;background-size: cover;">
  </div>
 </div> 
<!--End Intro Banner -->

<section class="richmiddle">
  <div class="container">
   <div class="row" >

    <div class="col-md-3" >
      <div style="border: 1px solid lightgrey;border-radius: 10px;padding:5px;">
        <h3 style="font-size: 20px;padding: 10px; border-bottom: 1px solid lightgrey;"><b>Our Pest Services</b></h3>
        
        <ul>
            <li><a style="color: grey;" href="service.php">All Pest</a></li>
         <?php
      $condition='1=1';
    $rows = $objproject -> select("*", "servicetb", $condition);

    $rows = json_decode($rows, true);
    $row=$rows[0];
    // pre($row);
    if($row==0)
    {
      echo "No pest";
    }
    else
    {


    foreach ($rows as $row)
    {
      
    

    ?>

            <!-- start -->
            <li><a style="color: grey;" href="#"><?php echo $row['sname']; ?></a></li>    
            <!-- end -->
      <?php

       }
     }
      ?>
        </ul>
      </div>
    </div>
    <div class="col-md-9" style="border-left: 1px solid lightgrey; box-shadow: 2px 2px 2px 2px lightgrey;padding-bottom: 10px;">
      <h3 style="padding-top: 10px;color: white;
  text-shadow: 2px 2px 4px #000000;">All Pest</h3>
    <hr/>
   

      <div class="row" >
<?php        
 
    // $condition='1=1';
    // $rows = $objproject -> select("*", "servicetb", $condition);

    // $rows = json_decode($rows, true);
    // pre($rows);

    if($rows == 0)
    {
        echo "No Pest-Services";
        return;
    }
    foreach ($rows as $row) {
        # code...
    
?>


<!-- start -->
        <div class="col-md-4 col-sm-6"  style="margin-top: 10px;">  
          <div class="overlayparentdiv" >
            <img src="<?php echo $row['image']; ?>" alt="alt" class="image">
              <div class="overlay">
                <h5><b><?php echo $row['sname']; ?></b></h5>
                <div><?php echo $row['description']; ; ?></div>
                <a href="servicedetail.php?serviceid=<?php echo $row['id']; ?>"><b>+add to cart</b></a><br>
                <a href="../pestlib/pestlib.php"><i>see more info...</i></a>  
              </div>
          </div>
        </div>

  
      
<!-- end -->
<?php
  }
?>

</div>
    </div>

   </div>
   
  </div>
<br>
<br>
<br>
<br>

</div>
</section>


<!-- Middle 1/-->
<section class="container">
  <!-- middle2 -->
<div class="row richrotateparent" >
  <div class="col-sm-6 col-lg-4  richrotateparent">
    <div class="card shadowrich" style="text-align: center;">
      <img class="card-img" src="../../assets/images/banner3.png">
      <div class="card-block">
      <h4 class="card-title">Residential service</h4>
      </div>
         
      <h6 class="card-subtitle text-muted">Pest control & management</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="residential.php" class="card-link">Read more..</a>
    </div>
  </div>

  <div class="col-sm-6 col-lg-4 " >
    <div class="card" style="text-align: center;" >
      <img  class="card-img" src="../../assets/images/richsearchpest.jpg" id="richrotate" >
      <div class="card-block">
      <!-- <h4 class="card-title">Free inspection</h4> -->
      </div>
         
      <!-- <h6 class="card-subtitle text-muted">Pest control & management</h6> -->
      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
      <!-- <a href="#" class="card-link">Read more..</a> -->
    </div>
  </div>

  <div class="col-sm-6 col-lg-4  richrotateparent">
    <div class="card shadowrich" style="text-align: center;">
      <img class="card-img" src="../../assets/images/5.png">
      <div class="card-block">
      <h4 class="card-title">Commercial service</h4>
      </div>
         
      <h6 class="card-subtitle text-muted">Pest control & management</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="commercial.php" class="card-link">Read more..</a>
    </div>
  </div>

 </div>

</section>

<br>
<br>
<br>
<br>  
<?php
    require_once "footer.php";
?>
<style type="text/css">
  .shadowrich
  {
       transition: 1s;
  }
   .shadowrich:hover
  {
    box-shadow: 3px 3px 3px 3px grey;

  }
  #richrotate
  {
    transition: 1s ease;
    transform-style: preserve-3d;
    /*transform: rotate(40deg);*/
  }
  .richrotateparent:hover #richrotate
  {
    transform: rotate(70deg);
  }
 </style>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    // alert()
    $("#richrotate1").hover(function(){
      alert()
      
    })
  })
</script> -->