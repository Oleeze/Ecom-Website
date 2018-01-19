<?php
$errors = array();
$_SESSION['success'] = "";
if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd_1 = mysqli_real_escape_string($conn, $_POST['pwd_1']);
	$pwd_2 = mysqli_real_escape_string($conn, $_POST['pwd_2']);

	//Error handlers
	//Check for empty fields
	if (empty($email)) { array_push($errors, "Email is required");}
	if (empty($uid)) { array_push($errors, "Username is required");}
	if (empty($pwd_1)) { array_push($errors, "Password is required");}
	
	if ($pwd_1 != $pwd_2){
		array_push($errors, "The two passwords do not match");
	} else {
		//check if input characters are valid
		//if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
		//	array_push($errors, "Invalid characters");
		//} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($errors, "Invalid Email");			
			} else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					array_push($error, "Username is taken");				
				} else {
					
					if (count($errors) == 0){
					//Hashing the password
						$hashedPwd = password_hash($pwd_1, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					$_SESSION['success'] = "You are now logged in";
					header('location: index.php');
					}
				}
			}
		}
	}