<?php 
 include('includes/header.php');
?>

    <style>
        .rounded-circle {
            border-radius: 50% !important;
        }

        .img-fluid {
            max-width: 80%;
            height: auto;
        }

        .profile-info .profile-details {
            display: flex;
            width: 100%;
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important;
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important;
        }

        .pt-2,
        .py-2 {
            padding-top: 0.5rem !important;
        }

        .profile-info h4 {
            color: #282a31 !important;
        }

        .new-arrival-content h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .profile-info h4 {
            color: #464a53 !important;
        }

        .new-arrival-content p {
            font-size: 14px;
            color: #828690;
            margin-bottom: 6px;
            line-height: 24px;
        }

        .profile-info p {
            color: #828690;
        }

        .new-arrival-content h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .profile-info h4 {
            color: #464a53 !important;
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

        <div id="main-content" class="profilepage_1">
            <div class="page-wrapper">
                <div class="content">
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-7 col-6">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                            class="fa fa-arrow-left"></i></a><a href="patient-profile.html"> Profile
                                    </a></h2>

                            </div>
                        </div>
                        <div class="col-sm-5 col-6  m-b-30" style="text-align: end;align-items: end;">
                            <a href="edit-patientprofile.html" class="btn btn-primary btn-rounded"><i
                                    class="fa fa-plus"></i>
                                Edit Profile</a>
                        </div>
                    </div>
                    <div class="card profile-header" style="padding: 30px;margin-bottom: 2%;">
                        <div class="">
                            <div class="">
                                <div class="row">

                                    <!--Tab slider End-->
                                    <div class="col-xl-12 col-lg-12  col-md-12 col-xxl-12 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->

                                            <div class="new-arrival-content pr">
                                                <div class="row" style="margin-bottom:20px;">
                                                    <div class="col-lg-12 profile-info d-flex justify-content-center align-items-center"
                                                        style="">
                                                        <div class="profile-photo" style="width: 50%;">
                                                            <img src="assets/new/images/sm/avatar2.jpg" class="img-fluid" alt="" style="width: 200px;">
                                                        </div>
                                                        

                                                        <div class="profile-details">

                                                            <div class="profile-name px-3 pt-2">
                                                                <p>Name</p>
                                                                <h4 class="text-primary mb-0">Ramu A</h4>
                                                                <p>Date of Birth</p>
                                                                <h4 class="text-muted mb-0">18/07/198</h4>
                                                            </div>
                                                            <div class="profile-email px-2 pt-2">
                                                                <p>Email</p>
                                                                <h4 class="text-muted mb-0">info@example.com</h4>
                                                                <p>Age</p>
                                                                <h4 class="text-muted mb-0">56</h4>
                                                            </div>

                                                        </div>
                                                        <div class="profile-details">
                                                            <div class="profile-name px-3 pt-2">
                                                                <p>Phone</p>
                                                                <h4 class="text-primary mb-0">9912198002</h4>
                                                                <p>Pincode</p>
                                                                <h4 class="text-muted mb-0">500081</h4>
                                                            </div>
                                                            <div class="profile-email px-2 pt-2">
                                                                <p>Gender</p>
                                                                <h4 class="text-muted mb-0">male</h4>
                                                                <p>Address</p>
                                                                <h4 class="text-muted mb-0">Gatchibowli,Road no:12,TX
                                                                </h4>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-12" style="padding-left: 3%;">
                                                        <h4>Care Taker Details:</h4>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-name px-3 pt-2">
                                                            <p>Name</p>
                                                            <h4 class="mb-0">Avinash</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-name px-3 pt-2">
                                                            <p>Phone no</p>
                                                            <h4 class="mb-0">9912198002</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-name px-3 pt-2">
                                                            <p>Relation</p>
                                                            <h4 class="mb-0">Son</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="container">
                    <div class="card">
                        <div class="body">
                            <h5 class="card-title">Subscription</h5>
                        <div class="timeline-item green">
                            <span>
                                <div class="date" style="font-size: 16px;">03/04/2024</div>
                                <div class="card">
                                    <div class="body">
                                        <h6 class="m-b-15">Infografic<span
                                                class="badge badge-success float-right">Validate:
                                                03/04/2024</span></h6>
                                        <p>It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at
                                            its layout.</p>

                                        <a href="viewpackages.html" class="btn btn-secondary"
                                            data-target="#radioModal"
                                            style="background-color: transparent;color: #000;margin-bottom: 3px;">Detail
                                            Plan</a>
                                        <a href="viewpackages.html" class="btn btn-secondary"
                                            data-target="#radioModal"
                                            style="background-color: transparent;color: #000;margin-bottom: 3px;"
                                            data-toggle="modal" data-target="#radioModal">Send
                                            Message</a>
                                    </div>
                                </div>
                            </span>

                        </div>
                        <div class="timeline-item warning   ">
                            <span>
                                <div class="date" style="font-size: 16px;">03/04/2024</div>
                                <div class="card">
                                    <div class="body">
                                        <h6 class="m-b-15">Elite<span
                                                class="badge badge-success float-right">Previous:
                                                03/03/2024</span></h6>
                                        <p>It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at
                                            its layout.</p>

                                        <a href="viewpackages.html" class="btn btn-secondary"
                                            data-target="#radioModal"
                                            style="background-color: transparent;color: #000;margin-bottom: 3px;">Detail
                                            Plan</a>
                                        <a href="viewpackages.html" class="btn btn-secondary"
                                            data-target="#radioModal"
                                            style="background-color: transparent;color: #000;margin-bottom: 3px;"
                                            data-toggle="modal" data-target="#radioModal">Send
                                            Message</a>
                                    </div>
                                </div>
                            </span>

                        </div>
                        <div class="timeline-item danger">
                            <span>
                                <div class="date" style="font-size: 16px;">03/04/2024</div>
                                <div class="card">
                                    <div class="body">
                                        <h6 class="m-b-15">Elite<span
                                                class="badge badge-success float-right">Previous:
                                                03/02/2024</span></h6>
                                        <p>It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at
                                            its layout.</p>

                                        <a href="viewpackages.html" class="btn btn-secondary"
                                            data-target="#radioModal"
                                            style="background-color: transparent;color: #000;margin-bottom: 3px;">Detail
                                            Plan</a>
                                        <a href="viewpackages.html" class="btn btn-secondary"
                                            data-target="#radioModal"
                                            style="background-color: transparent;color: #000;margin-bottom: 3px;"
                                            data-toggle="modal" data-target="#radioModal">Send
                                            Message</a>
                                    </div>
                                </div>
                            </span>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>

            <!-- Modal-2 -->
            <div class="modal fade" id="radioModal" tabindex="-1" role="dialog" aria-labelledby="radioModalTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="radioModalTitle">Send Message to patient</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="body">
                                <div class="row clearfix">


                                    <div class="col-lg-12 mt-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="floor" placeholder="message"
                                                name="text" value="" />

                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <input type="text" class="form-control" id="url" placeholder="Url"
                                                    name="text" value="" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Submmit</button>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Javascript -->
            <script src="assets/bundles/libscripts.bundle.js"></script>
            <script src="assets/bundles/vendorscripts.bundle.js"></script>

            <script src="assets/new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

            <script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 08:15:27 GMT -->

</html>