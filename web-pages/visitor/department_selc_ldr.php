<?php
include '../../connection.php';

if(!isset($_POST['searchTerm'])){ 
  $fetchData = mysqli_query($con,"SELECT * FROM department WHERE department_id");
}else{ 
  $search = $_POST['searchTerm'];   
  $fetchData = mysqli_query($con,"select * from department WHERE department_id like '%".$search."%' or department_name like '%".$search."%'" );
} 

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {    
  $data[] = array("id"=>$row['department_id'], "text"=>$row['department_name']);
}
echo json_encode($data);

?>

