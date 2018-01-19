<?php
	include "header.php";
	$orderDetail_sql = ('SELECT * FROM products INNER JOIN orderdetails ON products.ID = orderdetails.ProductID INNER JOIN orders ON orders.ID = orderdetails.OrderID WHERE orders.UserID = '.$_SESSION['u_id'].' AND orders.ID = orderdetails.OrderID ORDER BY Date DESC');
	$orderDetail_result = $conn->query($orderDetail_sql);
	
?>
<div class="account">
<div class="accEdit">
<h1><?php echo $_SESSION['u_first']; ?></br>Account<i class="fa fa-pencil-square-o" aria-hidden="true"></i></h1>
	<form action="includes/insert.inc.php" method="post" class="userEdit">
		<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="user_first" id="firstName">
		</p>	
		<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="user_last" id="lastName">
		</p>
		<input type="submit" value="Submit">
	</form>
</div>
<form action="includes/logout.inc.php" method="post">
	<button type="submit" name="submit">Log Out</button>
</form>
<?php

if($_SESSION['u_uid'] == 'Admin' ){
	echo $_SESSION['u_uid'];
	echo $_SESSION['u_id'];
	echo "hello there";
} else {
	echo '<h1>My Past Transaction</h1>';
	while($order = $orderDetail_result->fetch_object())
	{
		?>
	<div class="transWrapper">
		<div class="orderData">
			<p>ORDER PLACED</p>
			<p>TOTAL</p>
			<p>SHIP TO</p>
			<p><?php echo $order->Date; ?></p>
			<p>$<?php echo $order->Amount; ?>.00</p>
			<p><?php echo $order->ShipName;?></p>
		</div>

		<div class="orderProduct">
		<p><img src="<?php echo $order->Thumb; ?>"></p>
		</div>
	</div>;
<?php
	}
}
	include "footer.php";
?>
<script>
	$(document).ready(function (){
		$('.accountCard').hide();
		$('.cardCreate').hide();
		$('.userEdit').hide();
		$(".fa-arrow-up").hide();
		$('.displayCardInfo').hide();
		$('#addCard').click(function() {
			$('.cardCreate').toggle(1000);
		});
		$('.fa-pencil-square-o').click(function (){
			$('.userEdit').toggle(500);
		});
		$('.displayTitle').click(function (){
			$(this).find('.fa-arrow-up, .fa-arrow-down').toggle();
			$('.displayCardInfo').slideToggle(500);
		});
	});
</script>
</body>
</html>