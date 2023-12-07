<?php
	include'../plugins/bootstrap.php';
	include '../config/dbcon.php';
?>
<html lang="en">
<head>
  <title>Cashier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
  <style>
  
		.Fbdy{
			background-color : white;
		}
		.card-text{
			font-family: Tahoma;
			color: black;
		}
		.card-footer{
			color: orange ;
		}
		#huy{
			width: 23% ;
		}
		.grid-container {
			  display: grid;
			  grid-template-columns: auto auto ;
			  padding: 10px;
		}
		.grid-item {
			  background-color: rgba(255, 255, 255, 0.8);
			  padding: 20px;
			  font-size: 20px;
			  text-align: center;
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

	
  </style>
</head>
<body style="background-color:rgba(255, 172, 43, 0.1)">

		<!--NavBar-->
		 <ul class="head">
        <li><a href="../admin/dashboard.php">Admin</a></li>
        <li><a href="../Inventory/InventoryClerk.php">Inventory</a></li>
		<li><a href="../Manager/Manager.php">Manager</a></li>
        <li style="position : absolute ; right:10"><a href="../LogForm.php">Log Out</a></li>         
      </ul>



					<!--Upper Pills Start-->


				<div class="container mt-4 col-lg-7 .ms-auto h-4">
				  <center><h2 class="fw-bold">Flower Shop</h2></center>
				  <br>
				  <!-- Nav pills -->
				  <ul class="nav nav-pills bg-light" role="tablist">
					<li class="nav-item">
					  <a class="nav-link active p-2 " data-bs-toggle="pill" href="#home">Roses</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-bs-toggle="pill" href="#menu1">Flowers</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-bs-toggle="pill" href="#menu2">Boquet</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-bs-toggle="pill" href="#menu3">Void</a>
					</li>
					
				  </ul>

						<!--Upper Pills End-->

						<!--Body Pills Start-->

  <!-- Tab panes start -->
  
		<!--Red Roses Start-->
		 
		 
		 
		 

					  <!--<img src="../img/3.jpg" class="card-img-top" alt="...">-->
					  
			  <div class="tab-content">
			  		
				<div id="home" class="container tab-pane active shadow p-5" style="background-color: white"><br>
					
					<div class="card " style="width: 18rem;">
					 <a href="" class="" data-bs-toggle="modal" data-bs-target="#pic1">
						  
							<?php
				$sqlUserList = "SELECT * FROM f_product where Category='Roses' and Stock > 0";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					
						
			?>
						 
						  
						  <div class="card-body">
							<center> <h3 class="card-text">
										<?=$row['ProductName']?>
									</h3>
									</center>
						  </div>
						  
						   <div class="card-footer">
							<center>
							<span style="color: black ;">Price: </span><?=$row['Amount']?>
							<span style="color: black; padding-left: 10px">Stock: </span><?=$row['Stock']?>
							</center>
								</div>
										<?php
											}
										?>
										</a>
								
							</div>
						
					</div>
			
				 
				
			
		  <!--Red Roses End-->
		  
		  <!--WE Purple Flower Start-->

		

						 <!--<img src="../img/8.webp" class="card-img-top" alt="..."> -->
				<div class="container tab-pane fade shadow p-5"  id="menu1" style="background-color: white"><br>
					<a href="" class="" data-bs-toggle="modal" data-bs-target="#pic2"> 
					<div class="card" style="width: 18rem;">
						 
								<?php
										$sqlUserList = "SELECT * FROM f_product where Category='Flower' and Stock > 0";
										$result = $conn -> query ($sqlUserList);
											while($row = $result -> fetch_assoc()){
												
											
												
									?>
			

							 
								<div class="card-body">
									<center> <h3 class="card-text">
										<?=$row['ProductName']?>
									</h3>
									</center>
							</div>
				  
						<div class="card-footer">
							<center>
							<span style="color: black ;">Price: </span><?=$row['Amount']?>
							<span style="color: black; padding-left: 10px">Stock: </span><?=$row['Stock']?>
							</center>
							</div>

								<?php
									}
								?>
						
						 </a>
				
					</div>
				</div>
				

			  <!--WE Purple Flower End-->
			  
			  <!--Baby Pink Boquet Start-->
			  
	
			<!--  <img src="../img/6.jpg" class="card-img-top" alt="..." value="Baby Pink Boquet"> -->
			<div id="menu2" class="container tab-pane fade shadow p-5" style="background-color: white"><br>
					 <a href="" class="" data-bs-toggle="modal" data-bs-target="#pic3"> 
				 <div class="card" style="width: 18rem;">
				 
			<?php
				$sqlUserList = "SELECT * FROM f_product where Category='Boquet' and Stock > 0";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					
						
			?>
						
							 

							 
						  <div class="card-body">
							<center> <h3 class="card-text">
										<?=$row['ProductName']?>
									</h3>
									</center>
						  </div>
						  
						<div class="card-footer">
														<center>
							<span style="color: black ;">Price: </span><?=$row['Amount']?>
							<span style="color: black; padding-left: 10px">Stock: </span><?=$row['Stock']?>
							</center>
				  </div>
				  
				  <?php
					}
				  ?>
				  							 </a>
				</div>
			</div>
		  
				<!--Baby Pink Boquet End-->
  
					
				<!--Void Start-->
  
    <div id="menu3" class="container tab-pane fade shadow p-5" style="background-color: white"><br>
	
	<center>
				<h3>Void Clerk</h3>
		<table  class="table table-bordered table-hover">

				<tr>
					<th>CustomerName</th>
					<th>Product</th>
					<th>Amount</th>
					<th>Cash</th>	
					<th>Quantity</th>	
					<th>Total Price</th>
					<th>Amend</th>
					
					<th colspan="2">Method</th>
				</tr>
			
		<?php
				$sqlUserList = "SELECT * FROM f_product";
				$result = $conn -> query ($sqlUserList);
					while($list = $result -> fetch_assoc()){
						
					
						
			?>
			
			<?php
				$sqlUserList = "SELECT * FROM f_buyingprocess";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					
						
			?>
			
				<tr>
					<td><?=$row['CustomerName']?></td>
					<td><?=$list['ProductName']?></td>
					<td><?=$list['Amount']?></td>
					<td><?=$row['Cash']?></td>
					<td><?=$row['Quantity']?></td>
					<td><?=$row['TotalPrice']?></td>
					<td><?=$row['Amend']?></td>
					
					<form method="POST" action="../config/Void.php">
						<td>
						
							<input type="hidden" name="OrderID">
							<button style="background-color:hsl(0, 80%, 50%) ; border: 1px outset white; border-radius: 4px ; color: white; padding : 0 6px">
									Void
							</button>
							</form>
							<!--<li class="nav-item" style="position : absolute ; right : 21% ;"
								  data-bs-toggle="modal" data-bs-target="#receipt">
								  <a class="nav-link" data-bs-toggle="pill" href="" >Receipt</a>
								</li>-->
							
							
							
						</td>
						<td>
								<button data-bs-toggle="modal" data-bs-target="#receipt"
								style="background-color: blue ; border: 1px outset white; border-radius: 4px ; color: white; padding : 0 6px">
										Purchase
								</button>							
						
						</td>
					
				</tr>
				
		<?php
				}
			?>
			
							
		<?php
				}
			?>
			
							</table></br></br>
								
								
							<!--TRANSACTION START-->	
								
								
								<h3>Transaction History</h3>
								
		<table  class="table table-bordered table-hover">

				<tr>
					<th>Order</th>
					<th>Amount</th>
					<th>Quantity</th>
					<th>Cash</th>
					<th>Total Price</th>
					<th>Change</th>
					<th>Date</th>
					
				</tr>
			
	<?php
				$sqlUserList = "SELECT * FROM tbl_product where Mode='Purchase'";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					$row['TotalPrice'] = $row['Amount'] * $row['Quantity'] ;
					$row['Change'] = $row['Modal'] - $row['TotalPrice'] ;
						
			?>
			
				<tr>
					<td><?=$row['OrderName']?></td>
					<td><?=$row['Amount']?></td>
					<td><?=$row['Quantity']?></td>
					<td><?=$row['Modal']?></td>
					<td><?=$row['TotalPrice']?></td>
					<td><?=$row['Change']?></td>
					<td><?=$row['datetime']?></td>

				</tr>
				
		<?php
				}
			?>
						
				

		</table>
	</center>

								<!--Void End-->
			
							<!--TRANSACTION END-->	

  </div>
  
  </div>
