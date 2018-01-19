<?php
$errors = array();
$_SESSION['success'] = "";
if (isset($_POST['signIn'])) {
	
	include 'dbh.inc.php';
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd_1 = mysqli_real_escape_string($conn, $_POST['pwd_1']);
	
	//Error handlers
	//Check if inputs are empty
	if (empty($email)) { array_push($errors, "Email is empty");} 
	if (empty($pwd_1)) { array_push($errors, "Password is empty");}	
		else {
		$sql = "SELECT * FROM users WHERE user_email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			array_push($errors, "Email is incorrect");		
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd_1, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					array_push($errors, "Incorrect password");			
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['success'] = "You are now logged in";
					header('location:myAccount.php');					
				} else {
			array_push($errors, "Wrong username/password combination");
				}
			}
		}
	}
}