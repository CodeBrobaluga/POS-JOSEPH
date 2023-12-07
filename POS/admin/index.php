<?php
		
	session_start ();
	
	$onSession = $_SESSION['onSession'] ;
	$adminActive = $_SESSION['adminActive'] ;
	
	if($onSession!=True) {
		header("Location:../LogForm.php");
	}
	
	if($adminActive!=True) {
		header("Location:../LogForm.php");
	}
?>