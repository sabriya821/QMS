<?php
include '../../connection.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($con, $_POST['search']['value']); // Search value

## Date search value
$searchByName = mysqli_real_escape_string($con, $_POST['searchByName']);
$searchByFromdate = mysqli_real_escape_string($con, $_POST['searchByFromdate']);
$searchByTodate = mysqli_real_escape_string($con, $_POST['searchByTodate']);

## Search Query
$searchQuery = array();
if ($searchValue != '') {
    $searchQuery[] = "(service_name like '%" . $searchValue . "%' or 
     daily_count like '%" . $searchValue . "%' or
     service_add_date like'%" . $searchValue . "%')";
}

if ($searchByName != '') {
    $searchQuery[] = "(service_name like '%" . $searchByName . "%')";
}

// Date filter
if ($searchByFromdate != '' && $searchByTodate != '') {
    $searchQuery[] = "(service_add_date between '" . $searchByFromdate . "' and '" . $searchByTodate . "')";
}

$WHERE = "";
if (count($searchQuery) > 0) {
    $WHERE = " WHERE " . implode(' and ', $searchQuery);
}

## Total number of records without filtering
$sel = mysqli_query($con, "select count(*) as allcount from service_report");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con, "select count(*) as allcount from service_report " . $WHERE);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
if ($rowperpage == -1) {
    $empQuery = "select * from service_report " . $WHERE . " order by " . $columnName . " " . $columnSortOrder;
} else {
    $empQuery = "select * from service_report " . $WHERE . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
}
$empRecords = mysqli_query($con, $empQuery);

$data = array();
$total = 0; // initialize total

while ($row = mysqli_fetch_assoc($empRecords)) {
    $total += floatval($row["daily_count"]);
    $data[] = array(
        "service_name" => $row['service_name'],
        "daily_count" => $row['daily_count'],
        "service_add_date" => $row['service_add_date'],
    );
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data,
    "total" => number_format($total, 2) // Format the total with two decimal places
);

echo json_encode($response);
?>
