<?php 
 include('includes/header.php');
?>
<style>
   .editable-cell {
      position: relative;
      cursor: pointer;
      transition: border-color 0.3s; /* Adding transition for smooth effect */
    }

    .edit-btn {
      position: absolute;
      top: 5px;
      right: 5px;
      display: none;
      background: none;
      border: none;
      padding: 0;
      cursor: pointer;
    }

    .editable-cell:hover {
      border: 3px dashed #4494bf; /* Changing border style to dashed */
      /* background-color: #ffcccc;  */
    }

    .editable-cell:hover .edit-btn {
      display: inline-block;
    }
 .edit-btn {
  display: none;
}
 
/* tr:hover .edit-btn {
  display: block;
} */
  .container {
      max-width: 800px;

      margin: auto;

  }

  .nav-tabs {
      border-radius: 20px;

      padding: 10px;

  }


  .nav-item {
      margin-bottom: 0;

  }

  .nav-link {
      border-radius: 20px;

      padding: 10px 20px;

  }

  .card.selected {
      background-color: #007bff;

      color: #fff;

  }

  /* cards pricing        */
  .main {
      box-shadow: 0 0 24px rgba(0, 0, 0, 0.15);
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
          "Segoe UI Symbol";
      margin: 0 auto;
  }

  .price-table {
      width: 100%;
      border-collapse: collapse;
      border: 0 none;
  }

  .price-table tr:not(:last-child) {
      border-bottom: 1px solid rgba(0, 0, 0, 0.03);
  }

  .price-table tr td {
      border-left: 1px solid rgba(0, 0, 0, 0.05);
      padding: 8px 24px;
      font-size: 14px;
  }

  .price-table tr td:first-child {
      border-left: 0 none;
  }

  .price-table tr td:not(:first-child) {
      text-align: center;
  }

  .price-table tr:nth-child(even) {
      background-color: #FFFFFF;
  }

  .price-table tr:hover {
      background-color: #EEEEEE;
  }

  .price-table .fa-times {
      color: #c5bee4;
  }

  .price-table .fa-check {
      color: #5336ca;
  }

  /* Highlighted column */
  .price-table tr:nth-child(2n) td:nth-child(3) {
      background-color: rgba(216, 214, 227, 0.25);
  }

  .price-table tr td:nth-child(3) {
      background-color: rgba(216, 214, 227, 0.15);
      padding: 8px 48px;
  }

  .price-table tr td:nth-child(3) .fa-check,
  .price-table tr:nth-child(2n) td:nth-child(3) .fa-check {
      /* color: #ffffff; */
  }

  /**/

  .price-table tr.price-table-head td {
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
  }

  .price-table tr.price-table-head {
      background-color: #4494bf;
      color: #FFFFFF;
  }

  .price-table td.price {
      color: #f43f54;
      padding: 16px 24px;
      font-size: 20px;
      font-weight: 600;
  }

  .price-table td.price a {
      background-color: #5336ca;
      color: #FFFFFF;
      padding: 12px 32px;
      margin-top: 16px;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      border-radius: 64px;
  }

  .price-table td.price-table-popular {
      font-family: "Montserrat";
      border-top: 3px solid #5336ca;
      color: #5336ca;
      text-transform: uppercase;
      font-size: 12px;
      padding: 12px 48px;
      font-weight: 700;
  }

  .price-table .price-blank {
      background-color: #fafafa;
      border: 0 none;
  }

  .price-table svg {
      width: 90px;
      fill: #5336ca;
  }

  .fa-check-circle-o {
      color: #5336ca;
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
                  </div>  </li>
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
              <h2 ><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                    class="fa fa-arrow-left"></i></a><a href="packages.html">Edit Packages </a></h2>
            </div>


            <div class="row" style="padding-left: 0.5%;margin-top: 3%;">
              <div class="col-lg-12">
                  <div class="main">
                      <table class="price-table">
                          <tbody>
                            
                              <tr class="price-table-head">
                                  <td></td>
                                  <td>
                                      INTEGRAL
                                      <br><small style="font-size: 12px; font-weight: 400;">Rs.
                                          60,000/ per year ( Rs. 5000/- per month)</small>
                                  </td>
                                  <td>
                                      PRIME
                                      <br><small style="font-size: 12px; font-weight: 400;">Rs.
                                          80,000/ per year (Rs. 6666/- per month)</small>
                                  </td>
                                  <td class="green-width">
                                      ELITE
                                      <br><small style="font-size: 12px; font-weight: 400;">Rs.
                                          1,00, 000/ per year ( Rs. 8333/- per month)</small>
                                  </td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Monthly Doctor Home Visits:</b><br /> Regular monthly
                                      home visits by doctors for comprehensive check-ups, ensuring
                                      your health is monitored proactively by MD General Physician
                                      <a class="edit-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a>
                                  </td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i> <a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Focus on Health:</b><br /> Embrace Proactive Wellness
                                      with Our Bi-weekly Vitals Monitoring Service<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i> <a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">Once a Month<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">Bi Weekly <a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>On-Demand Emergency Medical Assistance:</b><br />
                                      Receive prompt medical aid with our emergency doctor-on-call
                                      service<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a>
                                  </td>
                                  <td class="editable-cell">Pay per Use<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">1 time<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">3 times<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Doctor Appointments Arrangement: </b><br />Facilitate
                                      appointments with specific doctors based on your needs and
                                      preferences.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>

                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Vision Care Arrangement: </b><br />Assistance in
                                      arranging vision tests and eyewear prescriptions for optimal
                                      eye health.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>

                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Diagnostic Test Arrangements: </b><br>Facilitate
                                      appointments for diagnostic tests to ensure timely and
                                      accurate assessments.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>

                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Medicine Delivery Services:</b><br> Facilitate for the
                                      delivery of prescribed medications to your doorstep for
                                      convenience.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Pre Hospitalization Assistance: </b><br>Assist with
                                      surgery plans and address the non clinical pain points
                                      during pre hospitalization process.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Post Hospitalization Assistance:</b><br> Assist and
                                      provide support during hospitalization and post
                                      hospitalization.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"> <b>Health Records Maintenance:</b><br> Maintain detailed
                                      health records from the date of subscription for easy access
                                      and reference.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>

                              </tr>
                              <tr>
                                  <td class="editable-cell"> <b>Real-time Updates:</b><br> Receive timely updates on
                                      appointments, test results, and health-related information.
                                      <a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Insurance Management: </b> <br>Assistance for any
                                      insurance related queries or solutions during
                                      hospitalization, Reminders for insurance renewal and expert
                                      advice on selecting the best insurance package to suit your
                                      needs.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>International Travel health insurance :</b> <br>
                                      Assistance for any international travel health insurance
                                      related queries or solutions<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Accident Insurance Domestic : In Case of death :</b><br>
                                      Accident insurance coverage in case of death of subscriber /
                                      PD/TD<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">2 Lacs<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">4 Lacs<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                        
                              </tr>
                              <tr>
                                  <td class="editable-cell"> <b>Accident Insurance Domestic :</b><br> Hospitalization :
                                      Accident insurance coverage – hospitalization<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">25% of 2 lacs<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">25% of 4 Lacs<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Travellers Health Immunizations :</b><br> Assistance in
                                      scheduling immunizations for international travel<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a> </td>
                                 
                              <tr>
                                  <td class="editable-cell"><b>Second Opinion Assistance: </b><br>Access to one second
                                      opinion per problem if needed, ensuring informed
                                      decision-making regarding your healthcare.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">Pay per Use<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                 
                              </tr>
                              <tr>
                                  <td class="editable-cell"> <b>Personalized Diet Chart Plans: </b><br>Receive
                                      personalized diet charts tailored to your health goals and
                                      dietary preferences.<a class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell">Pay per Use<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  
                              </tr>
                              <tr>
                                  <td class="editable-cell"><b>Medication Assistance Hub and Beyond:</b><br> Access our
                                      helpdesk for scheduling doctor appointments, medication
                                      orders, lab tests, and more.<a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-times"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>
                                  <td class="editable-cell"><i class="fa fa-check"></i><a class="edit-btn" type="button" data-toggle="modal" data-target="#radioModal"><i class="fa fa-edit"></i></a></td>

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
  <!-- Modal-2 -->
  <div class="modal fade"  id="radioModal" tabindex="-1" role="dialog" aria-labelledby="radioModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="radioModalTitle">Edit Total Row Form</h5>
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
                    <input type="text" class="form-control" id="floor" placeholder="" name="text" value=""/>
                    
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
<!-- Modal 1 -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Total Row Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="body">                            
         
          <textarea id="markdown-editor" name="markdown-content" data-provide="markdown" rows="10" class="col-lg-12"></textarea>
      </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/new/vendor/markdown/markdown.js"></script>
<script src="assets/new/vendor/to-markdown/to-markdown.js"></script>
<script src="assets/new/vendor/bootstrap-markdown/bootstrap-markdown.js"></script>
<script>
    $(function() {
        // markdown editor
        var initContent = '<h4>Hello there</h4> ' +
            '<p>How are you? I have below task for you :</p> ' +
            '<p>Select from this text... Click the bold on THIS WORD and make THESE ONE italic, ' +
            'link GOOGLE to google.com, ' +
            'test to insert image (and try to tab after write the image description)</p>' +
            '<p>Test Preview And ending here...</p> ' +
            '<p>Click "List"</p> Enjoy!';

        $('#markdown-editor').text(toMarkdown(initContent));
    });
</script>

</body>
</html>