</div>

<!-- Tab panes end -->


<!-- Modal start -->

<!--ORDER 1 START-->

<div class="modal fade modal-centered-scrollable" id="pic1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	  
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Customer Order</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		
      </div>
      <div class="modal-body">
	  		<?php
				$sqlUserList = "SELECT * FROM f_product where Category='Roses'";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					
						
			?>
	  <center>
	  
			
	  
        <form method="POST" action="../config/BuyProduct.php">
			
					<input type="hidden" name="Stock" value="<?=$row['Stock']?>">
					 <input type="hidden" name="ProductID" value="<?=$row['ProductID']?>">
					 <input type="hidden" name="Amount" value="<?=$row['Amount']?>">
			
			<div class="grid-container">
			<div class="grid-item">Product</div>
			<div class="grid-item"><input type="text" name="ProductName" value="<?=$row['ProductName']?>">
			</div>
			<div class="grid-item">Amount</div>
			<div class="grid-item"><input type="text" name="Amount" value="<?=$row['Amount']?>"></div>
			<div class="grid-item">Stock</div>
			<div class="grid-item"><input type="text" name="Stock" value="<?=$row['Stock']?>"></div>
				  <div class="grid-item">Customer:</div>
				  <div class="grid-item">
						<input type="text" name="CustomerName">
					</div>
				  <div class="grid-item">Cash:</div>
				  <div class="grid-item"><input type="number" name="Cash" required></div>	  
				  <div class="grid-item">Quantity:</div>
				  <div class="grid-item"><input type="number" name="Quantity" required></div>	
				<div class="grid-item">Identifier:</div>
				  <div class="grid-item"><input type="number" name="Identifier" required></div>	 				  
	
				 
				</div>
		
			
		
		</center>
		
		
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="Order">Order</button>
		
		
      </div>
	  </form>
	  <?php
					}
		?>
    </div>
  </div>
