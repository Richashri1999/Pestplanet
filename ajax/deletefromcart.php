<?php
	require_once '../class/project.php';

	$sid = $_POST["sid"];
	$objproject->delete("carttb", "sid = '$sid'");
	echo "Service is removed From the Cart.";

?>