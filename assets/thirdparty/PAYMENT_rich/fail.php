<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    #container
    {
      width: 60%;
      margin: 30px auto;
      box-shadow:10px 10px 10px 10px lightpink;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
<div id="container">

 <div>
  
  <br>
  <h1 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">Payment Failure</h1>
  <hr>
 </div>


  <div>
  <?php 
   if(isset($_POST['status'])){
    if($_POST['status']=="failure"){
     echo "<p>Payment Failed.<br>Details Are Below.</p>";
     echo "<p>Failure Reason: ".$_POST['unmappedstatus']."</p>";
     echo "<p>Txn Id: ".$_POST['txnid']."</p>";
     echo "<p>Name: ".$_POST['firstname']."</p>";
     echo "<p>Email: ".$_POST['email']."</p>";
     echo "<p>Amount: ".$_POST['amount']."</p>";
     echo "<p>Phone No: ".$_POST['phone']."</p>";
     echo "<p>Product Info: ".$_POST['productinfo']."</p>";
    }
   }

    ?>
 </div>

 <img src="../../images/oops.jpg" style="height: 200px;">

</div>
</body>

</html>
