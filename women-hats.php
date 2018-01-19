<?php
	include 'header.php';
?>

<div class="productRow">
<?php
	$hats_sql= "SELECT * FROM products WHERE CategoryID = 1";
	$hats = mysqli_query($conn,$hats_sql);
	$i = 0;
	$n = 4;
	while($product = mysqli_fetch_array($hats))
	{ 
	if($i % $n == 0 && $i != 0)
		{ 
			echo '</div><div class="productRow">';
		}
		$i++;
?>
<div class="col-xs-12 col-sm-6 col-md-3">
	<a href="#" class="img-links">  
	<img class="img-fluid" alt="Responsive image" src="<?php echo $product["Image"]; ?>">
		<div class="imageDsc">
			<p><?php echo $product["Name"]; ?></p></br>
			<h5>$<?php echo $product["Price"]; ?>.00</h5>
			<a href="cart.php?id=<?php echo $product["ID"]; ?>">Order</a>
		</div>
	</a>
</div>
<?php
		
	}
?>
</div>
<?php
	include 'footer.php';
?>
</body>
</html>