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
            <div class="m-t-30"><img
                    src="assets/img/logo-dark.png" width="48"
                    height="48" alt="Medx"></div>
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
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Name</th>
                                                <th>location</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th><a>Name</th>
                                                <th>location</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Views</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="icon-trash"></i></button>

                                                </td>





                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-ellipsis-v"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td>
                                                    <button type="button" class="btn btn-info" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa-solid fa-trash"></i></button>
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