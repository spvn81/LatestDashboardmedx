<?php 
 include('includes/header.php');
?>
    <style>
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
                <div class="row mt-4 mb-2">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2 style="font-size: 20px;"><a href="javascript:void(0);"
                                class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                            View Packages</h2>
                    </div>

                </div>

                <div>
                    <div class="card" style="margin-bottom: 20px;">
                        <div class="body">
                            <div class="card-title" style="color: #000;font-size: 20px;font-weight: 500;">Payment Method
                            </div>
                            <div class="payment-info">
                                <h3 class="payment-name"><i class="fa fa-paypal"></i> PayPal ****2222</h3>
                                <span>Next billing charged: &#8377; 6000</span>
                                <br>
                                <em class="text-muted">Autopay on May 12, 2018</em>
                                <a href="javascript:void(0);" class="edit-payment-info">Edit Payment Info</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">
                    <div class="body">
                    <div class="row" style="padding-left: 0.5%;">
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

                                        </tr>
                                        <tr>
                                            <td><b>Monthly Doctor Home Visits:</b><br /> Regular monthly
                                                home visits by doctors for comprehensive check-ups, ensuring
                                                your health is monitored proactively by MD General Physician
                                            </td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Focus on Health:</b><br /> Embrace Proactive Wellness
                                                with Our Bi-weekly Vitals Monitoring Service</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>On-Demand Emergency Medical Assistance:</b><br />
                                                Receive prompt medical aid with our emergency doctor-on-call
                                                service
                                            </td>
                                            <td>Pay per Use</td>

                                        </tr>
                                        <tr>
                                            <td><b>Doctor Appointments Arrangement: </b><br />Facilitate
                                                appointments with specific doctors based on your needs and
                                                preferences.</td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Vision Care Arrangement: </b><br />Assistance in
                                                arranging vision tests and eyewear prescriptions for optimal
                                                eye health.</td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Diagnostic Test Arrangements: </b><br>Facilitate
                                                appointments for diagnostic tests to ensure timely and
                                                accurate assessments.</td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Medicine Delivery Services:</b><br> Facilitate for the
                                                delivery of prescribed medications to your doorstep for
                                                convenience.</td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Pre Hospitalization Assistance: </b><br>Assist with
                                                surgery plans and address the non clinical pain points
                                                during pre hospitalization process.</td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Post Hospitalization Assistance:</b><br> Assist and
                                                provide support during hospitalization and post
                                                hospitalization.</td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td> <b>Health Records Maintenance:</b><br> Maintain detailed
                                                health records from the date of subscription for easy access
                                                and reference.</td>
                                            <td><i class="fa fa-check"></i></td>

                                        </tr>
                                        <tr>
                                            <td> <b>Real-time Updates:</b><br> Receive timely updates on
                                                appointments, test results, and health-related information.
                                            </td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Insurance Management: </b> <br>Assistance for any
                                                insurance related queries or solutions during
                                                hospitalization, Reminders for insurance renewal and expert
                                                advice on selecting the best insurance package to suit your
                                                needs.</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>International Travel health insurance :</b> <br>
                                                Assistance for any international travel health insurance
                                                related queries or solutions</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Accident Insurance Domestic : In Case of death :</b><br>
                                                Accident insurance coverage in case of death of subscriber /
                                                PD/TD</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td> <b>Accident Insurance Domestic :</b><br> Hospitalization :
                                                Accident insurance coverage – hospitalization</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Travellers Health Immunizations :</b><br> Assistance in
                                                scheduling immunizations for international travel</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Second Opinion Assistance: </b><br>Access to one second
                                                opinion per problem if needed, ensuring informed
                                                decision-making regarding your healthcare.</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td> <b>Personalized Diet Chart Plans: </b><br>Receive
                                                personalized diet charts tailored to your health goals and
                                                dietary preferences.</td>
                                            <td><i class="fa fa-times"></i></td>

                                        </tr>
                                        <tr>
                                            <td><b>Medication Assistance Hub and Beyond:</b><br> Access our
                                                helpdesk for scheduling doctor appointments, medication
                                                orders, lab tests, and more.</td>
                                            <td><i class="fa fa-times"></i></td>

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

    <script src="assets/bundles/mainscripts.bundle.js"></script>\

</body>

</html>