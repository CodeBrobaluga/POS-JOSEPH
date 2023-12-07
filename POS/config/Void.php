<?php
	include'dbcon.php';
	$OrderID = $_POST['OrderID'];
	$Mode= $_POST['Mode'];
	

	
	//adding or update data/variable
	
	$Void = "UPDATE tbl_product SET Mode='OFF' WHERE OrderID='{$OrderID}'";
	
	//checking of updating user
	
	if ($conn->query($Void) === TRUE ){
		header("Location: ../Cashier/Cashier.php");
	} else {
		echo"error".$conn->error;
	}
?>