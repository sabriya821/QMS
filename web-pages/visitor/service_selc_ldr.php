
<?php
include '../../connection.php';

if (isset($_POST['searchTerm'])) {
    $search = $_POST['searchTerm'];

    // Modify your query to filter the data based on the selected value from the first dropdown
    $fetchData = mysqli_query($con, "SELECT * FROM service WHERE department_id_fk = '".$search."' OR service_name LIKE '%".$search."%'");
} else {
    $fetchData = mysqli_query($con, "SELECT * FROM service");
}

$data = array();
while ($row = mysqli_fetch_array($fetchData)) {
    $data[] = array("id" => $row['service_id'], "text" => $row['service_name']);
}
echo json_encode($data);
?>