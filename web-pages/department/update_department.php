<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	if (isset($_POST['edepartment_id'],$_POST['edepartment_name'])) {
		
		$department_id = $_POST['edepartment_id'];
		$department_name = $_POST['edepartment_name'];
	}
	

	$update = "UPDATE department SET department_name = '$department_name' WHERE department_id = '$department_id'";
	mysqli_query($con, $update);
				
			
		
		
?>
 