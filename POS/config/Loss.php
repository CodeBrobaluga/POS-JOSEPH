<?php
	include'dbcon.php';
	$Status= $_POST['Status'];
	$ProductID  = $_POST['ProductID'];
	
	
	
	//adding or update data/variable
	
	$Del = "UPDATE tbl_order SET Status='Loss' WHERE ProductID ='{$ProductID }'";
	
	//checking of updating user
	
	if ($conn->query($Del) === TRUE ){
		header("Location: ../Inventory/InventoryClerk.php");
	} else {
		echo"error".$conn->error;
	}
?>