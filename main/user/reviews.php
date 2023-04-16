<!-- https://pixabay.com/images/search/feedback/ -->

<?php
    require_once "header.php";
    require_once "../../class/project.php";

    $usernm=$_SESSION['username'];
    // echo $usernm;
?>
<!-- Intro Banner -->
<div class="container-fluid" style="box-shadow: 2px 2px 2px 2px lightgrey;">
  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/feedback/review.jpg');height: 470px;background-repeat: no-repeat;margin-top: 75px;background-size: cover;">
  </div>
 </div> 
<!--End Intro Banner -->
<!-- middle -->





<div class="container-fluid" style="margin-top: 20px;padding: 60px;">
    <h2 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">Feedback</h2>
  <hr>
    <div class="row" >
    
  
    <table width="100%" border="0">
      <div class="col-md-9 col-md-offset-0">
        <tr><td width="77%">
        <div class="">
          <form class="form-horizontal" method="post">
          <fieldset>
    


    <?php
    $uerdata=$objproject->select("*","usertb","username='$usernm'");
    $uerdata=json_decode($uerdata,true);
    // pre($uerdata);
    $row=$uerdata[0];

    ?>
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Full Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" value="<?php echo $row['username'] ?>" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" value="<?php echo $row['email'] ?>" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>
              </div>
            </div>


            <!-- Rating -->
            <!-- <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your rating</label>
              <div class="col-md-9">
                <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
              </div>
            </div>
         -->
<div class="rating">
  <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</div>
<br>
<button type="button" class="btn btn-primary btn-md" id="sendfeedback" name="sendfeedback">Submit</button>
<button type="reset" class="btn btn-default  btn-md">Clear</button>


    </td>
    <td align="center" valign="top" width="23%">
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-center" style="padding: 0px;">
                <img src="../../assets/images/feedback/bg1.jpg" width="700px;" /><br>
                <br>
                
              </div>
            </div>
          </fieldset>
          </form>
        </div>
    </div>
    </td>
    </tr>
    </table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>







<!-- middle end -->



<!-- testimonials -->
<div style="box-shadow: 2px 2px 2px 2px grey; background-image: linear-gradient(lightblue,lightgrey,lightgrey,lightblue);">
<div class="container" id="richtesti" style="margin-left: 420px;box-shadow: 5px 5px 6px 5px lightblue;padding-left: 0px;width: 610px">
    <img src="../../assets/images/feedback/review2.jpg">
</div>
<br>
<div style="width: 900px;background-image: linear-gradient(to left ,grey,lightgrey);padding-left: 20px;">
  <div class="container testimonials zoom" >
  <!-- <img src="bandmember.jpg" alt="Avatar" style="width:90px"> -->
  <h5>Richashri Mishra</h5>
  <span>richamishra201995@gmail.com</span>
  <p>a web disaster.</p>
</div>

 <div class="container testimonials zoom" >
  <!-- <img src="bandmember.jpg" alt="Avatar" style="width:90px"> -->
  <h5>Richashri Mishra</h5>
  <span>richamishra201995@gmail.com</span>
  <p>a web disaster.</p>
</div>

 <div class="container testimonials zoom" >
  <!-- <img src="bandmember.jpg" alt="Avatar" style="width:90px"> -->
  <h5>Richashri Mishra</h5>
  <span>richamishra201995@gmail.com</span>
  <p>a web disaster.</p>
</div>

<div class="container testimonials zoom">
  <!-- <img src="avatar_g2.jpg" alt="Avatar" style="width:90px"> -->
  <h5>Misty</h5>
  <span>richamishra201995@gmail.com</span>
  <p>better than others</p>
</div>
</div>

<br>
<br>
<br>
</div>
<!-- tesimonials end -->
<br>
<br>
<?php
  re("footer");
?>

<style type="text/css">
.testimonials
{
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin-left: 12px;
  margin-top: 10px;
}
.testimonials span
{
    font-size: 14px;
    font-weight: 300;
    font-style: italic;
}
.testimonials p
{

}


.rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}

.zoom:hover {
  -ms-transform: scale(0.1); /* IE 9 */
  -webkit-transform: scale(0.5); /* Safari 3-8 */
  transform: scale(1.1); 
}
</style>

<script type="text/javascript">
$(document).ready(function(){
    // alert()

$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});

$("#sendfeedback").click(function()
{
  alert("Feedback Submitted!!");
})
})
</script>