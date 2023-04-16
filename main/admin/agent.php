<?php
  require_once "header.php";
?>


<div class="container">
  <div class="row">
  <div class="col-md-12" style="box-shadow: 3px 3px 3px 3px lightgrey;">
        <h2 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">PEST-AGENTS</h2>
      <hr>

<div>
       <img  style="width: 100px;float: left;margin-left: 670px;" src="../../assets/images/search.jpg">
       <input style="width: 30%;float: right;margin-top: 30px;" class="form-control" id="myInput" type="text" placeholder="Search..">
       </div>
  <table class="table table-hover table-bordered">
    <thead>
      <tr class="table-primary">
        <th>Name</th>
        <th>Email</th>
        <th>Phone no</th>
        <th>Service-Specialist</th>
        <th>
          Action
        </th>
        <th>Status</th>
      </tr>
    </thead>

   
    <tbody id="myTable" >
        <?php
             $rows = $objproject->select("*", "pestcontrolagent", "1=1");

              // pre($rows);
              $rows = json_decode($rows, true);
              // pre($rows);
              
              foreach ($rows as $row)
              {

    ?>
    <!-- start -->
      <tr id="rowagent">

        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phoneno']; ?></td>
        <td><?php echo $row['servicespecialist']; ?></td>
        <td>
          <button class="btn-primary dltagent" id="<?php echo $row['id']; ?>">delete</button>
          
        </td>
        <td><a href="#">AVL</a></td>
      </tr>
      <!-- end -->
    <?php
}
    ?>
    </tbody>
  </table>

  <br>
<br>

<div style="float:right">
  <a style="
                    font-size: 18px;
                    color: #fff;
                    font-family: 'Montserrat', sans-serif;" class="btn btn-danger"  data-toggle="modal" href="#myModal">Add-New </a>

</div>
<br>
<br>
<br>
<!-- </div> -->
<!-- 
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
      <tr class="table-primary">
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
    </tbody>
  </table>
</div> -->




<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <img src="../../assets/images/icons/addagentc.png">
        <h4 class="modal-title">Add Pest-Agent</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
              <div class="col-lg-12">
                <form id="addagentform" name="addagentform" method="post">
                  <div class="form-group">
                    <input type="text" name="Name" id="Name" tabindex="1" class="form-control" placeholder="Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Email Address" value="">
                  </div>
                   <div class="form-group">
                    <input type="text" name="phoneno" id="phoneno" tabindex="3" class="form-control" placeholder="Phone Number" value="">
                  </div>
                  <div class="form-group">
                    <input type="Service-Specialist" name="Service-specialist" id="Service-specialist" tabindex="2" class="form-control" placeholder="Service-specialist">
                  </div>
                  <div class="form-group">
                    <input type="pincode" name="pincode" id="pincode" tabindex="2" class="form-control" placeholder="Area-Pincode">
                  </div>
                  
                  <div class="form-group  text-center">
                    
                  <button type="button" name="btnaddagent" id="btnaddagent"  class="form-control btn btn-danger">Add</button>
                      
                  </div>
                </form>

                  <div class="form-group text-danger text-center" id="err1"></div>
                
                
              </div>
            </div>
      </div>

      <!-- Modal footer -->
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>







</div>
</div>  <script type="text/javascript">
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  // $("#myInput1").on("keyup", function() {
  //   var value = $(this).val().toLowerCase();
  //   $("#myTable1 tr").filter(function() {
  //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  //   });
  // });

  $("#btnaddagent").click(function(){
    // alert()
    // exit();

    data = $("#addagentform").serialize()
    // alert(data);
    // exit();

    $.ajax({
      url : "../../ajax/addagent.php",
      data : data,
      type : "post",
      success : function(result){
        $("#err1").html("please wait...")

        setTimeout(function(){
            $("#err1").html(result)
        }, 1000)

        location.reload();
      }
    })
  })

  $(".dltagent").click(function()
  {

      var result = confirm("Want to remove this Pest-Agent's record?");
if (result) 
  {
      $(this).parentsUntil("#rowagent").parent().slideUp(1000) ;
    // alert("okiee");
               id  = $(this).attr("id");
               // alert(id);
               // return;

    $.ajax({
                  url : "../../ajax/deleteagent.php",
                  data : "id=" + id,
                  type: "post",
                  success: function(response){
                    setTimeout(function()
                     {
                    // window.location.href = "cart.php";
                    alert(response);
                      
                     },1000);
                    // alert(response);

                  }
          })
  }
      

  })

});
</script>


