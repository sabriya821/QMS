       <?php $url="/"; ?>
        <?php 
        session_start(); 
        if (!$_SESSION['uname']) {
            ?>
                <script>
                    location.href="<?php echo $url ?>auth-login.php";
                </script>
            <?php
        }
    ?>
    <title>Divisional Secretariat Eravur Town</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $url;?>assets/images/title.png">

        <link href="<?php echo $url;?>assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url;?>assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $url;?>assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $url;?>assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $url;?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo $url;?>assets/libs/%40chenfengyuan/datepicker/datepicker.min.css">
        <!-- Bootstrap Css -->
        <link href="<?php echo $url;?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo $url;?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo $url;?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="<?php echo $url;?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url;?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?php echo $url;?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        
        <style>
            body {
                background-image: url('<?php echo $url;?>assets/images/bg5.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .banner-img {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .banner-img img {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }
            @media print {
                .print-content {
                    font-size: 12px; /* Adjust the font size as needed */
                    margin: 0; /* Remove any unnecessary margins */
                    padding: 0; /* Remove any unnecessary padding */
                }
            }
            
        </style>