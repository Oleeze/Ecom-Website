<?php
require 'header.php';
require 'includes/cart.inc.php';

?>
<?php echo isset($error) ? $error: '';?>
<div class="shoppingCart">
<form method="post" class="cartWrapper">
		<div class="nestedWrapper">
			<div>Product</div>
			<div>Color</div>
			<div>Price</div>
			<div>QTY</div>
			<div>Amount</div>	
		</div>
<?php
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
?>
	<div class="nWrapper">
		<div><button type="text" name="update" >Update</button></div>
		<div><?php echo 'Total:' ;
			?></div>
		<div > $<?php echo $_SESSION['$s']
			?>.00</div>
	</div>
</form>		
</div>
<div class="shopingCartLinks">
	<a onclick="goBack()">Continue Shopping</a>
	<a href="checkout.php">Check Out</a>
</div>
<?php
	require 'footer.php';
?>
<script>
	function goBack(){
		window.history.back();
	}
</script>
</html>
</body>
