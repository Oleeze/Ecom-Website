<?php
session_start();
require 'includes/dbh.inc.php';
require 'includes/item.inc.php';
//Save new order

if(!isset($_SESSION['u_id'])){
	$_SESSION['u_id'] = "Guest";
}
$newOrder = $conn->prepare("INSERT INTO orders (UserID, Amount) Values ('{$_SESSION['u_id']}','{$_SESSION['$s']}')");
$newOrder->execute();
$ordersid = $newOrder->insert_id;	

//Save order details for new order
$cart = json_decode(json_encode($_SESSION['cart']));
//For loop with query that creates a new row for every item
for($i = 0; $i<count($cart); $i++){
	$new_Orderdetail = $conn->prepare("INSERT INTO `orderdetails` (`OrderID`,`ProductID`,`Price`,`Quantity`) VALUES(".$ordersid.",".$cart[$i]->id.",".$cart[$i]->price.",".$cart[$i]->quantity.")");
	$new_Orderdetail->execute();
	$new_Orderdetailid = $new_Orderdetail->insert_id;
	$update = $conn->prepare("UPDATE products SET Quantity=Quantity - ".$cart[$i]->quantity." WHERE ID=".$cart[$i]->id);
	$update->execute();
}

// Clear all products in cart
unset($_SESSION['cart']);


?>
Thanks for buying products. Click <a href="index.php">Here</a> to continue buying products.