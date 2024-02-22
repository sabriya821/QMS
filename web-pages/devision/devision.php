<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2023 20:41:57 GMT -->
    <head>
        <?php include '../../web-layouts/head.php';?>

    </head>

    <body data-sidebar="light" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
        <?php include '../../web-layouts/header.php';?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include '../../web-layouts/side-bar.php';?>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Divisions</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active"></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-3 flex-grow-1">
                                        
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light waves-effect" data-bs-toggle="modal" data-bs-target="#divisionAddModal"><i class="bx bx-plus align-middle"></i> Add New Division</button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                        <!--Add division modal-->
                        <div id="divisionAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">ADD</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <form id="division_add_frm">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="division_name" class="form-label">Division name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Division Name" name="division_name" id="division_name">
                                                        </div>
                                                    </div>
                                                           
                                                </div> 
                                                 <button type="submit" id="add_division" class="btn btn-success waves-effect waves-light">Save</button>            
                                                                        
                                            </form>
                                                    
                                        </div>
                                    </div>
                                    
                                                
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!--division update modal-->
                        <div id="divisionEditModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">UPDATE</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <form id="division_update_frm">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="division_name" class="form-label">Division name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Devision Name" name="edivision_name" id="edivision_name">
                                                            <input type="hidden" class="form-control" placeholder="Enter Devision Name" name="edivision_id" id="edivision_id">
                                                        </div>
                                                    </div>
                                                    
                                                </div> 
                                                <button type="submit" id="update_division" class="btn btn-success waves-effect waves-light">Update</button>      
                                                                        
                                            </form>
                                                    
                                        </div>
                                    </div>
                                    
                                                
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title text-white">Division Details</h4>
                                        <p class="card-title-desc">

                                        </p>
        
                                        <table id="divisionList" class="table table-bordered dt-responsive  nowrap w-100 text-white">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
                                            <tbody>
                                            
                                            </tbody>
                                        </table>
                                        
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>

                </div>
                <!-- End Page-content -->

                <?php include '../../web-layouts/footer.php';?>
            </div>

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <?php include '../../web-layouts/script.php';?>

    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2023 20:42:34 GMT -->
</html>

<script type="text/javascript">
$(document).ready(function(){
	$("#division_add_frm").on("submit", function(e){
        e.preventDefault();
        $.ajax({
        url  :"add_division.php",
        type :"POST",
        cache:false,
        contentType : false, // you can also use multipart/form-data replace of false
        processData : false,
        data: new FormData(this),
            success:function(response){
                $("#division_name").val("");
                $('#divisionAddModal').modal('hide');
                division_tbl.ajax.reload();
                alert('Division Details Inserted');
            }
        });
	});
    
    $(document).ready(function() {
        division_tbl=$('#divisionList').DataTable({
                'serverSide': 'true',
                'processing': 'true',
                'paging': 'true',
                'order': [],
                'ajax': {
                'url': 'fetch_division.php',
                'type': 'post',
                },
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [1]
                },

                ]
                });
            });
    

    
        $(document).on('click', '#edit_division', function(){  
            var division_id = $(this).attr("data-id");
           $.ajax({  
                url:"edit_division.php",  
                method:"POST",  
                data:{division_id:division_id},  
                dataType:"json",  
                success:function(data){ 
                    //console.log(response); 
                    $('#edivision_id').val(division_id);
                    $('#edivision_name').val(data.division_name);
                    $('#divisionEditModal').modal('show');
                }  
           });  
        });  

        

        $('#division_update_frm').on('submit', function(event){
            event.preventDefault();
                $.ajax({
                    url:"update_division.php",
                    method:"POST",
                    data:$('#division_update_frm').serialize(),
                    success:function(data)
                    {
                    $('#divisionEditModal').modal('hide');
                    division_tbl.ajax.reload();
                    alert('Division Details updated');
                    }
                });
            }); 

            $(document).on('click', '#delete_division', function(event) {
            var table = $('#kt_datatable_dom_positioning').DataTable();
            event.preventDefault();
            var id = $(this).data('id');
            if (confirm("Are you sure want to delete this Division ? ")) {
                $.ajax({
                url: "delete_division.php",
                data: {
                    id: id
                },
                type: "post",
                success: function(data) {
                    var json = JSON.parse(data);
                    status = json.status;
                    if (status == 'success') {
                    //table.fnDeleteRow( table.$('#' + id)[0] );
                    //$("#example tbody").find(id).remove();
                    //table.row($(this).closest("tr")) .remove();
                    $("#" + id).closest('tr').remove();
                    division_tbl.ajax.reload();
                    } else {
                    alert('Failed');
                    return;
                    }
                }
                });
                } else {
                    return null;
                }



            });

        
    
});

</script>