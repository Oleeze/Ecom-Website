<?php
require 'dbh.inc.php';
require 'item.inc.php';
 if(!isset($_GET['mc'])) {
echo '<meta http-equiv="refresh" content= "0;URL=?mc=mobile" />';
} 
if(isset($_GET['id']) && !isset($_POST['update'])){
	$p_query = ("SELECT ID, Name, Price, Thumb, Color FROM products WHERE ID=".$_GET['id']);
	$result = $conn->query($p_query);
	$product = $result->fetch_object();
	$item = new Item();
	$item->id = $product->ID;
	$item->name = $product->Name;
	$item->price = $product->Price;
	$item->thumb = $product->Thumb;	
	$item->color = $product->Color;
	$item->quantity = 1;
//Check product is exisiting in cart
	$index = -1;
	$cart = json_decode(json_encode($_SESSION['cart']));
	for($i = 0; $i<count($cart); $i++)
		if($cart[$i]->id==$_GET['id'])
		{
			$index = $i;
			break;
		}
	if($index==-1){
		$_SESSION['cart'][] = $item;
	}else{
		$cart[$index]->quantity++;
		$_SESSION['cart'] = $cart;
	}
}
//Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])){
	$cart = json_decode(json_encode($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart']=$cart;
}

// Update quantity in cart
if(isset($_POST['update'])){
	if (empty($_SESSION['cart'])) {
      echo "No Items to Update";
	}	else {
	$arrQuantity = $_POST['quantity'];
	
	// Check validate quantity
	$valid = 1;
	for($i = 0; $i < count($arrQuantity); $i++)
		if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1){
			$valid = 0;
			break;
		}
	if($valid==1){
	$cart = json_decode(json_encode($_SESSION['cart']));
	for($i = 0; $i < count ($cart); $i++){
		$cart[$i]->quantity = $arrQuantity[$i];
	}
	$_SESSION['cart']=$cart;
	}
	else
		$error = 'Quantity is InValid';
} }
?>