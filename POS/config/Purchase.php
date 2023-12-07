<?php
	include'dbcon.php';
	$OrderID = $_POST['OrderID'];
	$Mode= $_POST['Mode'];
	

	
	//adding or update data/variable
	
	$Pur = "UPDATE tbl_product SET Mode='Purchase' WHERE OrderID='{$OrderID}'";
	
	//checking of updating user
	
	if ($conn->query($Pur) === TRUE ){
		header("Location: ../Cashier/Cashier.php");
	} else {
		echo"error".$conn->error;
	}
?>