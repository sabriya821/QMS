<?php include('../../connection.php');

$output= array();
$sql = "SELECT * FROM que
JOIN visitor
  ON visitor.visitor_id = que.visitor_id_fk";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'que_uniq_id',
	1 => 'visitor_name',
	2 => 'created_date',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE que_uniq_id like '%".$search_value."%'";
	$sql .= " OR visitor_name like '%".$search_value."%'";
	$sql .= " OR created_date like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY que_id desc";
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
	$sub_array[] = $row['que_uniq_id'];
	$sub_array[] = '<p><strong>Name: </strong>'.$row['visitor_name'].'</p>';
	$sub_array[] = $row['created_date'];
	$sub_array[] = $row['created_time'];
	$sub_array[] = '<a id="print_que" print-id="'.$row['que_id'].'" class="btn btn-light waves-effect btn-label waves-light" ><i class="fa fa-print label-icon"></i> Print</a> ';
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