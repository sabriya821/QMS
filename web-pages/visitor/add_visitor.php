<?php
	
	// Database connection 
	
	require_once('../../connection.php');

	// Upload multiple image in Database using PHP MYSQL

	if (!empty($_POST['visitor_name'])) {

		$visitor_name = $_POST['visitor_name'];
		$visitor_gender = $_POST['visitor_gender'];
		$address = $_POST['address'];
		$division_id_fk = $_POST['division_id_fk'];
		$i_d = $_POST['i_d'];
		$occupation = $_POST['occupation'];
		$phone_num = $_POST['phone_num'];
		$email = $_POST['email'];
        $add_date = date("Y-m-d");
		$query  = "INSERT INTO visitor (visitor_name,visitor_gender,address,division_id_fk,i_d,occupation,phone_num,email,add_date) VALUES('$visitor_name','$visitor_gender','$address','$division_id_fk','$i_d','$occupation','$phone_num','$email','$add_date')";
		mysqli_query($con, $query);
					
	}	

?>