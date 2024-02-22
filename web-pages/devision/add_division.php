<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	// Upload multiple image in Database using PHP MYSQL

	if (!empty($_POST['division_name'])) {

		$division_name = $_POST['division_name'];
		$query  = "INSERT INTO division (division_name) VALUES('$division_name')";
		mysqli_query($con, $query);
					
	}	

?>