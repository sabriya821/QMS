<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	// Upload multiple image in Database using PHP MYSQL

	if (!empty($_POST['service_name'])) {

		$service_name = $_POST['service_name'];
		$department_id_fk = $_POST['department_id_fk'];
		$query  = "INSERT INTO service (service_name,department_id_fk) VALUES('$service_name','$department_id_fk')";
		mysqli_query($con, $query);
					
	}	

?>