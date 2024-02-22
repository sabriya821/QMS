<?php include('../../connection.php');

$output= array();
$sql ="SELECT * FROM visitor v
INNER JOIN division d ON d.division_id = v.division_id_fk";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(									
	0 => 'visitor_name',
    0 => 'visitor_gender',
    0 => 'address',
    0 => 'dob',
	0 => 'division_name',
    1 => 'i_d',
    2 => 'phone_num',
    3 => 'add_date',
    
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE visitor_id like '%".$search_value."%'";
	$sql .= " OR visitor_name like '%".$search_value."%'";
    $sql .= " OR visitor_gender like '%".$search_value."%'";
	$sql .= " OR address like '%".$search_value."%'";
    $sql .= " OR dob like '%".$search_value."%'";
	$sql .= " OR i_d like '%".$search_value."%'";
	$sql .= " OR phone_num like '%".$search_value."%'";
	$sql .= " OR add_date like '%".$search_value."%'";
	$sql .= " OR division_name like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY visitor_id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = '<p><strong>Name: </strong>'.$row['visitor_name'].'<br><strong>Gender: </strong>'.$row['visitor_gender'].'<br><strong>Address: </strong>'.$row['address'].'<br><strong>Division: </strong>'.$row['division_name'].'</p>';
    $sub_array[] = '<p><strong>NIC: </strong>'.$row['i_d']; //id
    $sub_array[] = '<p><strong>Mobile: </strong>'.$row['phone_num'].'<br>'; //id
    $sub_array[] = $row['add_date'];
	$sub_array[] = '<a id="edit_visitor" data-id="'.$row['visitor_id'].'" class="btn btn-success waves-effect btn-label waves-light" ><i class="mdi mdi-pencil label-icon"></i> Edit</a> <a id="view_visitor_que" data-id="'.$row['visitor_id'].'" quev-id="'.$row['visitor_id'].'" class="btn btn-primary waves-effect btn-label waves-light" ><i class="mdi mdi-book-settings label-icon"></i> Que</a> <a id="print_visitor_que" data-id="'.$row['visitor_id'].'" class="btn btn-secondary waves-effect btn-label waves-light" ><i class="mdi mdi-printer label-icon"></i> Print</a> <br><br><a id="visitor_report" data-id="'.$row['visitor_id'].'" class="btn btn-warning waves-effect btn-label waves-light" ><i class="mdi mdi-eye label-icon"></i> Past Services</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);

?>