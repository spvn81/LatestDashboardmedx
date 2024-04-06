<?php 
 include('includes/header.php');
?>
  <style>
    /* CSS for hiding and showing steps */
    .step {
      display: none;
    }

    .active {
      display: block;
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
                    class="fa fa-arrow-left"></i></a><a href="packages.html">Packages </a></h2>
            </div>

          </div>
        </div>

        <ddiv class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="card">
                        <div class="header">
                          <h2>Add Package</h2>
                        </div>
                        <div class="body">
                          <!-- Step 1: Collect Information -->
                          <div id="step1" class="step active">
                            <div class="header">
                              <h2>Personal Information</h2>
                            </div>
                            <form id="formStep1">
                              <div class="row clearfix">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Description">
                                  </div>
                                </div>
                              </div>
                              <div id="education_fields" class="clearfix">

                              </div>
                              <div class="row clearfix">


                                <div class="col-lg-6">
                                  <div class="form-group m-t-20">
                                    <input type="text" class="form-control" id="floor1" name="text1"
                                      placeholder="Cost" />
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="d-flex mt-3">
                                    <input type="text" class="form-control" id="floor1" name="text1"
                                      placeholder="Cost Details" />
                                    <div class="input-group-btn">
                                      <button class="btn btn-success" type="button" onclick="addEducationField();">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <br>
                              <button type="button" class="btn btn-primary submit-form me-2"
                                onclick="nextStep()">Next</button>
                            </form>
                          </div>

                          <!-- Step 2: Confirmation -->
                          <div id="step2" class="step">
                            <div id="educationfields" class="">

                            </div>
                            <div class="row clearfix">

                              <div class="col-lg-7">
                                <div class="form-group m-t-20">
                                  <textarea rows="3" class="form-control" placeholder="Description"></textarea>
                                </div>
                              </div>
                              <div class="col-lg-5 mt-4">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <label class="fancy-radio">
                                      <input name="gender2" value="Yes" type="radio" checked="">
                                      <span><i></i>Yes</span>
                                    </label>
                                    <label class="fancy-radio">
                                      <input name="gender2" value="No" type="radio">
                                      <span><i></i>No</span>
                                    </label>
                                  </div>
                                  <div class="col-lg-12 d-flex">
                                    <input type="text" class="form-control" id="floor" name="text" value="" />
                                    <button class="btn btn-success" type="button" onclick="education_fields();"> <span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <button type="button" class="btn btn-primary submit-form me-2"
                              onclick="previousStep()">Previous</button>
                            <button type="button" class="btn btn-primary cancel-form"
                              onclick="submitForm()">Submit</button>
                          </div>
                        </div>
                      </div>
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

  <!-- Javascript -->
  <!-- Javascript -->
  <script src="assets/bundles/libscripts.bundle.js"></script>
  <script src="assets/bundles/vendorscripts.bundle.js"></script>

  <script src="assets/new/vendor/dropify/js/dropify.min.js"></script>
  <script src="assets/new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap datepicker Plugin Js -->

  <script src="assets/bundles/mainscripts.bundle.js"></script>
  <script src="assets/js/pages/forms/dropify.js"></script>
  <script>
    var room = 1;

    function addEducationField() {
      if (room <= 2) { // Only add fields if less than or equal to 2
        var objTo = document.getElementById('education_fields');
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass");
        divtest.innerHTML = '<div class="row"><div class="col-lg-6"><div class="form-group m-t-20"><input type="text" class="form-control" id="floor' + room + '" name="text' + room + '" placeholder="Cost"/></div></div><div class="col-lg-6"><div class="d-flex mt-3"><input type="text" class="form-control" id="floor_details' + room + '" name="text_details' + room + '" placeholder="Cost Details"/><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true">-</span> </button></div></div></div></div>';
        objTo.appendChild(divtest);
        room++;
      }
    }

    function removeEducationField(rid) {
      var element = document.querySelector('.removeclass');
      if (element) {
        element.remove();
        room--; // Decrement room count when removing a field
      }
    }
  </script>

  <!-- step 2 -->
  <script>
    var room = 1;

    function education_fields() {
      room++;
      var objTo = document.getElementById('educationfields');
      var divtest = document.createElement("div");
      divtest.setAttribute("class", "form-group removeclass" + room);
      var rdiv = 'removeclass' + room;
      divtest.innerHTML = '<div class="row"><div class="col-lg-7"><div class="form-group m-t-20"><textarea rows="3" class="form-control" placeholder="Description"></textarea></div></div><div class="col-lg-5 mt-4"><div class="row"><div class="col-lg-12"><label class="fancy-radio"><input name="gender2" value="Yes" type="radio" checked=""><span><i></i>Yes</span></label><label class="fancy-radio"><input name="gender2" value="No" type="radio"><span><i></i>No</span></label></div><div class="col-lg-12 d-flex"><input type="text" class="form-control" id="floor' + room + '" name="text' + room + '" value=""/><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true">-</span> </button></div></div></div></div></div><div class="clear"></div>';
      objTo.appendChild(divtest);
    }

    function remove_education_fields(rid) {
      $('.removeclass' + rid).remove();
    }
  </script>

  <script>
    // Function to switch to the next step
    function nextStep() {
      document.getElementById('step1').classList.remove('active');
      document.getElementById('step2').classList.add('active');
    }

    // Function to switch to the previous step
    function previousStep() {
      document.getElementById('step2').classList.remove('active');
      document.getElementById('step1').classList.add('active');
    }

    // Function to submit the form
    function submitForm() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;

      // Display confirmation message
      document.getElementById('confirmation').innerHTML = "Thank you, " + name + "! Your email address (" + email + ") has been recorded.";

      // Here you can send the form data to your server for further processing

      // For demonstration, let's reset the form after submission
      document.getElementById('formStep1').reset();
      previousStep(); // Move back to the first step after submission
    }
  </script>

</body>

</html>