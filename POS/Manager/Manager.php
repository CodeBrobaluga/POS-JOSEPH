<?php
	include'../plugins/bootstrap.php';
	include '../config/dbcon.php';
?>
<html lang="en">
<head>
  <title>Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  
		.Fbdy{
			background-color : white;
		}
		.card-text{
			font-family: Tahoma;
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
		li{
			padding: 10px;
		}
		td,th{
			font-family:Helvetica ;
		}
		a{
			text-decoration: none ;
			font-family:Helvetica ;
			color: black;
			background-color: rgb(240, 240, 240) ;
			border : 1px outset rgb(240, 240, 240);
			padding: 5px;
			border-radius: 8px ;
		}
	
  </style>
</head>
<body style="background-color:rgba(255, 172, 43, 0.1)">


<div class="container mt-4 col-lg-7 .ms-auto h-4">
  <center >
	<h2 class="fw-bold" style="margin-bottom: 20px">Manager</h2>
	<a href="../admin/dashboard.php"><span>Dashboard</span></a>
	<a href="../Cashier/Cashier.php"><span>Cashier</span></a>
	<a href="../Inventory/InventoryClerk.php"><span>Inventory</span></a>
  </center>
  
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills bg-light" role="tablist">
    <li class="nav-item">
      <a class="nav-link active p-2 " data-bs-toggle="pill" href="#home">Sales</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu1"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu2"></a>
    </li>
  </ul>

  <!-- Tab panes start -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active shadow p-5" style="background-color: white"><br>
			<center >
		<h2 style="background-color:hsl(0, 0%, 90%) ;color: black ; padding: 25px ; font-family:Helvetica ;">
		Sales Management</h2>
		
	<table class="table table-bordered table-hover" style=" text-align: center">
	
		<?php
			$ProductList = "SELECT * FROM tbl_product ";
			$result = $conn -> query ($ProductList);
				while($list = $result -> fetch_assoc()){
					
		?>
		<tr>
			<th colspan="5">Date: <?=$list['Date']?></th>
		</tr>
		
			<tr>
			
				<th>OrderID</th>
				<th>OrderName</th>
				<th>Address</th>
				<th>Amount</th>
				<th>Quantity</th>
				
			</tr>
		
	
			<tr>
			
				<td><?=$list['OrderID']?></td>
				<td><?=$list['OrderName']?></td>
				<td><?=$list['Address']?></td>
				<td><?=$list['Amount']?></td>
				<td><?=$list['Quantity']?></td>
				
			</tr>
			<?php
				}
			?>
			
		</table>	

		</center>
		
		  </div>

    <div class="container tab-pane fade shadow p-5"  id="menu1" style="background-color: white"><br>
		
</div>


    <div id="menu2" class="container tab-pane fade shadow p-5" style="background-color: white"><br>
 
</div>

  </div>
  </div>
</div>

</html>
