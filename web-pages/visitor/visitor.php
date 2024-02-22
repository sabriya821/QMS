<!doctype html>
<html lang="en">

    

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
                        <div class="row d-print-none">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Customer</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active"></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row mb-4 d-print-none">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-3 flex-grow-1">
                                        
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light waves-effect" data-bs-toggle="modal" data-bs-target="#visitorAddModal"><i class="bx bx-plus align-middle"></i> Add New Customer</button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                        <!--Add division modal-->
                        <div id="visitorAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">ADD</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">

                                            <form id="visitor_add_frm">
                                                <div class="row">
                                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="visitor_name" name="visitor_name" placeholder="Enter Customer Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Gender</label>
                                                        <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select gender" id="visitor_gender" name="visitor_gender" data-dropdown-parent="#visitorAddModal">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                                    
                                                <div class="row">
                                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Address</label>
                                                            <input type="text" class="form-control" placeholder="Enter Address" id="address" name="address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Division</label>
                                                        <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select Division" id="division_id_fk" name="division_id_fk" data-dropdown-parent="#visitorAddModal">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">NIC / Elder ID</label>
                                                            <input type="text" class="form-control" placeholder="Enter Customer ID" id="i_d" name="i_d">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Mobile No</label>
                                                            <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="Enter Customer Mobile No">
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
                        <div id="visitorEditModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">UPDATE</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <form id="visitor_update_frm">
                                                <div class="row">
                                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="evisitor_name" name="evisitor_name" placeholder="Enter Customer Name">
                                                            <input type="hidden" class="form-control" id="evisitor_id" name="evisitor_id" placeholder="Enter Customer Name">
                                                        </div>
                                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label">Gender</label>
                                                        <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select gender" id="evisitor_gender" name="evisitor_gender" data-dropdown-parent="#visitorEditModal">
                                                        </select>
                                                    </div>
                                                </div>
                                                                    
                                                <div class="row">
                                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Address</label>
                                                            <input type="text" class="form-control" placeholder="Enter Customer Address" id="eaddress" name="eaddress">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Division</label>
                                                        <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select division" id="edivision_id_fk" name="edivision_id_fk" data-dropdown-parent="#visitorEditModal">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">NIC / Elder ID</label>
                                                            <input type="text" class="form-control" placeholder="Enter Customer ID" id="ei_d" name="ei_d">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Mobile No</label>
                                                            <input type="text" class="form-control" id="ephone_num" name="ephone_num" placeholder="Enter Customer Mobile No">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" id="update_visitor" class="btn btn-success waves-effect waves-light">Update</button>
                                                                
                                            </form>
                                                    
                                        </div>
                                    </div>
                                    
                                                
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <div id="queAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">ADD</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">

                                            <form id="que_add_frm">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Customer</label>
                                                                <input type="text" class="form-control" placeholder="Enter Customer Name" id="vvisitor_name" name="vvisitor_name" disabled>
                                                                <input type="hidden" class="form-control" placeholder="Enter Customer Name" id="vvisitor_id" name="vvisitor_id">
                                                            </div>
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Department</label>
                                                            <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select depart" id="department_id_fk" name="department_id_fk" data-dropdown-parent="#queAddModal">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                                    
                                                <div class="row">
                                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Service</label>
                                                            <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select service" id="service_id_fk" name="service_id_fk" data-dropdown-parent="#queAddModal">
                                                            </select>
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

                        <div id="quePrintModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <div id="data2" class="d-print-none"></div>
                                        </div>
                                    </div>        
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <div id="visitorReportModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">

                                            <div id="data_report"></div>
                                                    
                                        </div>
                                    </div>
                                    
                                    
                                                
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <div id="exampleModalFullscreen" class="modal fade" tabindex="-1" aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content text-center">
                                    <div class="modal-body">
                                        <div id="data3"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="d-print-none">
                                            <div class="float-end">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                                                
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <div class="row d-print-none">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title text-white">Customer Details</h4>
                                        <p class="card-title-desc">

                                        </p>
        
                                        <table id="visitorList" class="table table-bordered nowrap w-100 text-white">
                                            <thead>
                                            <tr>
                                                <th>Personal Info</th>
                                                <th>Identity</th>
                                                <th>Contact Info</th>
                                                <th>Date</th>
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
	$("#visitor_add_frm").on("submit", function(e){
        e.preventDefault();
        $.ajax({
        url  :"add_visitor.php",
        type :"POST",
        cache:false,
        contentType : false, // you can also use multipart/form-data replace of false
        processData : false,
        data: new FormData(this),
            success:function(response){
                $('#visitorAddModal').modal('hide');
                $("#visitor_name").val("");
                $("#visitor_gender").val(null).trigger('change');
                $("#address").val("");
                $("#division_id_fk").val(null).trigger('change');
                $("#dob").val("");
                $("#i_d").val("");
                $("#phone_num").val("");
                visitor_tbl.ajax.reload();
                alert('Visitor Details Inserted');
            }
        });
	});

            $("#que_add_frm").on("submit", function(e){
                e.preventDefault();
                $.ajax({
                url  :"add_que.php",
                type :"POST",
                cache:false,
                contentType : false, // you can also use multipart/form-data replace of false
                processData : false,
                data: new FormData(this),
                    success:function(response){
                        $('#queAddModal').modal('hide');
                        $("#department_id_fk").val(null).trigger('change');
                        $("#service_id_fk").val(null).trigger('change');
                        //que_tbl.ajax.reload();
                        alert('Que Details Inserted');
                    }
                });
            });

        $(document).ready(function(){

            $("#division_id_fk").select2({
            dropdownParent: $("#visitorAddModal"),
            placeholder: "Make a Division Selection",
            allowClear: true,
            ajax: { 
                url: "division_selc_ldr.php",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                    searchTerm: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
                }
            });
        });
    
        

        $(document).ready(function() {
            visitor_tbl = $('#visitorList').DataTable({
                'serverSide': true,
                'processing': true,
                'paging': true,
                'order': [],
                'ajax': {
                    'url': 'fetch_visitor.php',
                    'type': 'post',
                },
                'columnDefs': [{
                    'targets': [4],
                    'orderable': false,
                }],
            });
        });

    
            $(document).on('click', '#edit_visitor', function(){
                var visitor_id = $(this).attr("data-id");
                $.ajax({
                    url: "edit_visitor.php",
                    method: "POST",
                    data: {visitor_id: visitor_id},
                    dataType: "json",
                    success: function(data){
                        $('#evisitor_id').val(visitor_id);
                        $('#evisitor_name').val(data.visitor_name);
                        $('#eaddress').val(data.address);
                        $('#eoccupation').val(data.occupation);
                        $('#ephone_num').val(data.phone_num);
                        $('#eemail').val(data.email);
                        $('#ei_d').val(data.i_d);
                        $('#edob').val(data.dob);

                        // Set marital status options based on selected value
                        $("#edivision_id_fk").html('<option value="' + data.division_id_fk + '" selected>' + data.division_name + '</option>');
                        if (data.visitor_gender === 'male') {
                            $("#evisitor_gender").html('<option value="male" selected>Male</option><option value="female">Female</option>');
                        } else if (data.visitor_gender === 'female') {
                            $("#evisitor_gender").html('<option value="female" selected>Female</option><option value="male">Male</option>');
                        }
                        $('#visitorEditModal').modal('show');
                    }
                });
            });
  

        $(document).on('click', '#view_visitor_que', function(){  
            var visitor_id2 = $(this).attr("data-id");
            $.ajax({  
                url:"view_visitor_que.php",  
                method:"POST",  
                data:{visitor_id2:visitor_id2,action:'1'},  
                dataType:"json",  
                success:function(data){ 
                    //console.log(response); 
                    $('#vvisitor_id').val(visitor_id2);
                    $('#vvisitor_name').val(data.visitor_name);
                    $('#queAddModal').modal('show');
                }  
           }); 
           
        });  

        $(document).on('click', '#print_visitor_que', function(){  
            var visitor_id3 = $(this).attr("data-id");
           
           $.ajax({
                type: "POST",
                url: "print_visitor_que.php",
                data:{visitor_id3:visitor_id3,action:'2'}, 
                dataType: "html",
                success: function (data) {
                    $('#quePrintModal').modal('show');
                    $("#data2").html(data);

                }
            });
           
        }); 
        
        $(document).on('click', '#visitor_report', function(){  
            var visitor_id4 = $(this).attr("data-id");
           
           $.ajax({
                type: "POST",
                url: "visitor_report.php",
                data:{visitor_id4:visitor_id4,action:'2'}, 
                dataType: "html",
                success: function (data) {
                    $('#visitorReportModal').modal('show');
                    $("#data_report").html(data);

                }
            });
           
        });

        $(document).ready(function(){

            $("#edivision_id_fk").select2({
            dropdownParent: $("#visitorEditModal"),
            placeholder: "Make a Division Selection",
            allowClear: true,
            ajax: { 
                url: "edivision_selc_ldr.php",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                    searchTerm: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
                }
            });
        });

        $(document).ready(function(){

            $("#visitor_id_fk").select2({
            dropdownParent: $("#queAddModal"),
            placeholder: "Make a Visitor Selection",
            allowClear: true,
            ajax: { 
                url: "visitor_selc_ldr.php",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                    searchTerm: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
                }
            });
        });

        $(document).ready(function(){

            $("#department_id_fk").select2({
            dropdownParent: $("#queAddModal"),
            placeholder: "Make a Department Selection",
            allowClear: true,
            ajax: { 
                url: "department_selc_ldr.php",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                    searchTerm: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
                }
            });
        });

        

        $("#service_id_fk").select2({
            dropdownParent: $("#queAddModal"),
            placeholder: "Make a Service Selection",
            allowClear: true
        });

    // On change event of the first dropdown
            $("#department_id_fk").on("change", function() {
                var selectedValue = $(this).val();

                // Clear the options in the second dropdown
                $("#service_id_fk").empty();

                if (selectedValue !== "") {
                    // Send an AJAX request to the PHP script to get filtered data for the second dropdown
                    $.ajax({
                        url: "service_selc_ldr.php",
                        type: "post",
                        dataType: "json",
                        data: {
                            searchTerm: selectedValue
                        },
                        success: function(response) {
                            // Append the filtered options to the second dropdown
                            for (var i = 0; i < response.length; i++) {
                                var option = new Option(response[i].text, response[i].id, true, true);
                                $("#service_id_fk").append(option).trigger("change");
                            }
                        }
                    });
                }
            });

            $(document).on('click', '#print_que', function(){  
                var que_ini_prnt = $(this).attr("print-id");  
                $.ajax({  
                        url:"print_fetch.php",  
                        method:"POST",  
                        data:{que_ini_prnt:que_ini_prnt},  
                        dataType:"html",  
                        success:function(data){
                            //console.log(response);
                            $("#data3").html(data);
                            $('#exampleModalFullscreen').modal('show');
                        }  
                });

            });  
        

            $('#visitor_update_frm').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"update_visitor.php",
                    method:"POST",
                    data:$('#visitor_update_frm').serialize(),
                    success:function(data)
                    {
                    $('#visitorEditModal').modal('hide');
                    visitor_tbl.ajax.reload();
                    alert('Visitor Details updated');
                    }
                });
            }); 

            $(document).on('click', '#delete_visitor', function(event) {
                var table = $('#visitorList').DataTable();
                event.preventDefault();
                var id = $(this).data('id');
                if (confirm("Are you sure want to delete this Visitor ? ")) {
                $.ajax({
                url: "delete_visitor.php",
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
                    visitor_tbl.ajax.reload();
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
