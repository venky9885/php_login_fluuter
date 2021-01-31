<?php 
	include 'Config.php';
	
	$con = new Mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(Mysqli_errno());
	mysqli_set_charset($con,"utf8");
 ?>
