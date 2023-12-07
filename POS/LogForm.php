<?php
session_start();
?>
 <html>
 <head>
	<link href="plugins/LogForm.css" rel="stylesheet" >
 <head>
 <body>
 
 <div class="pos">
 <div class="container">
        <form class="form" action="config/Login_authentication.php" method="POST">
            <p class="title">Login Form</p>
            <input placeholder="Username" class="username input" type="text" name="username">
            <input placeholder="Password" class="password input" type="password" name="password">
            <button class="btn" type="submit">Login</button>
        </form>
 </div>
  </div>
 </body>
 </html>