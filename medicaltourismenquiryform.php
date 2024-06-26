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
        .dropbtn {
      background-color: #fff;
      color: black;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    /* Dropdown button on hover & focus */
    .dropbtn:hover, .dropbtn:focus {
      background-color: #fff;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #fff;}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    
    .dropdown:hover .dropbtn {
      background-color: #fff;
    }
    .treatment{
        width: 100%;
        border: #000;
        border-width: 0.5px;
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
                                        class="fa fa-arrow-left"></i></a>MedicalTourism Enquiry</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">MedicalTourism Enquiry</li>

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
                                                <th>Email</th>
                                                
                                                <th>Mobile</th>
                                                <th>Location</th>

                                                <th>Treatment</th>
                                                <th>Details</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="patient-profile.php">Andrea Lalema</a></td>
                                                <td>Info@name@gmail.com</td>
                                                
                                                <td>6309877651</td>
                                                <td>Gachibowli</td>

                                                <td>

                                                    Diabities
                                                </td>
                                                <td>Details</td>
                                                <td><img src="assets/new/images/sm/avatar2.jpg" alt="Image" width="50"></td>
                                                <td>

                                                    <button type="button" data-toggle="modal" data-target="#radioModal"
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
                                            <tr>
                                                <td><a href="patient-profile.php">Ramu</a></td>

                                                <td>Info@name@gmail.com</td>
                                                <td>6309877651</td>
                                                <td>Gatchibowli</td>

                                                <td>

                                                   Diabities
                                                </td>
                                                <td>Details</td>
                                                <td><img src="assets/new/images/sm/avatar2.jpg" alt="Image" width="50"></td>
                                                <td>

                                                    <button type="button" data-toggle="modal" data-target="#radioModal"
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
    // Array of country codes and names
    var countries = [
    { code: "+1", name: "USA" },
        { code: "+44", name: "UK" },
        { code: "+91", name: "India" },
        { code: "+92", name: "PAK" },
        { code: "+971", name: "Dubai" },
      
        { code: "+81", name: "Japan" },
        { code: "+86", name: "China" }
]

    // Function to populate the country code dropdown
    function populateCountryDropdown() {
        var select = document.getElementById("country_code");
        
        // Clear existing options
        select.innerHTML = "";
        
        // Add default option
        var defaultOption = document.createElement("option");
        defaultOption.text = "Select Country Code";
        select.add(defaultOption);
        
        // Add options for each country
        countries.forEach(function(country) {
            var option = document.createElement("option");
            option.value = country.code;
            option.text = country.code + " (" + country.name + ")";
            select.add(option);
        });
    }

    // Call the function to populate the dropdown
    populateCountryDropdown();
</script>
  
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
        var Phone = document.getElementById('phone_number').value;
        var Email = document.getElementById('email_address').value;
        var City = document.getElementById('city').value;
        var State = document.getElementById('state').value;
        var description = document.getElementById('description').value;
     

        if (!Name||!Phone || !description || !videoFile||!Email) {
            // Show validation errors
            document.getElementById('first_name').classList.add('is-invalid');
            document.getElementById('phone_number').classList.add('is-invalid');
            document.getElementById('description').classList.add('is-invalid');
           
            document.getElementById('email_address').classList.add('is-invalid');
            
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