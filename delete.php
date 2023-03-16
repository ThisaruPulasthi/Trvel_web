<?php
	if(ISSET($_GET['id'])){
		require_once 'conn.php';
		$id = $_GET['id'];
		mysqli_query($conn, "DELETE FROM `member` WHERE `mem_id`='$id'") or die(mysqli_error());
		header('location:index.php');
	}
?>