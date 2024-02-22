<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	// Upload multiple image in Database using PHP MYSQL

	if (!empty($_POST['department_name'])) {

		$department_name = $_POST['department_name'];
		$query  = "INSERT INTO department (department_name) VALUES('$department_name')";
		mysqli_query($con, $query);
					
	}	

?>