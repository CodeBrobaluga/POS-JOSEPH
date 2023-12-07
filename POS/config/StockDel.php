<?php
	include'dbcon.php';
	$ProductID = $_POST['ProductID'];
	//adding or update data/variable
	
	$Del = "DELETE FROM tbl_order WHERE ProductID='{$ProductID}'";
	
	//checking of updating user
	
	if ($conn->query($Del) === TRUE ){
		$_SESSION['UpdateMessage'] = "Update Successful" ;
		header("Location: ../Inventory/InventoryClerk.php");
	} else {
		echo"error".$conn->error;
	}
?>