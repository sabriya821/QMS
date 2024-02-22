<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	if (isset($_POST['eservice_id'],$_POST['eservice_name'])) {
		
		$service_id = $_POST['eservice_id'];
		$service_name = $_POST['eservice_name'];
		$department_id_fk = $_POST['edepartment_id_fk'];
	}
	

	$update = "UPDATE service SET service_name = '$service_name',department_id_fk = '$department_id_fk' WHERE service_id = '$service_id'";
	mysqli_query($con, $update);
				
			
		
		
?>
 