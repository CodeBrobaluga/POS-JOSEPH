<?php
	include'../config/dbcon.php';


	session_start ();
	
	
	$onSession = $_SESSION['onSession'] ;
	$adminActive = $_SESSION['adminActive'] ;
	
	if($onSession!=True) {
		header("Location:../LogForm.php");
	}
	
	if($adminActive!=True) {
		header("Location:../LogForm.php");
	}

	include'../config/dbcon.php';
	
	$activeUser = $_SESSION['ActiveUser'];
	
	$sqlCurrentUser = "SELECT * FROM tbl_samp1 WHERE userID='{$activeUser}'";
	
	$result = $conn->query($sqlCurrentUser);
	
	if($result -> num_rows > 0){
		while ($rowUserLogin = $result->fetch_assoc()){
	
?>

<?php

		}
	}
	include'../plugins/Glypicon.php';
?>
<html>
<head>
	<style>
							*{
				margin: 0;
			}ul.head {
				list-style-type: none;
				margin: 0;
				padding: 0;
				background-color: #f2f2f2;
				width: 100%;
				top: 0;
				display: flex;
				justify-content: center;
				place-items: center;
				height: 70px;
				font-size: 20px;
			}
			  li {
				float: left;
			  }
			  
			  li a, .dropbtn {
				display: inline-block;
				color: black;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			  }
			  
			  li a:hover, .dropdown:hover .dropbtn {
				background-color: gainsboro;
			  }
			  .nav-link{
				height: 3.1em;
				display : grid ;
				place-items: center;
			  }
			a {
				text-decoration: none;
			}input{
				text-align: center;
			}
			body{
				background-color: wheat ;
			}
	</style>
</head>
		<!--NavBar-->
		 <ul class="head">
        <li><a href="../admin/dashboard.php">Admin</a></li>
        <li><a href="../Inventory/InventoryClerk.php">Inventory</a></li>
		<li><a href="../Manager/Manager.php">Manager</a></li>
		<li><a href="../admin/dashboard.php">Dashboard</a></li>
        <li style="position : absolute ; right:10"><a href="../LogForm.php">Log Out</a></li>         
      </ul>
<body>
<center>

	<h3>ARCHIEVE MANAGEMENT</h3>
	
	
	
	<table class="table table-bordered table-hover">
	
		<tr>
			<td>userID</td>
			<td>Username</td>
			<td>Password</td>
			<td>FirstName</td>
			<td>LastName</td>
			<td>Status</td>
			<td>Position</td>
		</tr>
	
	<?php
		$sqlUserList = "SELECT * FROM tbl_samp1 where status='InActive'";
		$result = $conn -> query ($sqlUserList);
			while($row = $result -> fetch_assoc()){
				
	?>
	
		<tr>
			<td><?=$row['userID']?></td>
			<td><?=$row['username']?></td>
			<td><?=$row['password']?></td>
			<td><?=$row['Fname']?></td>
			<td><?=$row['Lname']?></td>
			<td><?=$row['status']?></td>
			<td><?=$row['Position']?></td>
			<form method="POST" action="../config/ArchieveForm.php">
				
			<td>
				<input type="hidden" name="userID" value="<?=$row['userID']?>">
				<button>Restore</button>
			
			</td>
				</form>
			<form method="POST" action="../config/PerDel.php">				
			<td>
				<input type="hidden" name="userID" value="<?=$row['userID']?>">
				<button>Del</button>
			
			</td>
			</form>
		
		</tr>
		<?php
			}
		?>
		
	</table>	
</center>

</body>
</html>