<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2023 20:41:57 GMT -->
    <head>
        <?php include '../../web-layouts/head.php';?>
        <style>
            /* CSS to style the custom layout */
div.dataTables_wrapper div.row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

div.dataTables_wrapper div.row .col-sm-6 {
    padding: 0;
}

div.dataTables_wrapper div.row .col-sm-6:first-child {
    display: flex;
    align-items: center;
}

div.dataTables_wrapper div.row .col-sm-6:last-child {
    text-align: right;
}

div.dataTables_wrapper div.row .dataTables_length {
    margin-bottom: 0;
}

        </style>

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
                                    <h4 class="mb-sm-0 font-size-18">Services</h4>

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
                                        <button type="button" class="btn btn-light waves-effect" data-bs-toggle="modal" data-bs-target="#serviceAddModal"><i class="bx bx-plus align-middle"></i> Add New Service</button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                        <!--Add unit modal-->
                        <div id="serviceAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">ADD</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <form id="service_add_frm">
                                                <div class="row">
                                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Service name</label>
                                                            <input type="text" class="form-control" id="formrow-email-input" name="service_name" id="service_name" placeholder="Enter Service Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Department Name</label>
                                                            <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select department" id="department_id_fk" name="department_id_fk" data-dropdown-parent="#serviceAddModal">
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
                        <!--unit update modal-->
                        <div id="serviceEditModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">UPDATE</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body bg-white">
                                            <form id="service_update_frm">
                                                <div class="row">
                                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Service name</label>
                                                            <input type="text" class="form-control" name="eservice_name" id="eservice_name" placeholder="Enter Service Name">
                                                            <input type="hidden" class="form-control" name="eservice_id" id="eservice_id" placeholder="Enter Service Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-email-input" class="form-label">Department Name</label>
                                                            <select class="form-control select2" style="display: block;width: 100%;" data-control="select2" data-placeholder="Select department" id="edepartment_id_fk" name="edepartment_id_fk" data-dropdown-parent="#serviceEditModal">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>          
                                                <button type="submit" id="update_service" class="btn btn-success waves-effect waves-light">Update</button>
                                                                
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
        
                                        <h4 class="card-title text-white">Service Details</h4>
                                        <p class="card-title-desc">

                                        </p>
        
                                        <table id="serviceList" class="table table-bordered dt-responsive  nowrap w-100 text-white">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Department</th>
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

                        <div class="row">
                            <form id="department_add_frm">
                                <div class="row">
                                                                        
                                    
                                    <div class="col-lg-4">
                                        <select class="form-control select2 service_id_fk" id="searchByName">
                                            <option value="">Please select service</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <div class="input-daterange input-group" id="datepicker6" data-date-format="yyyy-mm-dd" data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                                <input type="text" class="form-control" name="search_fromdate" id="search_fromdate" placeholder="Start Date">
                                                <input type="text" class="form-control" name="search_todate" id="search_todate" placeholder="End Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <button type="button" id="btn_search" class="btn btn-success waves-effect waves-light">Filter</button>
                                        </div>
                                    </div>
                                        
                                </div>                                 
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title text-white">Service Report</h4>
                                        <p class="card-title-desc">

                                        </p>
        
                                        <table id="servicerTable" class="table table-bordered dt-responsive nowrap w-100 text-white">
                                            <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Date</th>
                                                <th>Entry</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                            <th colspan="2">Total</th>
                                            <th id="total"></th>
                                            </tr>
                                            </tfoot>
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
    
        $("#service_add_frm").on("submit", function(e){
            e.preventDefault();
            $.ajax({
            url  :"add_service.php",
            type :"POST",
            cache:false,
            contentType : false, // you can also use multipart/form-data replace of false
            processData : false,
            data: new FormData(this),
                success:function(response){
                    $("#success").show();
                    $("#service_name").val("");
                    $("#department_id_fk").val(null).trigger('change');
                    $('#serviceAddModal').modal('hide');
                    unit_tbl.ajax.reload();
                    alert('Service Details Inserted');
                }
            });
        });
    
            $(document).ready(function() {
                unit_tbl=$('#serviceList').DataTable({
                'serverSide': 'true',
                'processing': 'true',
                'paging': 'true',
                'order': [],
                'ajax': {
                'url': 'fetch_service.php',
                'type': 'post',
                },
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [2]
                },

                ]
                });
            });
    

    
        $(document).on('click', '#edit_service', function(){  
            var service_id = $(this).attr("data-id");
           $.ajax({  
                url:"edit_service.php",  
                method:"POST",  
                data:{service_id:service_id},  
                dataType:"json",  
                success:function(data){ 
                    //console.log(response); 
                    $('#eservice_id').val(service_id);
                    $('#eservice_name').val(data.service_name);
                    $("#edepartment_id_fk").html('<option value = "'+data.department_id_fk+'" selected >'+data.department_name+'</option>');
                    $('#serviceEditModal').modal('show');
                }  
           });  
        });  

        

            $('#service_update_frm').on('submit', function(event){
                 event.preventDefault();
                $.ajax({
                    url:"update_service.php",
                    method:"POST",
                    data:$('#service_update_frm').serialize(),
                    success:function(data)
                    {
                    $('#serviceEditModal').modal('hide');
                    unit_tbl.ajax.reload();
                    alert('Service Details updated');
                    }
                });
            }); 

            $(document).on('click', '#delete_service', function(event) {
                var table = $('#serviceList').DataTable();
                event.preventDefault();
                var id = $(this).data('id');
                if (confirm("Are you sure want to delete this Unit ? ")) {
                    $.ajax({
                    url: "delete_service.php",
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
                        unit_tbl.ajax.reload();
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

            $(document).ready(function() {
                var dataTable = $('#servicerTable').DataTable({
                    'processing': true,
                    'serverSide': true,
                    'serverMethod': 'post',
                    'searching': true,
                    'ajax': {
                        'url': 'fetch_report2.php',
                        'data': function(data) {
                            // Read values
                            var name = $("#searchByName").val();
                            var from_date = $('#search_fromdate').val();
                            var to_date = $('#search_todate').val();

                            // Append to data
                            data.searchByName = name;
                            data.searchByFromdate = from_date;
                            data.searchByTodate = to_date;
                        }
                    },
                    'columns': [
                        { data: 'service_name' },
                        { data: 'service_add_date' },
                        { data: 'daily_count' }
                    ],
                    'dom': '<"row"<"col-sm-6"l><"col-sm-6"fB>>rtip', // Custom layout with length menu and print button in the same row
                    'lengthMenu': [[10, -1], [10, 'All']], // Show Entries options
                    'buttons': [
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            customize: function(win) {
                                $(win.document.body).find('h1').text('Service Report');

                                var table = $(win.document.body).find('table').addClass('display');
                table.css({
                    'font-size': '12px',
                });
                table.find('th, td').css({
                    'border-color': 'black'
                });
                table.find('th').css({
                    'border-width': '1px',
                    'color': 'black'
                });
                table.find('td').css({
                    'border-width': '1px',
                    'color': 'black'
                });
                                var tfoot = table.find('tfoot');
                                
                                if (tfoot.length === 0) {
                                    tfoot = $('<tfoot style="border-color: black;border-width: 1px;">').appendTo(table);
                                    tfoot.append('<tr><th colspan="2" style="color: black;">Total</th><th id="total" style="color: black;"></th></tr>');
                                }

                                var total = dataTable.column(2, { page: 'current' }).data().reduce(function(a, b) {
                                    return parseFloat(a) + parseFloat(b);
                                }, 0);
                                table.find('#total').text(Math.floor(total));
                                tfoot.show();

                                // Remove background image in print modal
                                $(win.document.body).css('background-image', 'none');
                            }
                        }
                    ]
                });

                // Recalculate total and update table footer on draw event
                dataTable.on('draw.dt', function() {
                    var total = dataTable.column(2, { page: 'current' }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    $('#total').text(total); // Update the total value
                });

                // Search button
                $('#btn_search').click(function() {
                    dataTable.draw();
                });
            });


        $(document).ready(function(){

            $(".service_id_fk").select2({
            allowClear: true,
            placeholder: "Select a service",
            ajax: { 
            url: "service_selc_ldr.php",
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
            allowClear: true,
            placeholder: "Select a department",
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

        $(document).ready(function(){

        $("#edepartment_id_fk").select2({
            allowClear: true,
            placeholder: "Select a department",
                ajax: { 
                url: "edepartment_selc_ldr.php",
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
        
    });

</script>