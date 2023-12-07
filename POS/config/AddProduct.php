<?php
	include'dbcon.php';
	$ProductID = $_POST['ProductID'];
	$ProductName = $_POST['ProductName'];
	$Category = $_POST['Category'];
	$Amount= $_POST['Amount'];
	$Stock = $_POST['Stock'];
	$Status = $_POST['Status'];


	
	//adding or update data/variable
	
	$AddingUser = "INSERT INTO f_product (ProductID,ProductName,Category,Amount,Stock,Status)
					values (null,'{$ProductName}','{$Category}','{$Amount}','{$Stock}','{$Status}')";
	//checking of updating user
	
	if ($conn->query($AddingUser) === TRUE ){
		header("Location: ../Inventory/InventoryClerk.php");
	} else {
		echo"error".$conn->error;
	}
?>