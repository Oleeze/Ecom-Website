<?php
require 'header.php';
require 'includes/cart.inc.php';

?>
<?php if(isset($error)) {
	echo $error;
}  ?>

<?php
	if(!isset($_SESSION['cart'])){
?>	
	<div class="empty">
		<h1> Your Cart Is empty go fill it up :)</h1>
	</div>
<?php	
	} else {
	echo '<div class="shoppingCart">
<form method="post" class="cartWrapper">
		<div class="nestedWrapper">
			<div>Product</div>
			<div>Color</div>
			<div>Price</div>
			<div>QTY</div>
			<div>Amount</div>	
		</div>';
	$cart = json_decode(json_encode($_SESSION['cart']));
	$_SESSION['$s'] = 0;
	$_SESSION['$q'] = 0;
	$index = 0;
	for($i = 0; $i < count($cart); $i++)
	{ 
		$_SESSION['$s'] += $cart[$i]->price * $cart[$i]->quantity;
		$_SESSION['$q'] += $cart[$i]->quantity; 
?>
		<div class="nestWrapper">
			
			<div><img src="<?php echo $cart[$i]->thumb; ?>">
			</br>	
				 <?php echo $cart[$i]->name; ?></div>
			<div><?php echo $cart[$i]->color; ?></div>
			<div><?php echo $cart[$i]->price; ?></div>
			<div><input type="text" value="<?php echo $cart[$i]->quantity; ?>" style="width:50px;" name="quantity[]"></div>
			<div><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></div>
			<div><a href="cart.php?index=<?php echo $index; ?>">X</a></div>
		</div>
<?php 
	} 

echo	'<div class="nWrapper">
		<div><button type="text" name="update" >Update</button></div>
		<div>Total: ;</div>
		<div > $' .$_SESSION['$s']. '.00</div>
	</div>
</form>		
</div>
<div class="shopingCartLinks">
	<a onclick="goBack()">Continue Shopping</a>';
		if(!isset($_SESSION['cart'])){
				echo 'You have nothing to check out!';
}	else {
	echo '<a href="checkout.php">Check Out</a></div>';
}
}
	require 'footer.php';
?>
<script>
	function goBack(){
		window.history.back();
	}
</script>
</html>
</body>
