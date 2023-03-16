<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){

		$mem_id = $_POST['mem_id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['Phone_No'];
		$Email=$_POST['Email'];
		$Total_Adults=$_POST['Total_Adults'];
		$Total_Children=$_POST['Total_Children'];
		$Destination=$_POST['Destination'];
		
		mysqli_query($conn, "UPDATE `member` SET `firstname`='$firstname', `lastname`='$lastname', `address`='$address', `Phone_No`='$Phone_No', `Email`='$Email',`Total_Adults`='$Total_Adults',`Total_Children`='$Total_Children',`Total_Children`='$Destination'WHERE `mem_id`='$mem_id'") or die(mysqli_error());
		header('location:index.php');
	}
?>