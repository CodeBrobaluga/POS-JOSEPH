<?php
	include'dbcon.php';
	$ProductID = $_POST['ProductID'];
	$ProductName = $_POST['ProductName'];
	$Amount = $_POST['Amount'];
	$Stock = $_POST['Stock'];
	$Status = $_POST['Status'];
	
	//adding or update data/variable
	
	$EditData = " UPDATE f_product SET ProductName='{$ProductName}',Amount='{$Amount}'
			,Stock='{$Stock}',Status='{$Status}' WHERE ProductID='{$ProductID}';";
	
	//checking of updating user
	
	if ($conn->query($EditData) === TRUE ){
		header("Location: ../Inventory/InventoryClerk.php");
	} else {
		echo"error".$conn->error;
	}
?>
