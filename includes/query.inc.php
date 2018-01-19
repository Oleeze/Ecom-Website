<?php
	$hats_sql= "SELECT * FROM products WHERE CategoryID = 1";
	$new_sql = "INSERT INTO orderdetails(OrderID, ProductID, Price, Quantity) VALUES('.$ordersid.','.$cart[$i]->id.','.$cart[$i]->price.','.$cart[$i]->quantity.";
	$newRow = mysqli_query($conn,$new_sql);
	$update_sql = "UPDATE p
   SET p.Quantity = p.Quantity - od.Quantity
FROM
   products AS p
INNER JOIN
   orderdetails AS od ON od.ProductID = p.ID
WHERE
   od.OrderID = $ordersid";
$updateQ = mysqli_query($conn, $update_sql);
	
?>

update products set Quantity = Quantity - orderdetails.Quantity from products WHERE ID IN (SELECT ProductID, OrderID FROM orderdetails WHERE ProductID = '.$cart[$i]->id.' AND OrderID = '.$ordersid.'")