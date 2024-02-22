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
                                    <h4 class="mb-sm-0 font-size-18">Branches</h4>

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
                                        <button type="button" class="btn btn-light waves-effect" data-bs-toggle="modal" data-bs-target="#departmentAddModal"><i class="bx bx-plus align-middle"></i> Add New Branch</button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                        <!--Add division modal-->
                        <div id="departmentAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">ADD</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <form id="department_add_frm">
                                                <div class="row">
                                                                    
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Department name</label>
                                                            <input type="text" class="form-control" id="department_name" name="department_name" placeholder="Enter Department Name">
                                                        </div>
                                                    </div>
                                                </div>          
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                                                
                                            </form>
                                                    
                                        </div>
                                    </div>
                                    
                                                
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!--division update modal-->
                        <div id="departmentEditModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">UPDATE</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <form id="department_update_frm">
                                                <div class="row">
                                                                    
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Department name</label>
                                                            <input type="text" class="form-control" id="edepartment_name" name="edepartment_name" placeholder="Enter Department Name">
                                                            <input type="hidden" class="form-control" id="edepartment_id" name="edepartment_id" placeholder="Enter Department Name">
                                                        </div>
                                                    </div>
                                                </div>          
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                                                
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
        
                                        <h4 class="card-title text-white">Branch Details</h4>
                                        <p class="card-title-desc">

                                        </p>
        
                                        <table id="departmentList" class="table table-bordered dt-responsive  nowrap w-100 text-white">
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
	$("#department_add_frm").on("submit", function(e){
        e.preventDefault();
        $.ajax({
        url  :"add_department.php",
        type :"POST",
        cache:false,
        contentType : false, // you can also use multipart/form-data replace of false
        processData : false,
        data: new FormData(this),
            success:function(response){
                $('#departmentAddModal').modal('hide');
                $("#department_name").val("");
                department_tbl.ajax.reload();
                alert('Department Details Inserted');
            }
        });
	});

    
        $(document).ready(function() {
        department_tbl=$('#departmentList').DataTable({
                'serverSide': 'true',
                'processing': 'true',
                'paging': 'true',
                'order': [],
                'ajax': {
                'url': 'fetch_department.php',
                'type': 'post',
                },
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [1]
                },

                ]
                });
            });
    

    
        $(document).on('click', '#edit_department', function(){  
            var department_id = $(this).attr("data-id");
           $.ajax({  
                url:"edit_department.php",  
                method:"POST",  
                data:{department_id:department_id},  
                dataType:"json",  
                success:function(data){ 
                    //console.log(response); 
                    $('#edepartment_id').val(department_id);
                    $('#edepartment_name').val(data.department_name);
                    $('#departmentEditModal').modal('show');
                }  
           });  
        });  

        
        $('#department_update_frm').on('submit', function(event){
            event.preventDefault();
                $.ajax({
                    url:"update_department.php",
                    method:"POST",
                    data:$('#department_update_frm').serialize(),
                    success:function(data)
                    {
                    $('#departmentEditModal').modal('hide');
                    department_tbl.ajax.reload();
                    alert('Department Details updated');
                    }
                });
            }); 

            $(document).on('click', '#delete_department', function(event) {
            var table = $('#kt_datatable_dom_positioning').DataTable();
            event.preventDefault();
            var id = $(this).data('id');
            if (confirm("Are you sure want to delete this Department ? ")) {
                $.ajax({
                url: "delete_department.php",
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
                    department_tbl.ajax.reload();
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