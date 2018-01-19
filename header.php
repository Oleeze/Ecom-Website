<?php
	session_start();
	include "includes/login.inc.php";
	include "includes/dbh.inc.php";
	include "includes/signup.inc.php";

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script tpye="text/javascript" src="javascript/main.js"></script>
</head>
<body>
	<nav class="navbar navbar-toggleable-md">
        <div class="nav-icon-border">
			<div class="nav-icon-wrapper">
            <div id="nav-icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
			</div>	
        </div>
		<div class="navbar-wrapper">
			
        <ul class="navbar-nav" id="navbar-nav-left">
            <li>
				<a href="women-category.php">
					Women's
				</a>
				<div class="nav-span-arrowtab">
					<i class="fa fa-arrow-up nav-span-arrow" aria-hidden="true"></i>
					<i class="fa fa-arrow-down nav-span-arrow" aria-hidden="true"></i>
				</div>				
					<ul class="navbar-navlv2">
						<li><a href="#" class="lv2"><span class="nav-span">New</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Tops</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Bottoms</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Shoes</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Sale</span></a></li>
					</ul>
			</li>
            <li>
				<a href="#">
					Men's
				</a>
			<div class="nav-span-arrowtab"><i class="fa fa-arrow-up nav-span-arrow" aria-hidden="true"></i><i class="fa fa-arrow-down nav-span-arrow" aria-hidden="true"></i></div>
					<ul class="navbar-navlv2">
						<li><a href="#" class="lv2"><span class="nav-span">New</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Tops</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Bottoms</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Shoes</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Sale</span></a></li>
					</ul>
			</li>
            <li>
				<a href="#">
					Apartment
				</a>
			<div class="nav-span-arrowtab"><i class="fa fa-arrow-up nav-span-arrow" aria-hidden="true"></i><i class="fa fa-arrow-down nav-span-arrow" aria-hidden="true"></i></div>
					<ul class="navbar-navlv2">
						<li><a href="#" class="lv2"><span class="nav-span">New</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Tops</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Bottoms</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Shoes</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Sale</span></a></li>
					</ul>				
			</li>
            <li>
				<a href="#">
					Accessories
				</a><div class="nav-span-arrowtab"><i class="fa fa-arrow-up nav-span-arrow" aria-hidden="true"></i><i class="fa fa-arrow-down nav-span-arrow" aria-hidden="true"></i>
				</div>
					<ul class="navbar-navlv2">
						<li><a href="#" class="lv2"><span class="nav-span">New</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Tops</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Bottoms</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Shoes</span></a></li>
						<li><a href="#" class="lv2"><span class="nav-span">Sale</span></a></li>
					</ul>
			</li>
            <li>
				<a href="#">
					Sale
				</a><div class="nav-span-arrowtab"><i class="fa fa-arrow-up nav-span-arrow" aria-hidden="true"></i><i class="fa fa-arrow-down nav-span-arrow" aria-hidden="true"></i></div></li>
        </ul>
        <ul class="navbar-nav" id="navbar-nav-right">
            <li>
				<a href="#">
					Search<i class="fa fa-search" aria-hidden="true"></i>
				</a>
			</li>
			<li class="dropdown">
				<div class="dropbtn">
<?php
if(!isset($_SESSION['u_uid'])) {
echo '<a href="login.php">Hello, Sign In<br>My Account</a>';
} else {
echo "<a href=myAccount.php>Hello, ". $_SESSION['u_uid'] . "<br>My Account</a>";
};
?>
				</div>
			</li>
			<li>
				<a href="cart.php">
					<i class="fa fa-shopping-cart fa-3x" aria-hidden="true">
<?php 
	//echo ($_SESSION['$q']);
?>
					</i>
				</a>	
			</li>
        </ul>
	</div>
    </nav>
<!--<div class="loginPop"></div>	
	<div class="login-nav">
			<form method="POST" action="index.php" accept-charset="UTF-8" class="form" id="formLogin">
				<h4>Log In</h4>
				<div id="error"></div>
				<input type="text" name="uid" placeholder="Username/email" id="uid">
				<input type="password" name="pwd_1" placeholder="Password" id="pwd_1">
				<button type="submit" name="signIn" class="signIn">Sign in</button>				
			</form>
		<form action="includes/signup.inc.php" method="POST" class="form" id="formSignUp">
			<h4>Sign Up</h4>
			<?php include "includes/errors.inc.php"; ?>
			<div id="error"></div>
			<input type="text" name="email" placeholder="Email">
			
			<input type="text" name="uid" id="uid" placeholder="Username">
			
			<input type="password" name="pwd_1" id="pwd_1" placeholder="Password">
			
			<input type="password" name="pwd_2" placeholder="Confirm password">
			<button type="button" name="signUp" class="signUp" >Sign Up</button>
		</form>
			<div class="loginBtn">
					<h5 id="signIn">Sign In</h5>
					<h5 id="signUp">Sign Up</h5>
			</div>
	</div> -->

