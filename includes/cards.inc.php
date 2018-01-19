<?php
	require 'dbh.inc.php';
	$userId =$_SESSION['u_id'];
	$sqlPost = mysqli_query($conn,"SELECT * FROM cards WHERE user_id = $userId");
if (isset($_POST['createCard'])) {
	if($conn === false){
		die("ERROR: Could not connect." .mysqli_connect_error());
	}
	$cardName = mysqli_real_escape_string($conn, $_POST['cardName']);
	$cardNumber = mysqli_real_escape_string($conn, $_POST['cardNumber']);
	$cardMonth = mysqli_real_escape_string($conn, $_POST['expMonth']);
	$cardYear = mysqli_real_escape_string($conn, $_POST['expYear']);

	$sqlCreate = mysqli_query($conn,"INSERT INTO cards (cardName, cardNumber, expMonth, expYear, user_id) VALUES ('$cardName', '$cardNumber','$cardMonth', '$cardYear', '$userId')");
	
	if($sqlCreate){
		echo "Records added successfully.";
	} else {
		echo "ERROR: Could not able to execute $sqlCreate. " . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>