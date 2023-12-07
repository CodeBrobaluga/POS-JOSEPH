<?php
	session_start();
	include 'dbcon.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sqlLogin = "SELECT * FROM tbl_samp1 WHERE username='{$username}' and password='{$password}'";
	
	$result = $conn->query($sqlLogin);
	
	if($result -> num_rows > 0){
		while ($rowUserLogin = $result->fetch_assoc()){
			$_SESSION['ActiveUser'] = $rowUserLogin['userID'];
			$_SESSION['onSession'] = 1;
			$_SESSION['adminActive'] = 1 ;
			$_SESSION['userActive'] = 1 ;
			
		if(($rowUserLogin['Position']) == 1 ){
			
			header("Location:../admin/dashboard.php");
			
		}else if(($rowUserLogin['Position']) == 2 ){
				
				header("Location:../Inventory/InventoryClerk.php");
			}
		
		else if(($rowUserLogin['Position']) == 3 ){
				
				header("Location:../Cashier/Cashier.php");
			}
			
		else if(($rowUserLogin['Position']) == 4 ){
				
				header("Location:../Manager/Manager.php");
			}
	}
	
	}else{
		header("Location:../index.php");
	}
?>