
<?php 
include('../../connection.php');

$user_id = $_POST['id'];
$sql = "DELETE FROM visitor WHERE visitor_id='$user_id'";
$delQuery =mysqli_query($con,$sql);

$resetAutoIncrementQuery = "ALTER TABLE visitor AUTO_INCREMENT = 1";
mysqli_query($con, $resetAutoIncrementQuery);

if($delQuery==true)
{
	 $data = array(
        'status'=>'success',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
      
    );

    echo json_encode($data);
} 

?>
