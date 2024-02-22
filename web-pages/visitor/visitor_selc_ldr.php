<?php
include '../../connection.php';

if(!isset($_POST['searchTerm'])){ 
  $fetchData = mysqli_query($con,"SELECT * FROM visitor WHERE visitor_id");
}else{ 
  $search = $_POST['searchTerm'];   
  $fetchData = mysqli_query($con,"select * from visitor WHERE visitor_id like '%".$search."%' or visitor_name like '%".$search."%'" );
} 

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {    
  $data[] = array("id"=>$row['visitor_id'], "text"=>$row['visitor_name']);
}
echo json_encode($data);

?>

