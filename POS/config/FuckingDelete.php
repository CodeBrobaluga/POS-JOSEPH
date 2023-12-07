<?php
	include'dbcon.php';
	$Status= $_POST['status'];
	$userID = $_POST['userID'];

	
	//adding or update data/variable
	
	$Del = "UPDATE tbl_samp1 SET status='INACTIVE' WHERE userID='{$userID}'";
	
	//checking of updating user
	
	if ($conn->query($Del) === TRUE ){
		$_SESSION['UpdateMessage'] = "Update Successful" ;
		header("Location: ../admin/dashboard.php");
	} else {
		echo"error".$conn->error;
	}
?>