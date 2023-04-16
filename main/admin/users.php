<?php
  require_once "header.php";
?>


<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_filter_table -->
<!-- 
tooltip
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_tooltip -->

<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_user_rating -->

 <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->


<div class="container">
<div class="row">
  <div class="col-md-6" style="box-shadow: 3px 3px 3px 3px lightgrey;">
        <h2 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">CUSTOMERS</h2>
      <hr>

       <img  style="width: 100px;float: left;margin-left: 270px;" src="../../assets/images/search.jpg">
       <input style="width: 30%;float: right;margin-top: 30px;" class="form-control" id="myInput" type="text" placeholder="Search..">
  
  <table class="table table-hover table-bordered">
    <thead>
      <tr class="table-warning">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody id="myTable">
     <?php
      $rows=$objproject->select("id,name,email,username","usertb","1=1");
      // echo "$rows";
      // pre($rows);
      $rows=json_decode($rows,true);
      // pre($rows);
      if($rows==0)
      {
        echo "No Customer!!";
        return;
      }
      foreach($rows as $row){
         // pre($row);
     ?>
     <!-- start -->

      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['username']; ?></td>
      </tr>
      <!-- end -->
      <?php
            }
      ?>
    </tbody>
  </table>
<br>
<br>
</div>
<div class="col-md-6" style="border-left:1px solid lightgrey ;box-shadow:5px 5px 5px 5px lightgrey;">
       <h2 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">SERVICES</h2>
      <hr>

       <img  style="width: 100px;float: left;margin-left: 270px;" src="../../assets/images/search.jpg">
       <input style="width: 30%;float: right;margin-top: 30px;" class="form-control" id="myInput1" type="text" placeholder="Search..">
  <br>
  <br>
  <br>
  <table class="table table-hover table-bordered">
    <thead>
      <tr class="table-warning">
        <th>Servicename</th>
        <th>Username</th>
        <th>PestAgent</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody id="myTable1">
      <tr>
        <td>termite control</td>
        <td>richuser</td>
        <td>agent1</td>
        <td>progress</td>
      </tr>
      <tr>
        <td>ant control</td>
        <td>abcuser</td>
        <td>agent2</td>
        <td>completed</td>
      </tr>
      <tr>
        <td>bedbugs ontrol</td>
        <td>rupzuser</td>
        <td>agent3</td>
        <td>failed</td>
      </tr>
    </tbody >
  </table>
</div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#myInput1").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});
</script>