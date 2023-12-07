<?php
	include'../plugins/bootstrap.php';
	include'../config/dbcon.php';
	include'../plugins/GetBootstarp.php'
			
			 
		
		
		
		
	
?>
		
		<?php
			 
			$dataPoints = array( 
				array("y" => 1000, "label" => "Red Roses" ),
				array("y" => 2435.94, "label" => "WE Purple Flower" ),
				array("y" => 1842.55, "label" => "Baby Pink Boquet" ),
			);				
					
		?>
		
		
<html>
<head>
	<title>Inventory Clerk</title>
	
	<style>
		th{
			padding: 10px ;
		}
		h2,tr{
			background-color:hsl(0, 0%, 90%) ;
			color: black ;
			padding: 25px ;
			font-family:Helvetica ;

		}
		#Order {
			width: 100px ;

		}
		.nav {
			font-size: 20px ;
			margin-left: 40pxW
			
		}
		tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
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
		}input{
			 text-align: center;
		}

	</style>
	<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
  <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Gold Reserves"
	},
	axisY: {
		title: "Gold Reserves (in tonnes)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
  
</head>
<body>
	<div class="Vnav d-flex align-items-start" style="background-color: wheat; width : 20%;">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"  style="padding: 30px; height: 702px">
    <center>
	<button id="Order"class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" 
	type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Product</button>
	<button class="nav-link" id="v-pills-Void-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Void" 
	type="button" role="tab" aria-controls="v-pills-Void" aria-selected="false">Void</button>
    <button class="nav-link" id="v-pills-Stock-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Stock" 
	type="button" role="tab" aria-controls="v-pills-Stock" aria-selected="false">Stock</button>
    <button class="nav-link" id="v-pills-Loss-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Loss" 
	type="button" role="tab" aria-controls="v-pills-Loss" aria-selected="false">Loss and Return</button>
    <button class="nav-link" id="v-pills-DataGraph-tab" data-bs-toggle="pill" data-bs-target="#v-pills-DataGraph" 
	type="button" role="tab" aria-controls="v-pills-DataGraph" aria-selected="false">Data Graph</button>
	</center>
  </div>
  
  
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
	
	<center style="margin: 120px 0 40px 280px ;">
		<h2>Create Product</h2>
		
	<table class="table table-bordered table-hover" style=" text-align: center">
	
		<tr>
			<th>ProductID</th>
			<th>ProductName</th>
			<th>Category</th>
			<th>Stock</th>
			<th>Amount</th>
			<th>Status</th>
		</tr>
			
	<form method="POST" action="../config/AddProduct.php">
			
		<tr>
			<td></td>
			<td><input type="text" name="ProductName"required></td>
			<td >
			  <select name="Category" class="text-center">
				<option value="Roses">Roses</option>
				<option value="Flower">Flower</option>
				<option value="Boquet">Boquet</option>
			  </select>
			</td>
			<td><input type="text" name="Stock" style="width: 110px"></td>
			<td><input type="text" name="Amount" style="width: 110px"></td>			
			<td>
				<select name="Status" required>
					<option value="ACTIVE">ACTIVE</option>
					<option value="INACTIVE">INACTIVE</option>

				</select>
			</td>
		
			<td>
				<button type="submit">
					ADD
				</button>
			</td>
			</form>
		</tr>
	
		
		</table></br></br>	
		
		
		
		<h2>Product</h2>
			
			<table class="table table-bordered table-hover" style=" text-align: center">
				<tr>
					<th>Product Name</th>
					<th>Amount</th>
					<th>Stock</th>
					<th>Total Price</th>
				</tr>

			<?php
				$sqlUserList = "SELECT * FROM f_product where status='ACTIVE'";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					$row['TotalPrice'] = $row['Amount'] * $row['Stock'] ;
						
			?>
			
				<tr>
					<td><?=$row['ProductName']?></td>
					<td><?=$row['Amount']?></td>
					<td><?=$row['Stock']?></td>
					<td><?=$row['TotalPrice']?></td>
				</tr>
				
			<?php
					}
			?>
			</table>
			
			
			
		</center>
	
	</div>
	
	 <div class="tab-pane fade" id="v-pills-void" role="tabpanel" aria-labelledby="v-pills-void-tab" tabindex="0">
	
		<center  style="margin: 120px 0 40px 480px ;">
		<h2>Void Management</h2>
			
			<?php
				$sqlUserList = "SELECT * FROM tbl_product where Mode='OFF'";
				$result = $conn -> query ($sqlUserList);
					while($row = $result -> fetch_assoc()){
						
					$row['TotalPrice'] = $row['Amount'] * $row['Quantity'] ;
					$row['Change'] = $row['Modal'] - $row['TotalPrice'] ;
						
			?>
			
			<table class="table table-bordered table-hover" style=" text-align: center">
				<tr>
					<td colspan="6"><?=$row['Date']?></td>
				</tr>
				<tr>
					<th>OrderName</th>
					<th>Amount</th>
					<th>Quantity</th>
					<th>Modal</th>
					<th>Total Price</th>
					<th>Change</th>   				
				</tr>
				<tr>
					<td><?=$row['OrderName']?></td>
					<td><?=$row['Amount']?></td>
					<td><?=$row['Quantity']?></td>
					<td><?=$row['Modal']?></td>
					<td><?=$row['TotalPrice']?></td>
					<td><?=$row['Change']?></td>
					
				
				</tr>
				
			<?php
					}		
			?>
		</table>
	</center>
	</div>
	
    <div class="tab-pane fade" id="v-pills-Stock" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
	<center style="margin: 120px 0 40px 480px ;">
		<h2>Stock Management</h2>
		
	<table class="table table-bordered table-hover" style=" text-align: center">
	
		<tr>
			<th>ProductID</th>
			<th>ProductName</th>
			<th>Amount</th>
			<th>Stock</th>
			<th colspan="3">Method</th>
		</tr>
	
			


		<?php
			$ProductList = "SELECT * FROM f_product where Status='Active'";
			$result = $conn -> query ($ProductList);
				while($list = $result -> fetch_assoc()){
					
		?>
		
			<tr>
				<td><?=$list['ProductID']?></td>
				<td><?=$list['ProductName']?></td>
				<td><?=$list['Amount']?></td>
				<td><?=$list['Stock']?></td>
				

		
				
			<td>
				<input type="hidden" name="ProductID" value="<?=$list['ProductID']?>">
				<button data-bs-toggle="modal" data-bs-target="#pic1">
				<i class='bx bxs-edit' style="padding: 1px 2px"></i>
				</button>
			
			</td>
			
			

<!-- Modal -->

<div class="modal fade modal-centered-scrollable" id="pic1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	  
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Customer Order</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		
      </div>
      <div class="modal-body">
	 <center class="text-center">

	 
	  
		<form method="POST" action="../config/editUser.php">
					
					
					<div class="grid-container text-center">
						<div class="grid-item">ProductName</div>
						<div class="grid-item">
							<input type="text" name="ProductName" value="<?=$list['ProductName']?>">
						</div>
						<div class="grid-item">Amount</div>
						<div class="grid-item">
							<input type="text" name="Amount" value="<?=$list['Amount']?>">
						</div>
						<div class="grid-item">Stock</div>
						<div class="grid-item">
							<input type="text" name="Stock" value="<?=$list['Stock']?>">
						</div>
						<div class="grid-item">Status</div>
						<div class="grid-item">
							<select name="Status" required>
								<option value="ACTIVE">Active</option>
								<option value="INACTIVE">InActive</option>
								<option value="Loss">Loss</option>
								<option value="Return">Return</option>
							</select>
						</div>
					</div>

		</center>
		
      </div>
	  
      <div class="modal-footer">
		
	<input type="hidden" name="ProductID" value="<?=$list['ProductID']?>">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>				
      </div>
	  </form>
	 	
		
    </div>
  </div>
</div>		
				
				
			<td>
			
				<form method="POST" action="../config/StockDel.php">
				<input type="hidden" name="ProductID" value="<?=$list['ProductID']?>">
				<button>
					<i class='bx bx-trash' style="padding: 1px 2px"></i>
				</button>
			
			</td>
			
			</tr>
			<?php
				}
			?>
			
		</table>	

		</center>
	</div>
    <div class="tab-pane fade" id="v-pills-Loss" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
		<center style="margin: 120px 0 40px 480px ;">
		<h2>Loss Management</h2>
		
	<table class="table table-bordered table-hover" style=" text-align: center">
	
		<tr>
			<th>ProductID</th>
			<th>ProductName</th>
			<th>Amount</th>
			<th>Stock</th>
			<th>Status</th>
			<th>Method</th>
		</tr>
	
			


		<?php
			$ProductList = "SELECT * FROM f_product WHERE Status='Loss'";
			$result = $conn -> query ($ProductList);
				while($list = $result -> fetch_assoc()){
					
		?>
		
			<tr>
				<td><?=$list['ProductID']?></td>
				<td><?=$list['ProductName']?></td>
				<td><?=$list['Amount']?></td>
				<td><?=$list['Stock']?></td>
				<td><?=$list['Status']?></td>

			
			</tr>
			<?php
				}
			?>
			
		</table>	
		
		
		<h2>Return Management</h2>
		
	<table class="table table-bordered table-hover" style=" text-align: center">
	
		<tr>
			<th>ProductID</th>
			<th>ProductName</th>
			<th>Amount</th>
			<th>Stock</th>
			<th>Status</th>
			<th>Method</th>
		</tr>
	
			


		<?php
			$ProductList = "SELECT * FROM f_product WHERE Status='Return'";
			$result = $conn -> query ($ProductList);
				while($list = $result -> fetch_assoc()){
					
		?>
		
			<tr>
				<td><?=$list['ProductID']?></td>
				<td><?=$list['ProductName']?></td>
				<td><?=$list['Amount']?></td>
				<td><?=$list['Stock']?></td>
				<td><?=$list['Status']?></td>

			
			</tr>
			<?php
				}
			?>
			
		</table>	

		</center>
	</div>
    <div class="tab-pane fade" id="v-pills-Return" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
	
	</div>
    <div class="tab-pane fade" id="v-pills-DataGraph" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
		

		<div id="chartContainer" 
		style="height: 370px; width: 100%; max-width: 550px;position:absolute;right:30%;top:10%">
		</div>
		<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
		
	</div>
  </div>
</div>
</body>
<html>
