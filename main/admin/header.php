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
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 2px 2px 2px 2px grey">
  <div class="container" style="margin-right: 1px;">
    <!-- <a class="navbar-brand" href="#">
          <img src="http://placehold.it/150x50?text=Logo" alt="">
        </a> -->
         <a  class="navbar-brand" href="#"><strong style="
                font-size: 28px;
               
                font-family: 'Montserrat', sans-serif;">Admin Area</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" class="richusernavbar">
      <ul class="navbar-nav ml-auto"  >
       
        <li class="nav-item">
          <a class="nav-link" href="#"><img style="width: 30px" src="../../assets/images/icons/myaccount.png"> My Account</a>
        </li>
      <!--   <li class="nav-item">
          <a class="nav-link" href="#"><img style="width: 30px" src="../../assets/images/icons/addagent.png">Add Admin</a>
        </li> -->
       
         <li class="nav-item">
          <a class="nav-link" href="../logout.php"><img style="width: 30px" src="../../assets/images/icons/logout.png"> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<br>
<br>
<br>
<br>
<br>

<div id="mySidenav" class="sidenav" style="height: 420px;background-image: linear-gradient(to left ,grey,lightgrey);width: 45px;float: left;">
  <a href="home.php" id="a">Home<img style="float: right;width: 45px;" src="../../assets/images/icons/homec.png"></a>
  <a href="agent.php" id="b">PestAgents<img style="float: right;width: 45px;" src="../../assets/images/icons/agentsc.png"></a>
  <a href="users.php" id="c">Users<img style="float: right;width: 45px;" src="../../assets/images/icons/usersc.png"></a>
   <a href="feedback.php" id="d">Feedback<img style="float: right;width: 45px;" src="../../assets/images/icons/feedback.png"></a>
  <!-- <a href="#" id="d">AddAgent<img style="float: right;width: 45px;" src="../../assets/images/icons/addagentc.png"></a> -->
  <a href="orders.php" id="e">Order_list<img style="float: right;width: 45px;" src="../../assets/images/icons/orderlistc.png"></a>
  <a href="delivereds.php" id="f">DeliveredS<img style="float: right;width: 45px;" src="../../assets/images/icons/deliver.png"></a>
  <a href="adminpower.php" id="g">AdminPower<img style="float: right;width: 45px;" src="../../assets/images/icons/adminpowerc.png"></a>

</div>



<style type="text/css">
#mySidenav a {
  position: absolute;
  left: -125px;
  transition: 0.3s;
  padding: 7px;
  width: 180px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 1;
  /*height: 400px;*/
}

#mySidenav a:hover {
  left: 0;
}

#a{
  top: 90px;
  background-color: lightgrey;
}

#b{
  top: 160px;
  background-color: lightgrey;
}

#c {
  top: 230px;
  background-color: lightgrey;
}

#d {
  top: 300px;
  background-color: lightgrey;
}

#e{
  top: 370px;
  background-color: lightgrey;
}

#f{
  top: 440px;
  background-color: lightgrey;
}

#g {
  top: 510px;
  background-color: lightgrey;
}
/*#h {
  top: 580px;
  background-color: lightgrey;
}*/
/*
#h {
  top: 580px;
  background-color: #555
}*/
</style>
