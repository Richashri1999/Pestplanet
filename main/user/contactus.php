<?php
  require_once "header.php";
?>
<!-- Intro Banner -->
<div class="container-fluid" style="box-shadow: 2px 2px 2px 2px lightgrey;">
  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/contactus/c2.jpg	');height: 470px;background-repeat: no-repeat;margin-top: 75px;background-size: cover;">
  </div>
 </div> 
<!--End Intro Banner -->
<br>

<div class="container">
  <h2 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">Contact us</h2>
  <hr>
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
<?php
   re("footer");
?>