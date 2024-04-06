<?php 
 include('includes/header.php');
 include('../config/conn.php');
 $sql = "SELECT * FROM geriatric_care";
    $stmt = $pdo->prepare($sql);

    // Execute the query
    $stmt->execute();

    // Fetch all rows as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
?>
    <style>
        td.details-control {
            background: url('assets/new/images/details_open.png') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('assets/new/images/details_close.png') no-repeat center center;
        }
    </style>
</head>

<body class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/img/logo-dark.png" width="48" height="48" alt="Medx"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div id="wrapper">

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>

                <div class="navbar-brand">
                    <a href="dashboard.php"><img src="medx.png" alt="Medx Logo" class="img-responsive logo"></a>
                </div>

                <div class="navbar-right">


                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <div class="dropdown">
                                    <img src="assets/new/images/sm/avatar2.jpg" class="rounded-circle square-image"
                                        alt="profile-image" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" width="40">

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Harshitha</a>
                                        <a class="dropdown-item" href="#">Logout</a>

                                    </div>
                                </div>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <?php 
   include('includes/sidebar.php');
   ?>

        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-7 col-6">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                            class="fa fa-arrow-left"></i></a><a href="patient-profile.php"> Enquiry
                                    </a></h2>
                                 <?php 
                                
                                 ?>
                            </div>
                        </div>
                        <!-- <div class="col-sm-5 col-6  m-b-30" style="text-align: end;align-items: end;">
                            <a href="addenquiry.php" class="btn btn-primary btn-rounded"><i
                                    class="fa fa-plus"></i>
                                Add Enquiry</a>
                        </div> -->
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom">
                                        <thead class="theme-cyan">
                                            <?php 
                                           

                                            foreach($results as $data){?>
                                             <tr>
                                                <td><a href="patient-profile.php"><?=$data['full_name']?></a></td>

                                                <td><?php $data['area'].$data['city'].$data['state']?></td>
                                                <td><?=$data['phone_number']?></td>
                                                <td><?=$data['email']?></td>

                                                <td>

                                                    <select class="form-select form-group col-12" name="links"
                                                        onchange="window.location.href.value"
                                                        aria-label="Default select example" id="treatmentSelect"
                                                        style="padding-top: 1%;padding-bottom: 1%;">
                                                        <option selected>select</option>
                                                        <option value="1">Cancel</option>
                                                        <option value="addpatient.php">Add Patient</option>

                                                    </select>
                                                </td>
                                                <td>

                                                    <button type="button" 
                                                        style="background-color: transparent;border: transparent;"
                                                        class="btn btn-info rounded-circle" title="Edit">
                                                        <i class="fa fa-edit" style="color: #000;"></i>
                                                    </button>


                                                    <button type="button" class="btn btn-danger rounded-circle"
                                                        title="Delete"
                                                        style="background-color: transparent;border: transparent;"><i
                                                            class="icon-trash"
                                                            style="color: #000;size: 12px;"></i></button>

                                                </td>

                                            </tr>
                                             <?php  
                                            }
                                         
                                           ?>
                                           
                                            <tr>
                                                <th>Name</th>

                                                <th>Location</th>
                                                <th>Mobile</th>
                                                <th>Email</th>

                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>

    </div>
   

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/new/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/new/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/new/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/new/vendor/jquery-datatable/buttons/buttons.php5.min.js"></script>
<script src="assets/new/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/new/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->


<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>


</body>

</html>