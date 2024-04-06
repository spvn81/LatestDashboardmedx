<?php 
 include('includes/header.php');
?>    <style>
        video  {
            width: 100%;
        }
        .edit_icon {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #999;
}
.edit_icon {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #999;
}

.edit_icon i {
    font-size: 18px;
    cursor: pointer;
}

.edit_icon i:hover {
    color: #333; /* Change color on hover */
}


.edit_icon i {
    font-size: 18px;
    cursor: pointer;
}

.edit_icon i:hover {
    color: #333; 
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
                    <a href="dashboard.html"><img src="medx.png" alt="Medx Logo" class="img-responsive logo" width="20"></a>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>



                    <div id="navbar-menu">

                        <ul class="nav navbar-nav">



                            <li>
                                <a href="page-login.html" class="icon-menu"><i class="icon-login"></i></a>
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
                                        class="fa fa-arrow-left"></i></a> Testmonials</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Testmonials</li>

                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-12" style="text-align: end;">
                            <button type="button" class="btn btn-outline-primary m-t-10" data-toggle="modal"
                            data-target="#addcontact"><i class="fa fa-plus-circle"></i><span style="margin-left: 2px;">Add new</span></button>


                        </div>

                    </div>
                </div>

                <div class="row clearfix">

                    <div class="col-lg-4 col-md-6 col-sm-12">
                       
                        <div class="card project_widget">
                            <div class="pw_img">
                                <iframe width="100%" height="176" src="https://www.youtube.com/embed/ppawFI1u6Po?si=T9rcFXJIjmsNbsAO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="pw_content">
                                <div class="pw_header">
                                    <h6>P V Rao, DXC Technologies</h6>
                                    <small>Hyderabad</small>
                                </div>
                                <div class="pw_meta">
                                    <p>Amidst my mother's health challenges at 72, including cancer survivorship and
                                        treatment for low sodium levels and neuro problems at KIMS Secunderabad, MedXInd
                                        emerged as a vital support. Their assistance eased every step of our hospital
                                        journey, alleviating the inherent discomfort faced by ordinary citizens. With their
                                        guidance and facilitation, navigating the complexities of medical care became
                                        allowing us to focus on her recovery with peace of mind. </p>
                                </div>
                            </div>
                            <a href="edittestmonial.html"> <div class="edit_icon">
                                <i class="fas fa-edit" ></i>
                            </div></a>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card project_widget">
                                <div class="pw_img">
                                    <iframe width="100%" height="176" src="https://www.youtube.com/embed/ppawFI1u6Po?si=T9rcFXJIjmsNbsAO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <div class="pw_content">
                                    <div class="pw_header">
                                        <h6 class="mb-0">Sanjay, IDF</h6>
                                        <small>Hyderabad</small>
                                    </div>
                                    <div class="pw_meta">
                                        <p>My friends son an engineering student, recently faced a severe accident resulting
                                            in serious head and body injuries while on Ibrahimpatnam road. Unsure of where to
                                            turn, we sought MedXind's aid, swiftly transporting him to KIMS Secunderabad. Upon
                                            arrival, MedXind coordinated with emergency doctors, ensuring prompt treatment. He
                                            underwent successful plastic surgery and returned home within a week, safe and
                                            sound. Throughout the ordeal, </p>
                                    </div>
                                </div>

                                <a href="edittestmonial.html"> <div class="edit_icon">
                                    <i class="fas fa-edit" ></i>
                                </div></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="body text-center">
                                <div class="chart easy-pie-chart-1" data-percent="23"> <span><img
                                            src="assets/new/images/sm/avatar3.jpg" data-toggle="tooltip"
                                            data-placement="top" title="Dr. Avatar" alt="user"
                                            class="rounded-circle" /></span> </div>
                                <h6 class="mb-0"><a href="#" title="">P V Rao, DXC Technologies</a></h6>
                                <small>Hyderabad</small>

                                <span>Amidst my mother's health challenges at 72, including cancer survivorship and
                                    treatment for low sodium levels and neuro problems at KIMS Secunderabad, MedXInd
                                    emerged as a vital support. Their assistance eased every step of our hospital
                                    journey, alleviating the inherent discomfort faced by ordinary citizens. With their
                                    guidance and facilitation, navigating the complexities of medical With their
                                    guidance and facilitation, navigating the complexities of medical</span>
                                   <a href="edittestmonial.html"> <div class="edit_icon">
                                        <i class="fas fa-edit" ></i>
                                    </div></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>

    <!-- Default Size -->
    <div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add Testmonials</h6>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea type="text" rows="3" class="form-control" placeholder="description"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label>Upload testmonial vedio</label>
                                <input type="file" accept="video/*" class="form-control form-control-file" id="exampleInputFile" aria-describedby="fileHelp" onchange="previewVideo(this)">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                            <hr>
                            <div id="videoPreview"></div>
                        </div>
                      
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/easypiechart.bundle.js"></script> <!-- easypiechart Plugin Js -->

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script>
          function previewVideo(input) {
        const file = input.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const videoPreview = document.getElementById('videoPreview');
            videoPreview.innerHTML = '<video controls><source src="' + e.target.result + '" type="' + file.type + '"></video>';
        };
        
        reader.readAsDataURL(file);
    }
    </script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/doctors-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 08:15:26 GMT -->

</html>