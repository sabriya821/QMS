<?php  
 //fetch.php  
 include('../../connection.php');
 if(isset($_POST["division_id"]))  
 {  
      $query = "SELECT * FROM division WHERE division_id = '".$_POST["division_id"]."'";  
      $result = mysqli_query($con, $query);   
      foreach($result as $row)
          {
            $output['division_name'] =$row["division_name"];
          }
      echo json_encode($output);  
 }  

 ?>
 

 