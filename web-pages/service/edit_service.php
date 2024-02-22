<?php  
 //fetch.php  

 require_once('../../connection.php');
 
 if(isset($_POST["service_id"]))  
 {  
      $query = "SELECT * FROM service s
                INNER JOIN department d ON d.department_id = s.department_id_fk 
                WHERE s.service_id = '".$_POST["service_id"]."'";  
      $result = mysqli_query($con, $query);   
      foreach($result as $row)
          {
            $output['service_name'] =$row["service_name"];
            $output['department_name'] =$row["department_name"];
          }
      echo json_encode($output);  
 }  

 ?>
 

 