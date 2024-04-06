<?php 
 include('includes/header.php');
?>
  <style>
    /* ******************* Main Styeles : Radio Card */

    /* #3057d5;: #3057d5; */
    /* 200ms linear: 200ms linear; */

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
                </div>   </li>
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
                    class="fa fa-arrow-left"></i></a><a href="patients.html">Edit patient-profile </a></h2>
              <ul class="breadcrumb">


                <li class="breadcrumb-item active">Patient Profile</li>
              </ul>
            </div>

          </div>
        </div>

        <ddiv class="row">
          <div class="col-sm-12">
            <div class="card" >
              <div class="card-body">
                <form>
                  <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                           
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name" value="Gopichand">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" value="Dugirala">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone No." value="9912198002">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                          <input type="email" class="form-control" placeholder="Email" value="sushma@143gmail.com">
                                      </div>
                                  </div>
                                </div>
                                <div class="row clearfix">                            
                                    <div class="col-sm-4">
                                      <div class="input-group">                                        
                                          <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Date of Birth" value="18/07/1998">
                                      </div>
                                  </div>  
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <option value="">- Gender -</option>
                                            <option value="10">Male</option>
                                            <option value="20">Female</option>
                                            <option value="20">Other</option>
                                        </select>
                                    </div>
                                </div>                          
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <select class="form-control show-tick">
                                          <option value="">- Health Issue -</option>
                                          <option value="10">Cardiac Care</option>
                                          <option value="20">Orthopedic Surgery</option>
                                          <option value="20">Cosmetic and Plastic Surgery</option>
                                          <option value="20">Fertility Treatments</option>
                                          <option value="20">Cancer Care</option>
                                          <option value="20">Dental Procedures</option>
                                          <option value="20">Wellness and Ayurveda</option>
                                      </select>
                                  </div>
                              </div> 
                                </div>
                               
                                <div class="row clearfix">                            
                                   
                                  <div class="col-sm-3">
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Postal Code" value="520007">
                                      </div>
                                  </div>
                                 
                                  <div class="col-sm-3">
                                    <div class="input-group">                                        
                                      <input type="text" class="form-control" placeholder="City" value="Vijayawada">
                                    </div>
                                </div>  
                                <div class="col-sm-3">
                                  <div class="input-group">                                        
                                    <input type="text" class="form-control" placeholder="State/Province" value="Andhra Pradesh">
                                  </div>
                              </div>                          
                                <div class="col-sm-3">
                                  <div class="input-group">                                        
                                    <input type="text" class="form-control" placeholder="Country " value="India">
                                  </div>
                               </div>  
                               <div class="col-sm-5">
                                <div class="form-group">
                                  <select id="options"class="form-control show-tick">
                                      <option value="" disabled selected>-Select Packge-</option>
                                      <option value="Option 1">INTEGRAL</option>
                                      <option value="Option 2">PRIME</option>
                                      <option value="Option 3">ELITE</option> 
                                  </select>
                              </div>
                             </div>  
                             <div class="col-sm-5">
                              <select id="choices"class="form-control">
                                <option value="" disabled selected>Please select an option</option>
                              </select>
                            </div>
                              </div>
                              <div class="row clearfix">
                                <div class="col-lg-6">
                                  <label>Profile</label>
                                    <input type="file" class="dropify">
                                </div>
                                <div class="col-lg-6">
                                  <label>Documents</label>
                                    <input type="file" class="dropify">
                                </div>
                            </div>
                                <div class="row clearfix">  
                                  <div class="header">
                                    <h4 style="font-size: 16px;">Care Taker</h4>                           
                                </div>
                                    </div>     
                                    <div class="row clearfix">               
                                  <div class="col-sm-4">
                                    <div class="input-group">                                        
                                        <input type="text" data-date-autoclose="true" class="form-control" placeholder="Full Name" value="Venkata Krishna">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="input-group">                                        
                                      <input type="text" data-date-autoclose="true" class="form-control" placeholder="Mobile" value="9154970973">
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group">                                        
                                    <input type="text" data-date-autoclose="true" class="form-control" placeholder="Relation" value="Son">
                                </div>
                            </div>
                                </div>
                                    <div class="col-12">
                                      <div class="doctor-submit text-start mt-4">
                                        <a href="packages.html" type="submit" class="btn btn-primary submit-form me-2">
                                          Submit
                                        </a>
                                        <button type="submit" class="btn btn-primary cancel-form">
                                          Cancel
                                        </button>
                                      </div>
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
<script src="assets/new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/dropify.js"></script>
<script>
  // Map your choices to your option value
var lookup = {
   'Option 1': ['Select Your INTEGRAL Packges','RS. 60,000/ PER YEAR', 'RS. 5000/- PER MONTH', '90,000/- PER YEAR PER COUPLE','RS. 3750/- PER PERSON PER MONTH COUPLE'],
   'Option 2': ['Select Your PRIME Packges','RS. 80,000/ PER YEAR', 'RS. 6666/- PER MONTH','1,35,000/- PER YEAR PER COUPLE','RS. 5625/- PER PERSON PER MONTH COUPLE'],
   'Option 3': ['Select Your ELITE Packges','RS. 1,00, 000/ PER YEAR ',' RS. 8333/- PER MONTH','1,50,000/- PER YEAR PER COUPLE','RS. 6250 PER PERSON PER MONTH COUPLE'],
};

// When an option is changed, search the above for matching choices
$('#options').on('change', function() {
   // Set selected option as variable
   var selectValue = $(this).val();

   // Empty the target field
   $('#choices').empty();
   
   // For each chocie in the selected option
   for (i = 0; i < lookup[selectValue].length; i++) {
      // Output choice in the target field
      $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
   }
});
</script>
</body>
</html>