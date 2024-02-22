<?php
include '../../connection.php';

if(!isset($_POST['searchTerm'])){ 
  $fetchData = mysqli_query($con,"SELECT * FROM service WHERE service_id");
}else{ 
  $search = $_POST['searchTerm'];   
  $fetchData = mysqli_query($con,"select * from service WHERE service_id like '%".$search."%' or service_name like '%".$search."%'" );
} 

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {    
  $data[] = array("id"=>$row['service_name'], "text"=>$row['service_name']);
}
echo json_encode($data);

?>

