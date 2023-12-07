<?php
	include'dbcon.php';
	$userID = $_POST['userID'];
	//adding or update data/variable
	
	$Del = "DELETE FROM tbl_samp1 WHERE userID='{$userID}'";
	
	//checking of updating user
	
	if ($conn->query($Del) === TRUE ){
		$_SESSION['UpdateMessage'] = "Update Successful" ;
		header("Location: ../admin/ArchieveDashboard.php");
	} else {
		echo"error".$conn->error;
	}
?>