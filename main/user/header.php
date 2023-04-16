<?php
  require_once '../../class/project.php';
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PestPlanet | Pest Control service </title>

  <script type="text/javascript" src="../../assets/js/jquery.js"></script>
  <script type="text/javascript" src="../../assets/js/popper.js"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../../assets/js/richjs.js"></script>
  <script type="text/javascript" src="../../assets/js/index.js"></script>

  
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/stylerich.css" >
  <link rel="stylesheet" type="text/css" href="../../assets/css/style1.css">


<script type="text/javascript">
  $(document).ready(function(){
    // alert(1)
    $(window).scroll(function(){
      if($(window).scrollTop()>200)
      {
        $('#richnav').css("background-color","#68051c");
      }
      else
      {
        $('#richnav').css("background-color","unset");
      }
    })
  })
</script>
<style type="text/css">
.navbar-light {
    /*background-color: linear-gradient(#68051c,lightblue,lightgrey);*/
    background-color: lightblue;
}
.navbar-light .navbar-brand,
.navbar-light .navbar-text {
    color: black;
    font-family: 'Montserrat', sans-serif;


  /* change the link color */
.navbar-custom .navbar-nav .nav-link {
    color: rgba(255,255,255,.5);
}
/* change the color of active or hovered links */
.navbar-light .nav-item.active .nav-link,
.navbar-light .nav-item:focus .nav-link,
.navbar-light .nav-item:hover .nav-link {
    color: #ffffff;
  }
</style>
</head>
<body >
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 2px 2px 2px 2px lightgrey">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">
          <img src="http://placehold.it/150x50?text=Logo" alt="">
        </a> -->
         <a  class="navbar-brand" href="#"><strong style="
                font-size: 28px;
               
                font-family: 'Montserrat', sans-serif;">Pest Control Service</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" class="richusernavbar">
      <ul class="navbar-nav ml-auto"  >
        <li class="nav-item active">
          <a class="nav-link" href="service.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Residential.php">Residential Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="commercial.php">Commercial Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
         <!-- <li class="nav-item">
          <a class="nav-link" href="cart.php">Service_History</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews.php">Customer review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">FAQ</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
