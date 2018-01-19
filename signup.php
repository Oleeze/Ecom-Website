<?php 
include "header.php";
include "includes/signup.inc.php"; ?>
<div class="header">
	<h2>Signup</h2>
</div>
<form class="signup-form"  action="signup.php" method="POST">
	<?php include "includes/errors.inc.php"; ?>
	<label>Email</label>
	<input type="text" name="email">
			
	<label>Username</label>
	<input type="text" name="uid">
			
	<label>Password</label>
	<input type="password" name="pwd_1">
			
	<label>Confirm password</label>
	<input type="password" name="pwd_2" >
			
	<button type="submit" name="submit">Sign Up</button>
</form>
<form class="signup-form" action="login.php">
	<p>Already have an account?</p>
	<button class="logB" type="submit" name="submit">Log In</button>
</form>
<?php
include "footer.php"
?>
</body>
</html>