<?php 
 include('includes/header.php');
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
                    <a href="dashboard.html"><img src="medx.png" alt="Medx Logo" class="img-responsive logo"></a>
                </div>

                <div class="navbar-right">
                   

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <div class="dropdown">
                                    <img src="assets/new/images/sm/avatar2.jpg" class="rounded-circle square-image" alt="profile-image" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="40">
                              
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Harshitha</a>
                                      <a class="dropdown-item" href="#">Logout</a>
                                    
                                    </div>
                                  </div> 
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
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a><a href="patients.html">Patients </a></h2>
                            <ul class="breadcrumb">


                                <li class="breadcrumb-item active">Patient List</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom">
                                        <thead class="theme-cyan">
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Location</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="patient-profile.html">Andrea Lalema</a></td>
                                                <td>33</td>
                                                <td>Gachibowli</td>
                                                <td>6309877651</td>
                                                <td>Info@name@gmail.com</td>
                                                <td>Male</td>
                                                <td>Active</td>
                                                <td>
                                                    <a href="edit-patientprofile.html" class="edit-button">
                                                        <button type="button" style="background-color: transparent;border: transparent;" class="btn btn-info rounded-circle"
                                                            title="Edit">
                                                            <i class="fa fa-edit" style="color: #000;"></i>
                                                        </button>
                                                    </a>

                                                    <button type="button" class="btn btn-danger rounded-circle"
                                                        title="Delete" style="background-color: transparent;border: transparent;"><i class="icon-trash" style="color: #000;size: 12px;"></i></button>
                                                    <a href="patient-profile.html"> <button type="button"
                                                        style="background-color: transparent;border: transparent;"class="btn btn-info rounded-circle" title="View"
                                                           ><i class="fa f icon-eye"
                                                                style="width: 15px;color: #000;"></i></button></a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><a href="patient-profile.html">Ramu</a></td>
                                                <td>33</td>
                                                <td>Gachibowli</td>
                                                <td>6309877651</td>
                                                <td>Info@name@gmail.com</td>
                                                <td>Male</td>
                                                <td>Active</td>
                                                <td>
                                                    <a href="edit-patientprofile.html" class="edit-button">
                                                        <button type="button" style="background-color: transparent;border: transparent;" class="btn btn-info rounded-circle"
                                                            title="Edit">
                                                            <i class="fa fa-edit" style="color: #000;"></i>
                                                        </button>
                                                    </a>

                                                    <button type="button" class="btn btn-danger rounded-circle"
                                                        title="Delete" style="background-color: transparent;border: transparent;"><i class="icon-trash" style="color: #000;size: 12px;"></i></button>
                                                    <a href="patient-profile.html"> <button type="button"
                                                        style="background-color: transparent;border: transparent;"class="btn btn-info rounded-circle" title="View"
                                                           ><i class="fa f icon-eye"
                                                                style="width: 15px;color: #000;"></i></button></a>
                                                </td>

                                            </tr>
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
<script src="assets/new/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/new/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/new/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->


<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/table-jquery-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 08:15:54 GMT -->

</html>