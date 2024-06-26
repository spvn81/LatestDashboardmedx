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
                                </li>  </li>
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
                                        class="fa fa-arrow-left"></i></a>Geriatric Enquiry</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Geriatric Enquiry</li>

                            </ul>
                        </div>
           

                    </div>
                </div>

                <div class="card">
                    <div class="card-body modal-body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2 style="font-size: 20px;">Enquiry</h2>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="state">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" id="first_name" required>
                                    <div class="invalid-feedback">Please enter your first name.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="state">phone Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number" id="phone_number" required>
                                    <div class="invalid-feedback">Please enter your phone number.</div>
                                </div>
                            </div>
                          
                              <div class="form-row col-lg-12">
                                <div class="form-group col-md-4">
                                  <label for="city">City</label>
                                  <input type="text" class="form-control" id="city" placeholder="Enter city">
                                  <div class="invalid-feedback">Please enter your city.</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="area">Area</label>
                                    <input type="text" class="form-control" id="area" placeholder="Enter area">
                                    <div class="invalid-feedback">Please enter your area.</div>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="state">State</label>
                                  <input type="text" class="form-control" id="state" placeholder="Enter state">
                                  <div class="invalid-feedback">Please enter your state.</div>
                                </div>
                              </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="state">Message</label>
                                    <textarea type="text" rows="3" class="form-control" placeholder="Message" id="description" required></textarea>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>
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

    <!-- poup model -->
   

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
  
<script>
    function submitForm() {
        // Form validation
        if (validateForm()) {
            // Form submission logic here
            alert('Form submitted successfully!');
            // Optionally, you can redirect to another page after successful submission
            window.location.href = "testmonials.html";
        }
    }

    function validateForm() {
        var Name = document.getElementById('first_name').value;
        var Phone = document.getElementById('phone_number').value;
        var Area = document.getElementById('area').value;
        var City = document.getElementById('city').value;
        var State = document.getElementById('state').value;
        var description = document.getElementById('description').value;
     

        if (!Name||!Phone || !description || !videoFile||!Area||!City||!State) {
            // Show validation errors
            document.getElementById('first_name').classList.add('is-invalid');
            document.getElementById('phone_number').classList.add('is-invalid');
            document.getElementById('description').classList.add('is-invalid');
           
            document.getElementById('area').classList.add('is-invalid');
            document.getElementById('city').classList.add('is-invalid');
            document.getElementById('state').classList.add('is-invalid');
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

</html>