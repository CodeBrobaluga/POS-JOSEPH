<?php
include "../config/dbcon.php";


if(isset($_POST['Order'])){
	$ProductID	 = $_POST ['ProductID'];
	$ProductName = $_POST ['ProductName'];
	$Amount = $_POST ['Amount'];
	$CustomerName = $_POST ['CustomerName'];
	$Identifier = $_POST ['Identifier'];
	$Quantity = $_POST ['Quantity'];
	$Cash = $_POST ['Cash'];
	$Stock = $_POST ['Stock'];
	
	$TotalPrice = $Quantity * $Amount;
	
	$Amend = $Cash - $TotalPrice;
	
	$Stock = $Stock - $Quantity ;

	if($Cash > $TotalPrice ){
		
		$sqlBuyList = "INSERT INTO f_buyingprocess(ProductID,CustomerName,Cash,TotalPrice,Amend,Quantity,Identifier,datetime) 
		        values ('{$ProductID}','{$CustomerName}','{$Cash}','{$TotalPrice}','{$Amend}','{$Quantity}','{$Identifier}', NOW())";
		$result = $conn -> query ($sqlBuyList);
		
		
		
		if($result){
		$AutoStock = "UPDATE f_product SET Stock = Stock - '{$Quantity}' where ProductID = '{$ProductID}'";
		    $UpdateStock = $conn->query($AutoStock);
			
			header("location: ../Cashier/Cashier.php");
		}
		
	}else{
		header("location: ../Cashier/Cashier.php");
	}


	
	
	
}




if (isset($_POST['cancel_order'])) {
    $transid =  $_POST['id'];
    $selectQuery = "SELECT * FROM transact where transactid = '{$transid}'";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        // Fetch the last transaction
        $lastTransaction = $result->fetch_assoc();


        $insertQuery = "INSERT INTO cancel (transactid, prodid, customer, cash, cashback, total, quantity, code, datetime) 
                        VALUES ('{$lastTransaction['transactid']}', '{$lastTransaction['prodID']}', '{$lastTransaction['customer']}', 
                                '{$lastTransaction['cash']}', '{$lastTransaction['cashback']}', '{$lastTransaction['total']}', 
                                '{$lastTransaction['quantity']}', '{$lastTransaction['code']}', '{$lastTransaction['datetime']}');";
        $conn->query($insertQuery);

        $deleteQuery = "DELETE FROM transact ORDER BY datetime DESC LIMIT 1;";
        $conn->query($deleteQuery);
        $_SESSION ['msgdone'] = "Order canceled successfully.";
			header("location: ../cashier/cashier.php");
    } else {
        
    }
}








?>