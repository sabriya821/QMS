<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	if (isset($_POST['evisitor_id'],$_POST['evisitor_name'])) {
		
		$visitor_id = $_POST['evisitor_id'];
		$visitor_name = $_POST['evisitor_name'];
        $division_id_fk = $_POST['edivision_id_fk'];
		$address = $_POST['eaddress'];
		$visitor_gender = $_POST['evisitor_gender'];
        $phone_num = $_POST['ephone_num'];
		$email = $_POST['eemail'];
		$dob = $_POST['edob'];
        $i_d = $_POST['ei_d'];
		$marital_status = $_POST['emarital_status'];
		$passport_num = $_POST['epassport_num'];
        $occupation = $_POST['eoccupation'];
	}
	

	$update = "UPDATE visitor SET visitor_name = '$visitor_name',visitor_gender = '$visitor_gender',address = '$address',division_id_fk = '$division_id_fk',dob = '$dob',i_d = '$i_d',passport_num = '$passport_num',marital_status = '$marital_status',occupation = '$occupation',phone_num = '$phone_num',email = '$email' WHERE visitor_id = '$visitor_id'";
	mysqli_query($con, $update);
				
			
		
		
?>

 
 