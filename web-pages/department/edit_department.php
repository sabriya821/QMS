<?php  
 //fetch.php  

 require_once('../../connection.php');
 
 if(isset($_POST["department_id"]))  
 {  
   
    $query ="SELECT * FROM department  WHERE department_id = '".$_POST["department_id"]."'";

      $result = mysqli_query($con, $query);   
      foreach($result as $row)
          {
            $output['department_name'] =$row["department_name"];
          }
      echo json_encode($output);  
 }  

 ?>
 

 