</div>

<!--ORDER 1 END-->

<!--ORDER 2 START-->


<?php
				$sqlUserList = "SELECT * FROM f_product where Category='Flower'";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					
						
			?>

<div class="modal fade modal-centered-scrollable" id="pic2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	  
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Customer Order</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		
      </div>
      <div class="modal-body">
	  		
	  <center>
	  
			
	  
        <form method="POST" action="../config/BuyProduct.php">
			
					
			
			<div class="grid-container">
			<div class="grid-item">Product</div>
			<div class="grid-item">
				<input type="text" name="ProductName" value="<?=$row['ProductName']?>">
			</div>
			<div class="grid-item">Amount</div>
			<div class="grid-item">
				<input type="text" name="Amount" value="<?=$row['Amount']?>">
			</div>
				</div>
			<div class="grid-item">Stock</div>
			<div class="grid-item">
				<input type="text" name="Stock" value="<?=$row['Stock']?>">
			</div>
				  <div class="grid-item">Customer:</div>
				  <div class="grid-item">
						<input type="text" name="CustomerName">
					</div>
				  <div class="grid-item">Cash:</div>
				  <div class="grid-item"><input type="number" name="Cash" required></div>	  
				  <div class="grid-item">Quantity:</div>
				  <div class="grid-item"><input type="number" name="Quantity" required></div>	
				<div class="grid-item">Identifier:</div>
				  <div class="grid-item"><input type="number" name="Identifier" required></div>	 				  
	
				 
				</div>
		
			
		
		</center>
		
		
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="Order">Order</button>
		
		
      </div>
	 
	
    </div>
  </div>
</div>
 </form>

  <?php
					}
		?>
<!--ORDER 2 END-->


