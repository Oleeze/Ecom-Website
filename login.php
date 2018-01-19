<?php 
include "header.php";
include "includes/login.inc.php"; ?>
<div class="header">
	<h2>Log In</h2>
</div>
<form class="signup-form" action="login.php" method="POST">
	<?php include "includes/errors.inc.php"; ?>
	<label>Email</label>
	<input type="text" name="email">
			
	<label>Password</label>
	<input type="password" name="pwd_1">		
	
	<button type="submit" name="signIn">Login</button>
</form>
<form class="signup-form" action="signup.php">
	<p>New member?</p>
	<button class="logB" type="submit" name="submit">Sign Up</button>
</form>
<?php
include "footer.php"
?>
</body>
</html>