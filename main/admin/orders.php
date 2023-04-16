<?php
  require_once "header.php";
  $rows=$objproject->select("*","ordertb o,orderdetails od","1=1 and o.status='pending'");
  $rows=json_decode($rows, true);
  // pre($rows);
?>


<div class="container" style="box-shadow: 5px 5px 5px 5px lightgrey;padding: 10px; ">
  <h2 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">ORDERS_PENDING</h2>
      <hr>

      
  <table class="table table-hover table-bordered">
    <thead>
      <tr class="table-primary">
        <th>OrderID</th>
        <th>ServiceName</th>
        <th>ServiceType</th>
        <th>Date</th>
        <th>Time</th>
        <th>Cost</th>
        <th>Pest-Agent</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody id="myTable">
        <?php
        if($rows==0)
          echo "No Orders Pending!!";
        else
        {
          foreach($rows as $row)
          {
        ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['sname'] ?></td>
          <td><?php echo $row['tymfrm'];?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['time']; ?></td>
          <td><?php echo $row['scost']; ?></td>
          <td>
            <?php
                

                  $objproject->dropdownlist("ddlpestagent", "id,name", "pestcontrolagent", "1=1", "form-control");

            ?>
          </td>
          <td><a id="confirmorder" href="#" >Confirm</a></td>
        </tr>
        <?php 
      }
    }
        ?>
        
    </tbody>
  </table>
  <br>
  <br>
  <br>
  <br>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#confirmorder").click(function(){
    // alert();
    ddlpestagent=$("#ddlpestagent").find("option:selected").text();
     if(ddlpestagent=="Select")
     {
      alert("Please choose a Pest-agent !!");s
     }
     else
     {
    // alert(ddlpestagent);
    data=ddlpestagent;
      $.ajax({
        url:"../../ajax/confirmorder.php",
        data:"agennm="+data+"&oid",
        type:"post",
        success:function(res)
        {
          // alert(res);
        }
      })
     }
      


  })
});
</script>