<!--ORDER 3 START-->

	
<div class="modal fade modal-centered-scrollable" id="pic3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	  
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Customer Order</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		
      </div>
      <div class="modal-body">
	  		<?php
				$sqlUserList = "SELECT * FROM f_product where Category='Boquet' and Stock > 0";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					
						
			?>
	  <center>
	  
			
	  
        <form method="POST" action="../config/BuyProduct.php">
			
					<input   type="hidden" name="Stock" value="<?=$row['Stock']?>">
					 <input   type="hidden" name="ProductID" value="<?=$row['ProductID']?>">
					 <input   type="hidden" name="Amount" value="<?=$row['Amount']?>">
			
			<div class="grid-container">
			<div class="grid-item">Product</div>
			<div class="grid-item"><?=$row['ProductName']?></div>
			<div class="grid-item">Amount</div>
			<div class="grid-item"><?=$row['Amount']?></div>
			<div class="grid-item">Stock</div>
			<div class="grid-item"><?=$row['Stock']?></div>
				  <div class="grid-item">Customer:</div>
				  <div class="grid-item">
						<input type="text" name="CustomerName">
					</div>
				  <div class="grid-item">Cash:</div>
				  <div class="grid-item"><input type="number" name="Cash" required></div>	  
				  <div class="grid-item">Quantity:</div>
				  <div class="grid-item"><input type="number" name="Quantity" required></div>	
				<div class="grid-item">Identifier:</div>
				  <div class="grid-item"><input type="number" name="Identifier" required></div>	 				  
	
				 
				</div>
		
			
		
		</center>
		
		
      </div>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="Order">Order</button>
		
		
      </div>
	  </form>
	  <?php
					}
		?>
    </div>
  </div>
</div>

<!--ORDER 3 END-->
<!--
<div class="modal fade modal-centered-scrollable" id="Confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	  
        

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		
	  </div>
      <div class="modal-body">
			
	 
	
	
	  <center>
	  
		<form>
			<button type="submit" class="btn btn-primary">Order</button>
		</center>
	
      </div>
      <div class="modal-footer">
	  		
    </div>
  </div>
</div>

-->

<!-- Modal start -->


<!--receipt start -->

<div class="modal fade modal-centered-scrollable" id="receipt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	  
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Receipt</h1>

			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		
	  </div>
      <div class="modal-body">
			
	   <?php
	   
		
		$sqlUserList = "SELECT * FROM tbl_product ORDER BY OrderID";
		$result = $conn -> query ($sqlUserList);
			while($row = $result -> fetch_assoc()){
				
				//Computation of Product
					$row['TotalPrice'] = $row['Amount'] * $row['Quantity'] ;
					$row['Change'] = $row['Modal'] - $row['TotalPrice'] ;

				
				
	?>
	
	<!--RECEIPT DATA-->
	
	  <center>
			<table class="table table-bordered table-hover text-center">
				<tr>
					<td>Order</td>
					<td><?=$row['OrderName']?></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><?=$row['Amount']?></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><?=$row['Quantity']?></td>
				</tr>
				<tr>
					<td>Cash</td>
					<td><?=$row['Modal']?></td>
				</tr>
				<tr>
					<td>Total Price</td>
					<td><?=$row['TotalPrice']?></td>
				</tr>
				<tr>
					<td>Change</td>
					<td><?=$row['Change']?></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><?=$row['datetime']?></td>
				</tr>
			</table>
	 					
			<button onclick="printFunction()" style="border 1px outset white; border-radius: 5px ;right:5%">
						<i class='bx bx-printer' style="font-size:25px;padding:2px 6px"></i>
				</button>
 
		</center>
	
      </div>
      <div class="modal-footer">
	  		<form method="POST" action="../config/Purchase.php">
				<input type="hidden" name="OrderID" value="<?=$row['OrderID']?>">
				   <button type="button" class="btn btn-primary">CONFIRM</button>
			</form>
      </div>
	  <?php
			}
	  ?>
    </div>
  </div>
</div>

	<!--receipt end -->

	<!--Body Pills End-->

<script>
      function printFunction() { 
        window.print(); 
      }
    </script>
</body>
</html>
