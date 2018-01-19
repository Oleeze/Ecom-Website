<?php
	session_start();
	require 'dbh.inc.php';
	
	$userId =$_SESSION['u_uid'];
	if($conn === false){
		die("ERROR: Could not connect." .mysqli_connect_error());
	}
	$first_name= mysqli_real_escape_string($conn, $_POST['user_first']);
	$last_name= mysqli_real_escape_string($conn, $_POST['user_last']);

	$sql = "UPDATE users SET user_first = '$first_name', user_last = '$last_name' WHERE user_uid = '$userId'";
	if(mysqli_query($conn,$sql)){
		header('location: ../myAccount.php');
	} else {
		echo "ERROR: Could not about to execute $sql. " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>