<?php
	include'../config/dbcon.php';
	include'../plugins/bootstrap.php';


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
<head>
	<style>
		span{
			text-decoration: none ;
			font-family:Helvetica ;
			color: black;
			background-color: rgb(240, 240, 240) ;
			border : 1px outset rgb(240, 240, 240);
			padding: 5px;
			border-radius: 8px ;
			margin: 20px 0 ;
			
		}
		.Ds{
			position: absolute;
			right : 2% ;
			margin-top: -55px ;
		}
		.Cs{
			position: absolute;
			right : 9% ;
			margin-top: -55px ;
		}
		.In{
			position: absolute;
			right : 15% ;
			margin-top: -55px ;
		}
				
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
<center>

		<!--NavBar-->
		 <ul class="head">
        <li><a href="../admin/dashboard.php">Admin</a></li>
        <li><a href="../Inventory/InventoryClerk.php">Inventory</a></li>
		<li><a href="../Manager/Manager.php">Manager</a></li>
		<li><a href="../admin/ArchieveDashboard.php">Archieve Dashboard</a></li>
        <li style="position : absolute ; right:10"><a href="../LogForm.php">Log Out</a></li>         
      </ul>


	<h3>USER MANAGEMENT</h3> 
	
	
	
	<table class="table table-bordered table-hover">
	
		<tr>
			<td>userID</td>
			<td>Username</td>
			<td>Password</td>
			<td>FirstName</td>
			<td>LastName</td>
			<td>Status</td>
			<td>Position</td>
			<td>Action</td>
		</tr>
		
	<form method="POST" action="../config/AddUser.php">
			
		<tr>
			<td></td>
			<td><input type="email" name="username"></td>
			<td><input type="text" name="password"></td>
			<td><input type="text" name="Fname"></td>
			<td><input type="text" name="Lname"></td>
			<td><input type="text" name="status"></td>
			<td>
				<select name="Position" required>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</td>
		
			<td>
				<button type="submit" class="btn btn-success >
					<span class="glyphicon glyphicon-plus>ADD
				</button>
			</td>
		</tr>
		</form>
	<?php
		$sqlUserList = "SELECT * FROM tbl_samp1 where status='Active'";
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
	<!--
			<td>
			
				<button><a href="updateUser.php">EDIT</a></button>
			
			</td>
							-->
			<form method="POST" action="../config/FuckingDelete.php">
				
			<td>
				<input type="hidden" name="userID" value="<?=$row['userID']?>">
				<button>Arch</button>
			
			</td>
			</form>
			
		</tr>
		<?php
			}
		?>
		
	</table>	
</center>

