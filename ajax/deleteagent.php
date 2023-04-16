<?php
	require_once '../class/project.php';

	$id = $_POST["id"];
	$objproject->delete("pestcontrolagent", "id = '$id'");
	echo "Pest-Agent is removed";

?>