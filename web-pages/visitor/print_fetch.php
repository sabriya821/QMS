<?php  
 //fetch.php  
date_default_timezone_set("Asia/Colombo");

 require_once('../../connection.php');
 
 if(isset($_POST["que_ini_prnt"]))  
 {  
   
    $query ="SELECT * FROM que
    JOIN department
      ON department.department_id = que.department_id_fk
    JOIN visitor
      ON visitor.visitor_id = que.visitor_id_fk
      JOIN service
      ON service.service_id = que.service_id_fk
    LEFT OUTER JOIN division
      ON division.division_id = visitor.division_id_fk
    WHERE que.que_id = '".$_POST["que_ini_prnt"]."'";

      $result = mysqli_query($con, $query);  

      foreach($result as $row)
          {
            echo '
            <span>
            <div class="text-center" style="width: 173px; font-size:13.5px;">
            <h6 class="text-center"><strong>Ds Office Eravur Town</strong><br> '.$row['visitor_name'].' 
            <br> '.$row['que_uniq_id'].' 
            <br> '.$row['service_name'].'
            <br> '.$row['created_date'].' '.date("h:i:a").'
            <br>Tel-No: 0652240516
            <br>
            ...............................
            </h6>
            <br>
            <br>
            <br>
            <br>
            <br>
            .
            </div>
            </span> ';

          }


      
 }  

 ?>
      
      <?php

 ?>
