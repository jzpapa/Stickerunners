<?php

include('includes/database.php');

$get_id =$_GET['id'];
	
	mysqli_query($con,"DELETE FROM item WHERE prodID = '$get_id'");
	header("Location: adminproduct.php");

?>
