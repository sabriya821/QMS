
<?php  
 //fetch.php  
 require_once('../../connection.php');  
 if(isset($_POST["action"])) 
 {    
      if($_POST["action"] == '2'){
        if(isset($_POST["visitor_id4"]))  
            {  
              $visitor_id4 = $_POST['visitor_id4'];

$query ="SELECT * FROM que q
INNER JOIN visitor v ON q.visitor_id_fk = v.visitor_id
INNER JOIN department dp ON q.department_id_fk = dp.department_id
INNER JOIN service s ON q.service_id_fk = s.service_id
WHERE q.visitor_id_fk='$visitor_id4'";

$result = $con->query($query);
?>
<div class="row">
                    
<div class="col-12">
    <div class="card">
        <div class="card-body bg-white">
                    
            <h4 class="card-title">Past Services Report</h4>
            <p class="card-title-desc">

            </p>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
              <div class="statbox widget box box-shadow">
                  <div class="widget-content widget-content-area br-8">
                      <table id="visitorReport" class="table dt-table-hover" style="width:100%">
                          <thead>
                              <tr>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Branch</th>
                                <th>Services</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                                  foreach($result as $row)
                                  {
                                      echo '
                                      <tr>
                                      <td>'.$row["created_time"].'</td>
                                          <td>'.$row["created_date"].'</td>
                                          <td>'.$row["department_name"].'</td>
                                          <td>'.$row["service_name"].'</td>
                                      </tr>
                                      ';
                                  }
                              ?>
                                                                                                      
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>     
        </div>
    </div>
</div> 
                                                        
</div>
 <script>

var dataTable =$('#visitorReport').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 10 
            });

</script>
 <?php
          }  
        
      }
      
        
}  

 ?>
 
 