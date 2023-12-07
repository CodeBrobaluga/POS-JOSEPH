<?php
	$servername = "localhost" ;
	$username = "root" ;
	$password= "";
	$dbname = "db_flowershop";

	$conn = new mysqli ( $servername, $username, $password, $dbname );

	if($conn -> connect_error){
		echo("Connection error:".$conn->connect_error);
	}else{
		//echo("Connection successful")//
	}
?>