<?php
include '../../connection.php';

if(!isset($_POST['searchTerm'])){ 
  $fetchData = mysqli_query($con,"SELECT * FROM division WHERE division_id");
}else{ 
  $search = $_POST['searchTerm'];   
  $fetchData = mysqli_query($con,"select * from division WHERE division_id like '%".$search."%' or division_name like '%".$search."%'" );
} 

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {    
  $data[] = array("id"=>$row['division_id'], "text"=>$row['division_name']);
}
echo json_encode($data);

?>

