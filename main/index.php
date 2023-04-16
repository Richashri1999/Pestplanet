<?php
  require_once '../class/project.php';
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PestPlanet | Pest Control service </title>

  <script type="text/javascript" src="../assets/js/jquery.js"></script>
  <script type="text/javascript" src="../assets/js/popper.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../assets/js/richjs.js"></script>
  <script type="text/javascript" src="../assets/js/index.js"></script>

  
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/richstyle.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style1.css">


<script type="text/javascript">
  $(document).ready(function(){
    // alert(1)
    $(window).scroll(function(){
      if($(window).scrollTop()>200)
      {
        $('#richnav').css("background-color","white");
      }
      else
      {
        $('#richnav').css("background-color","unset");
      }
    })
  })
</script>

</head>
<body >
  <!--Navbar-->
        <nav class="navbar fixed-top bg-grey" id="richnav" style="box-shadow: 1px 1px 1px 1px lightgrey;">
            <div class="container collapse navbar-collapse" >
                <a  class="navbar-brand" href="#"><strong style="
                font-size: 28px;
                color: black;
                font-family: 'Montserrat', sans-serif;">Pest Control Service</strong></a>
                   <a style="
                    font-size: 18px;
                    color: #fff;
                    font-family: 'Montserrat', sans-serif;" class="btn btn-danger"  data-toggle="modal" href="#myModal">Login</a>		
            </div>
        </nav>
  <!--/.Navbar-->

  <!-- fullpageslider  -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox" >
      <!-- Slide One --->
      <div class="carousel-item active" style="background-image: url(../assets/images/3.jpg)">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
           <h2 class="display-4"><b style="color: all;">Save Your Family from Unwanted Pest</b></h2>
          <p class="lead"><b>No matter what type of Pest We Deal With All...</b></p>
        </div>
      </div>
      <!-- Slide Two --->
      <div class="carousel-item" style="background-image: url('../assets/images/2.jpg')">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
         <h2 class="display-4"><b style="color: all;">Residential Pest Control</b></h2>
          <p class="lead"><b>Destroy Unwanted Creatures(pest) at Home...</b></p>
        </div>
      </div>
      <!-- Slide Three --->
      <div class="carousel-item" style="background-image: url(../assets/images/5.png)">
        <div class="carousel-caption d-none d-md-block" style="color: black;" >
          <h2 class="display-4"><b style="color: all;">Commercial Pest Control</b></h2>
          <p class="lead"><b>No smell, Customer Friendly, 100% cost Effective....</b></p>
        </div>
      </div>
      <!-- Slide Four --->
      <div class="carousel-item" style="background-image: url('../assets/images/1.png')">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
          
          <h2 class="display-4"><b>Save Your Family from Unwanted Pest</b></h2>
          <p class="lead"><b>We are Pest Control Experts....</b></p>
        </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

  <!-- fullpageslider./	  -->
 <hr>
<div style="box-shadow: 2px 2px 2px 2px lightgrey;">
<div class="text-center" style="padding-bottom:7px;">
  <br><br>
      <h2>What Pest Services We Provide</h2>
      <h6>This is Information panel</h6>
      <a style="text-align: center;">----</a>
    </div>

<!-- pest info start -->
    <div class="team"">
        <div class="container" style="box-shadow: 3px 3px 3px 3px lightgrey;">
        <ul class="ch-grid">
          <li>
            <div class="ch-item animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-1"></div>
                <div class="ch-info-back">
                    <h3>Cockroach Control</h3>
                  <p>For More Information <a href="pestlib/pestlib.php">View on Pest Library</a></p>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="ch-info">
                <div class="ch-info-front ch-img-2"></div>
                <div class="ch-info-back">
                    <h3>Bed bug control</h3>
                  <p>For More Information  <a href="pestlib/pestlib3.php">View on Pest Library</a></p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="ch-info">
                <div class="ch-info-front ch-img-3"></div>
                <div class="ch-info-back">
                    <h3>Mosquitoe control</h3>
                  <p>For More Information <a href="pestlib/pestlib1.php">View on Pest Library</a></p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="ch-info">
                <div class="ch-info-front ch-img-4"></div>
                <div class="ch-info-back">
                    <h3>Rodent Control</h3>
                  <p>For More Information  <a href="pestlib/pestlib4.php">View on Pest Library</a></p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-5"></div>
                <div class="ch-info-back">
                    <h3>Spider Control</h3>
                  <p>For More Information <a href="pestlib/pestlib10.php">View on Pest Library</a></p>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-6"></div>
                <div class="ch-info-back">
                    <h3>Termite Control</h3>
                  <p>For More Information <a href="pestlib/pestlib2.php">View on Pest Library</a></p>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-7"></div>
                <div class="ch-info-back">
                    <h3>Ants Control</h3>
                  <p>For More Information <a href="pestlib/pestlib9.php">View on Pest Library</a></p>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-8"></div>
                <div class="ch-info-back">
                    <h3>Flies Control</h3>
                  <p>For More Information <a href="pestlib/pestlib7.php">View on Pest Library</a></p>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-9"></div>
                <div class="ch-info-back">
                    <h3>Other Pests</h3>
                  <p>For More Information <a href="pestlib/pestlib.php">View on Pest Library</a></p>
                </div>  
              </div>
            </div>
          </li>
          
        </ul>
        
      </div>
       </div>
