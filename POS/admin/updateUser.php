
<?php
	include'../config/dbcon.php';
	include'../plugins/bootstrap.php';		
?>
<html>
<head>
</head>
<body>
<center>
		<form method="POST" action="../config/editUser.php">
			<h3>EDIT YOUR DATA</h3>
			UserID<input type="number" name="userID"></br></br>
			Username<input type="email" name="username"></br></br>
			Password<input type="text" name="password"></br></br>
			First Name <input type="text" name="Fname"></br></br>
			Last Name<input type="text" name="Lname"></br></br>
			Status <input type="text" name="status"></br></br>
			Position
				<select name="Position">
					<option value=""></option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select></br></br>
				
			<button type="submit" class="btn btn-success">Save</button>
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
	</div>
</center>
</body>


