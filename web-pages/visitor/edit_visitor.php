<?php  
 //fetch.php  

 require_once('../../connection.php');
 
 if(isset($_POST["visitor_id"]))  
 {  
   
    $query ="SELECT * FROM visitor v
    INNER JOIN division d ON d.division_id = v.division_id_fk 
    WHERE v.visitor_id = '".$_POST["visitor_id"]."'";

      $result = mysqli_query($con, $query);   
      foreach($result as $row)
          {
            $output['visitor_name'] =$row["visitor_name"];
            $output['address'] =$row["address"];
            $output['occupation'] =$row["occupation"];
            $output['phone_num'] =$row["phone_num"];
            $output['email'] =$row["email"];
            $output['passport_num'] =$row["passport_num"];
            $output['i_d'] =$row["i_d"];
            $output['dob'] =$row["dob"];
            $output['division_name'] =$row["division_name"];
            $output['marital_status'] =$row["marital_status"];
            $output['division_id_fk'] =$row["division_id_fk"];
            $output['visitor_gender'] =$row["visitor_gender"];
          }
      echo json_encode($output);  
 }  

 ?>
 

 