<?php 
 include('includes/header.php');
?>
   
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
            <div class="container-fluid">
                <div class="page-wrapper">
                    <div class="content">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a> Add Packages</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Add Package</li>
                            </ul>
                        </div>
            
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-body">
                              <form>
                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-heading">
                                      <h4>Patinets Details</h4>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-12 col-xl-12">
                                    <div class="input-block local-forms mb-4">
                                      <label>Add Packages<span class="login-danger">*</span></label>
                                      <input type="text" class="form-control" id="floor" name="text" value=""/>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-6 col-xl-6">
                                    <div class="input-block local-forms">      
                                      <div class="panel-body row">
                                        <div id="education_fields">
                                            
                                          </div>
                                      <div class="col-sm-12 nopadding">
                                        <div class="form-group">
                                        <div class="input-group">
                                           
                                        <input type="text" class="form-control" id="floor" name="text" value=""/>
                                          <div class="input-group-btn">
                                          <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true">+</span> </button>
                                          </div>
                                        </div>
                                        </div>
                                      </div>
                                      <div class="clear"></div>
                                        
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="doctor-submit text-start mt-4">
                                      <a href="packages.html"
                                        type="submit"
                                        class="btn btn-primary submit-form me-2"
                                      >
                                        Submit
                                    </a>
                                      <button
                                        type="submit"
                                        class="btn btn-primary cancel-form"
                                      >
                                        Cancel
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
    </div>
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="assets/img/sent.png" alt width="50" height="46" />
                    <h3>Are you sure want to delete this ?</h3>
                    <div class="m-t-20">
                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script>
        var room = 1;
    function education_fields() {
     
        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
      divtest.setAttribute("class", "form-group removeclass"+room);
      var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="col-sm-12 nopadding"><div class="col-sm-12 nopadding"><div class="form-group"><div class="input-group mb-4"><input type="text" class="form-control" id="floor" name="text" value=""/><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true">-</span> </button></div></div></div></div><div class="clear"></div>';
        
        objTo.appendChild(divtest)
    }
       function remove_education_fields(rid) {
         $('.removeclass'+rid).remove();
       }
        </script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hospital/light/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 08:15:27 GMT -->

</html>