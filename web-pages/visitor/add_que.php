<?php
	
	// Database connection 
	
	require_once('../../connection.php');
	date_default_timezone_set("Asia/Colombo");
	if (!empty($_POST['vvisitor_id'])) {

		$visitor_id_fk = $_POST['vvisitor_id'];
		$department_id_fk = $_POST['department_id_fk'];
		$service_id_fk = $_POST['service_id_fk'];
		$created_date = date('Y-m-d');
		$created_time = date("h:i:a");
		$created_date2 = date('Y-m-d');
		$daily_count = 1;

		$sqld ="SELECT * FROM department WHERE department_id='$department_id_fk'";
		$qwd=mysqli_query($con,$sqld);
        $rowd=mysqli_fetch_array($qwd);

		$sqls ="SELECT * FROM service WHERE service_id='$service_id_fk'";
		$qws=mysqli_query($con,$sqls);
        $rows=mysqli_fetch_array($qws);

		$dpn = $rowd['department_name'];
		$sven = $rows['service_name'];

		$query  = "INSERT INTO que (visitor_id_fk,department_id_fk,service_id_fk,created_date,created_time) VALUES('$visitor_id_fk','$department_id_fk','$service_id_fk','$created_date','$created_time')";
		$result = mysqli_query($con, $query);
		if ($result) {
				$last_id = mysqli_insert_id($con);
				if($last_id){
				$que_uniq_id = strtoupper("FOMS/DSET/NO/".$last_id);
				$query1= "UPDATE que SET que_uniq_id ='".$que_uniq_id."' WHERE que_id='".$last_id."'";
				$res = mysqli_query($con, $query1);
				if ($res){
					$select = mysqli_query($con, "SELECT * FROM service_report WHERE service_name = '".$sven."' AND service_add_date='".$created_date2."'");
        			$row1=mysqli_fetch_array($select);
					$dc = $row1['daily_count'];
					if(mysqli_num_rows($select)) {
						$a=$dc;
						$b=1;
						$sum=$a+$b;
						$query2  = "UPDATE service_report SET daily_count ='".$sum."' WHERE service_name='".$sven."' AND service_add_date='".$created_date2."'";
						$result2 = mysqli_query($con, $query2);
					}
					else{
						$query3  = "INSERT INTO service_report (service_name,	daily_count,service_add_date) VALUES('$sven','$daily_count','$created_date2')";
						$result3 = mysqli_query($con, $query3);
					}
				}
			}
					
		}
	
	}


?>