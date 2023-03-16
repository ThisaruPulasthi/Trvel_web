<?php
	$conn=mysqli_connect("localhost", "root", "", "db_mysqli_crud");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>