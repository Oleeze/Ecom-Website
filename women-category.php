<?php
	include 'header.php';
	$hats_sql= "SELECT * FROM products WHERE CategoryID = 1";
	$hats = mysqli_query($conn,$hats_sql);
?>

<div class="container">
<div class="category-title-section">	
	<h2 >New Arrivals</h2>
	<div class="shop-now">
		<a href="#" >Shop Now</a>
	</div>
</div>
<hr class="category-title-line" id="category-page-title-line">
	
	<div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
				<p>$39.99</p>
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
				<p>$39.99</p>
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
				<p>$39.99</p>
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg" class="img-fluid" alt="Responsive image">
				<p>$39.99</p>
            </a>    
        </div>
	</div>
	
<div class="category-title-section">	
	<h2>Hats</h2>
	<div class="shop-now">
		<a href="women-hats.php" >Shop Now</a>
	</div>
</div>
<hr class="category-title-line" id="category-page-title-line">
<div class="row">
<?php 
	$i = 0;
	while($product = mysqli_fetch_array($hats))
	{ 
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
	 $i++;
	 if($i==4)break;
}
?>	
</div>
	
	
	
	
	
	
	
	
	
<div class="category-title-section">	
	<h2>Bottoms</h2>
	<div class="shop-now">
		<a href="#" >Shop Now</a>
	</div>
</div>
<hr class="category-title-line" id="category-page-title-line">
	
<div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg" class="img-fluid" alt="Responsive image">
            </a>    
        </div>
</div>

<div class="category-title-section">	
	<h2>Shoes</h2>
	<div class="shop-now">
		<a href="#" >Shop Now</a>
	</div>
</div>
<hr class="category-title-line" id="category-page-title-line">
	
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
    	<a href="#" class="img-links">     
        	<img src="images/homePage/men.jpg" class="img-fluid" alt="Responsive image">
        </a>    
    </div>
	<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
    	<a href="#" class="img-links">     
        	<img src="images/homePage/men.jpg" class="img-fluid" alt="Responsive image">
        </a>    
    </div>
	<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
    	<a href="#" class="img-links">     
        	<img src="images/homePage/men.jpg" class="img-fluid" alt="Responsive image">
        </a>    
    </div>
	<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
    	<a href="#" class="img-links">     
        	<img src="images/homePage/men.jpg" class="img-fluid" alt="Responsive image">
        </a>    
    </div>	
</div>
	
<div class="category-title-section">	
	<h2>Sale</h2>
	<div class="shop-now">
		<a href="#" >Shop Now</a>
	</div>
</div>
<hr class="category-title-line" id="category-page-title-line">
	
	<div class="row" id="last-row">
    	<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg"  class="img-fluid" alt="Responsive image">
            </a>    
        </div>
		<div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom--large">    
        	<a href="#" class="img-links">     
            	<img src="images/homePage/women.jpg" class="img-fluid" alt="Responsive image">
            </a>    
        </div>
	</div>
</div>






<?php
	include 'footer.php';
?>
</body>
</html>