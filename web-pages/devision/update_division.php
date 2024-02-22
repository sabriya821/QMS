<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	if (isset($_POST['edivision_id'],$_POST['edivision_name'])) {
		
		$division_id = $_POST['edivision_id'];
		$division_name = $_POST['edivision_name'];
	}
	

	$update = "UPDATE division SET division_name = '$division_name' WHERE division_id = '$division_id'";
	mysqli_query($con, $update);
				
			
		
		
?>
 