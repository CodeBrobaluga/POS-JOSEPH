<?php
	include'dbcon.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$Fname= $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$Status= $_POST['status'];
	$Position = $_POST['Position'];
	
	//adding or update data/variable
	
	$AddingUser = "INSERT INTO tbl_samp1 (userID,username,password,Fname,Lname,status,Position)
					value (null,'{$username}','{$password}','{$Fname}','{$Lname}','{$Status}','{$Position}')";
	//checking of updating user
	
	if ($conn->query($AddingUser) === TRUE ){
		header("Location: ../admin/dashboard.php");
	} else {
		echo"error".$conn->error;
	}
?>