</div>
<!-- pest info end -->
<div style="box-shadow: 2px 2px 2px 2px lightgrey;">

<div class="text-center" style="padding-bottom:7px;">
  <br><br>
      <h2>Why Choose us</h2>
      <a style="text-align: center;">----</a>
    </div>

  <div class="row" style="padding: 20px;text-align: center;">
    <div class="col-md-3">
      <img src="../assets/images/icon22.png">
      <h5>Happy Family</h5>
    </div>
    <div class="col-md-3">
      <img src="../assets/images/icon7.png">
      <h5>Safe Chemicals</h5>
    </div>
    <div class="col-md-3">
      <img src="../assets/images/icon11.png">
      <h5>Best technicians</h5>
    </div>
    <div class="col-md-3">
      <img src="../assets/images/icon5.png">
      <h5>High Quality</h5>
    </div>
  </div>
<br>

</div>

<br>
<br>
<br>
<br>
<!-- last image--how works -->
<div >
  <img src="../assets/images/banner7.jpg" style=" width: 100%">
</div>
<!--- Footer  --->
<footer style="background-color: #68051c; color: white;">
  <div class="container" >
    <div class="row">
      <div class=" col-md-12 text-center">
        <div class="container">
           <h3>Pest Control Service</h3>
            <br>
            <button onclick="myFunction()">Contact Us</button>

             <div id="myDIV" style="display: none;background-image: linear-gradient(grey,lightgrey,lightblue);width: 50%;padding: 20px;" class="container">
            <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <!-- <div class="valid-feedback">Valid.</div> -->
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="password" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <!-- <div class="valid-feedback">Valid.</div> -->
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="pwd">Email:</label>
       <textarea class="form-control" id="message" name="message" placeholder="Please enter your Query here..." rows="5" required></textarea>
       <!-- <div class="valid-feedback">Valid.</div> -->
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
          </div>

            <br>
            <br>
            <hr>  
           <p>© 2019 Pest Control Service. All Rights Reserved | Designed by <STRONG>RichUser</STRONG></p>

        </div>
      </div>
    </div>
  </div> 
</footer>
<!-- Footer end       -->





<!--- Model Popup Box --->
      <div class="modal" id="myModal">
        <form id="login-form" name="login-form" method="post" role="form" style="display: block;">
  <div class="modal-dialog">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="panel">
        
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  
                  <div class="form-group  text-center">
                    
                  <button type="button" name="btnlogin" id="btnlogin"  class="form-control btn btn-danger">Log in</button>
                      
                  </div>

                  <div class="form-group text-danger text-center" id="err1"></div>


                  <div class="form-group text-center">
                   <a href="#" class="model-link" id="register-form-link">Register</a>
                  </div>
                
                
              </div>
            </div>
            
          </div>
        </div>
      </div>

     

    </div>
  </div>
  </form>

  <form id="register-form" name="register-form" method="post" role="form" style="display: none;">
<div class="modal-dialog">
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="panel">
        
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">               
                  
                  <div class="form-group">
                    <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Full Name" value="">
                  </div>

                    <div class="form-group">
                      <input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Email Address" value="">
                    </div>

                  <div class="form-group">
                    <input type="text" name="phoneno" id="phoneno" tabindex="3" class="form-control" placeholder="Phone Number" value="">
                  </div>

                  <!-- <div class="form-group">
                    <input type="text" name="address" id="address" tabindex="4" class="form-control" placeholder="Address" value="">
                  </div> -->

                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="5" class="form-control" placeholder="Username" value="">
                  </div>            

                  
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="6" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="cpassword" id="cpassword" tabindex="7" class="form-control" placeholder="Confirm Password">
                  </div>

                  <div class="form-group text-center">  
                  <input type="button" name="btnregister" id="btnregister" tabindex="4" class="form-control btn btn-danger" value="Register Now"> 

                  <div class="text-danger" id="err2"></div>               
                  </div>

                  <div class="form-group text-center">                      
                    <a href="#" class="model-link" id="login-form-link">Login</a>
                  </div>
            </div>
          </div>
        </div>
      </div>

     

    </div>
  </div>
    </form>
</div>
 <!--- Model Popup Box --->


</body>
<!-- contact us -->
<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<!-- contact us end -->
</html>
