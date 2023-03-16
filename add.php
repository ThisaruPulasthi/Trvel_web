<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$Phone_No=$_POST['Phone_No'];
		$Email=$_POST['Email'];
		$Total_Adults=$_POST['Total_Adults'];
		$Total_Children=$_POST['Total_Children'];
		$Destination=$_POST['Destination'];

		mysqli_query($conn, "INSERT INTO `member` VALUES('', '$firstname', '$lastname', '$address', '$Phone_No', '$Email', '$Total_Adults', '$Total_Children', '$Destination')") or die(mysqli_error());
		header('location:index.php');
	}
?>