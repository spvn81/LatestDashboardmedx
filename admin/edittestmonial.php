<?php 
 include('includes/header.php');
?>
    <style>
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
                                        class="fa fa-arrow-left"></i></a>Edit Testmonials</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Edit Testmonials</li>

                            </ul>
                        </div>
           

                    </div>
                </div>

                <div class="card">
                    <div class="card-body modal-body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2 style="font-size: 20px;">Edit Packages</h2>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" id="first_name" required>
                                    <div class="invalid-feedback">Please enter your first name.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea type="text" rows="3" class="form-control" placeholder="Description" id="description" required></textarea>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>
                            </div>
                    
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Upload testimonial video</label>
                                    <input type="file" accept="video/*" class="form-control form-control-file" id="videoFile" aria-describedby="fileHelp" required onchange="previewVideo(this)">
                                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    <div class="invalid-feedback">Please upload a video file.</div>
                                </div>
                                <hr>
                                <div id="videoPreview"></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 3%;padding-bottom: 3%;width: 3%;">
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
                    </div>

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
    function submitForm() {
        // Form validation
        if (validateForm()) {
            // Form submission logic here
            alert('Form submitted successfully!');
            // Optionally, you can redirect to another page after successful submission
            window.location.href = "testmonials.php";
        }
    }

    function validateForm() {
        var Name = document.getElementById('first_name').value;
        var description = document.getElementById('description').value;
        var videoFile = document.getElementById('videoFile').value;

        if (!Name || !description || !videoFile) {
            // Show validation errors
            document.getElementById('first_name').classList.add('is-invalid');
            document.getElementById('description').classList.add('is-invalid');
            document.getElementById('videoFile').classList.add('is-invalid');
            return false; // Form not valid
        }

        // If all fields are filled, remove any existing validation errors
        document.getElementById('first_name').classList.remove('is-invalid');
        document.getElementById('description').classList.remove('is-invalid');
        document.getElementById('videoFile').classList.remove('is-invalid');
        return true; // Form is valid
    }

    function previewVideo(input) {
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            var videoPreview = document.getElementById('videoPreview');
            videoPreview.innerHTML = '<video controls><source src="' + e.target.result + '" type="video/mp4"></video>';
        }

        reader.readAsDataURL(file);
    }
</script>
   
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/doctors-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 08:15:26 GMT -->

</html>