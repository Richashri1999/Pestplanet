<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <div>
  <h2>Payment Gateway </h2>
 </div>

<div>
<table>

 <tr><td>txnid</td><td><input type="hidden" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
 <tr><td>success url</td><td><input type="hidden" name="surl" value="http://localhost/pestplanet/pestplanet/assets/PAYMENT_rich/success.php" size="64" /></td></tr>
 <tr><td>failure url</td><td><input type="hidden" name="furl" value="http://localhost/pestplanet/pestplanet/assets/PAYMENT_rich/fail.php" size="64" /></td></tr>
 <tr><td><input type="submit" /></td><td><input type="reset" /></td></tr>

</table>
</div>
</body>

</html>
<script type="text/javascript">
	window.location.href="../../assets/PAYMENT_rich/form_process.php"
</script>