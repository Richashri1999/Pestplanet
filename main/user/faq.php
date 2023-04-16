<?php
   require_once "header.php";
?>
<!-- Intro Banner -->
<div class="container-fluid" style="box-shadow: 2px 2px 2px 2px lightgrey;">
  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/faq4.jpg	');height: 470px;background-repeat: no-repeat;margin-top: 75px;background-size: cover;">
  </div>
 </div> 
 <br>
 <br>
<!--End Intro Banner -->
<!-- middle -->
<div style="padding: 50px;background-image: linear-gradient(to right,blue,lightblue,lightgrey,lightblue,grey);" >
	<h2 style="color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center;">Frequently Asked Questions</h2>
  <hr>
<button class="accordion">What all are covered under "3 years warranty"?</button>
<div class="panel">
  <p>We give warranty for the nets for its durability for 3 years. Any defects in the netting because of poor quality material or faulty installation shall be rectified by Hicare without additional charges. Note: Hicare is not responsible for the damage caused to the product by external force. For e.g. nets being cut or damaged during civil, carpenter, electrician etc.</p>
</div>


<button class="accordion">My child suffers from asthma. Is my child safe to stay during the service?</button>
<div class="panel">
  <p>Cockroach allergens - their skin, dead cockroaches and droppings are known to trigger asthma attacks in children. In such case, it would be better if your child is not present during the services. During the process, we may be flushing out adult cockroaches and destroying them.</p>
</div>

<button class="accordion">What if I touch areas that have been sprayed?</button>
<div class="panel">
  <p>Treated areas should be avoided for touching until dry. In case of accidental touching not much to worry, but wash the exposed skin with soap and water. The spray emulsions that we apply are the most safe pesticides and been diluted to such extent that do not cause any ill effects. Also, these aspects are properly explained by our Service Technicians in "Do's and Don'ts". Our chemicals do not have residual effect hence are safe in such condition. We always advise our customers to listen carefully to all Do's and Don'ts by our technicians.</p>
</div>

<button class="accordion">Do I need to wash everything after the treatment?</button>
<div class="panel">
  <p>No, in case of Cockroach treatment or general pest management, there is no need to wash after the treatment.</p>
</div>

</div>
<!-- middle -->
<br>
<br>
<br>
<?php
  re("footer");
?>

<style type="text/css">
	.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  margin-top: 20px;
}
.active, .accordion:hover {
  background-color: #ccc;
}
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
  transition: 2s ease;
}
</style>

<script type="text/javascript">
	var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script>