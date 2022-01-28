<?php
require("homeTab.php");
require("receivableTab.php");
require("payableTab.php");
require("projectTab.php");
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Appway/portfolio-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 07:20:22 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Grandinvoice - Generator</title>

    <!-- Fav Icon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Stylesheets -->
    <link href="css/font-awesome-all.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/config.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="jquery.js"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <link rel='stylesheet' id='appway-main-style-css' href='../wp-content/themes/appway/assets/css/style4999.css?ver=5.7.4' type='text/css' media='all' />

    <link rel='stylesheet' href='../wp-content/themes/appway/assets/css/cuscss.css' type='text/css' media='all' />
    <link rel="stylesheet" href="scss/style.css">
    <script src="https://kit.fontawesome.com/72a9c1090f.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

</head>



<!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->


    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="javascript:void(0)"></a><a href="javascript:void(0)" title="appway"><img src="../wp-content/themes/appway/assets/images/logo.png" alt="logo" style=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->

                    <div class="collapse navbar-collapse show clearfix d-none" id="navbarSupportedContent" style="display: none !important;">
                        <ul class="navigation clearfix">
                            <li id="menu-item-508" class="mega-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-508 dropdown">
                                <a title="Home" href="javascript:void(0)" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">overview</a>
                            </li>
                            <li id="menu-item-530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-530 dropdown">
                                <a title="Compnay" href="javascript:void(0)" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">For whom?</a>
                            </li>
                            <li id="menu-item-537" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-537 dropdown current">
                                <a title="Services" href="javascript:void(0)" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Features</a>
                            </li>
                            <li id="menu-item-3541" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3541 dropdown">
                                <a title="Portfolios" href="javascript:void(0)" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">prices</a>
                            </li>
                            <li id="menu-item-560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-560 dropdown">
                                <a title="Element" href="javascript:void(0)" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">integrations</a>
                            </li>
                            <li id="menu-item-3022" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3022 dropdown">
                                <a title="Blog" href="javascript:void(0)" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Blog</a>
                            </li>
                            <li id="menu-item-3272" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3272">
                                <a title="Contact Us" href="javascript:void(0)" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">support</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </header>

    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
    <!-- Side Navbar start code -->
    <div class="row text-right ">
        <div class="side_bar">
            <div class="w-100">
                <div class="text-center m-3">
                    <div class="text-right  close_sidebar">
                        <i class="fas fa-times text-white"></i>
                    </div>
                </div>
                <div class="w-100 py-3 text-center" style="background-color: #87b040;">
                    <figure class="logo-box">
                        <a href="javascript:void(0)"></a><a href="javascript:void(0)" title="appway"><img src="../wp-content/themes/appway/assets/images/logo.png" alt="logo" style=""></a>
                    </figure>
                </div>
                <hr style="background-color: white;">
                <div class="text-left a_sidebar">
                    <div>
                        <a class="btn w-100 text-left sidebar_nav" data-toggle="collapse" href="#collapseHome" role="button" aria-expanded="false" aria-controls="collapseHome">
                            Home <span class="badge">
                                <i class="fas fa-plus icon-active"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapseHome">
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Credit</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Users</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Notifications</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Configuration</a></li>
                        </div>
                    </div>
                    <div>
                        <a class="btn w-100 text-left sidebar_nav" data-toggle="collapse" href="#collapseReceivable" role="button" aria-expanded="false" aria-controls="collapseReceivable">
                            Receivable <span class="badge">
                                <i class="fas fa-plus icon-active"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapseReceivable">
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Credit</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Users</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Notifications</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Configuration</a></li>
                        </div>
                    </div>
                    <div>
                        <a class="btn w-100 text-left sidebar_nav" data-toggle="collapse" href="#collapsePayables" role="button" aria-expanded="false" aria-controls="collapsePayables">
                            Payables <span class="badge">
                                <i class="fas fa-plus icon-active"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapsePayables">
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Credit</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Users</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Notifications</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Configuration</a></li>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn w-100 text-left sidebar_nav" data-toggle="collapse" href="#collapseProject" role="button" aria-expanded="false" aria-controls="collapseProject">
                            Projects & times <span class="badge">
                                <i class="fas fa-plus icon-active"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapseProject">
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Credit</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Users</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Notifications</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Configuration</a></li>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn w-100 text-left sidebar_nav" data-toggle="collapse" href="#collapseContact" role="button" aria-expanded="false" aria-controls="collapseContact">
                            Contact <span class="badge">
                                <i class="fas fa-plus icon-active"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapseContact">
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Credit</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Users</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Notifications</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Configuration</a></li>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn w-100 text-left sidebar_nav" data-toggle="collapse" href="#collapsePayroll" role="button" aria-expanded="false" aria-controls="collapsePayroll">
                            Payroll <span class="badge">
                                <i class="fas fa-plus icon-active"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapsePayroll">
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Credit</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Users</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Notifications</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Configuration</a></li>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn w-100 text-left sidebar_nav" data-toggle="collapse" href="#collapseAccount" role="button" aria-expanded="false" aria-controls="collapseAccount">
                            Accounting <span class="badge">
                                <i class="fas fa-plus icon-active"></i>
                            </span>
                        </a>
                        <div class="collapse" id="collapseAccount">
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Credit</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Users</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Notifications</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Affiliate</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Configuration</a></li>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="overlay_row">
        </div>
    </div>
    <!-- Side Navbar end code -->
    <!-- portfolio-section -->
    <section class="portfolio-section py-5">
        <div class="container">

            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-lights nav_2 justify-content-between">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="javascript:void(0)"></a><a href="javascript:void(0)" title="appway"><img src="../wp-content/themes/appway/assets/images/logo.png" alt="logo" style=""></a></figure>
                    </div>
                    <button class="navbar-toggler close_sidebar" type="button">
                        <span> <i class="fas fa-bars text-white"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav w-100 mr-4 justify-content-end" id="nav_ul">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white dropbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-home" aria-hidden="true"></i> Home
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#home-dashboard">
                                        <i class="fas fa-globe-europe"></i> Dashboard
                                    </a>
                                    <a class="dropdown-item" href="#home-plan" id="plan">
                                        <i class="fas fa-envelope"></i> Plan
                                    </a>
                                    <a class="dropdown-item" id="credit_drop" href="#home-credit">
                                        <i class="fas fa-dollar-sign"> Credit</i>
                                        <div class="inner_dropdown">
                                            <span id="inner_1" class="dropdown-item" href="#add-credit-inner">
                                                <i class="fas fa-dollar-sign mr-1"></i> Add Credit</span>
                                            <span id="inner_1" class="dropdown-item" href="#billing-inner">
                                                <i class="fas fa-chart-bar mr-1"></i> billing history
                                            </span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" id="users_drop" href="#home-users">
                                        <i class="fas fa-user-edit"></i> Users
                                        <div class="inner_dropdown2">
                                            <span id="inner_1" class="dropdown-item"><i class="fas fa-user mr-1"></i> My
                                                user</span>
                                            <span id="inner_1" class="dropdown-item"><i class="fas fa-users mr-1"></i>
                                                All users</span>
                                            <span id="inner_1" class="dropdown-item"><i class="fas fa-file-alt mr-1"></i> Roles</span>
                                            <span id="inner_1" class="dropdown-item"><i class="fas fa-puzzle-piece mr-1"></i> API V1</span>
                                            <span id="inner_1" class="dropdown-item"><i class="fas fa-puzzle-piece mr-1"></i> API V2</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#home-notifications">
                                        <i class="fas fa-comment-dots"></i> Notifications
                                    </a>
                                    <a class="dropdown-item" href="#home-affiliate">
                                        <i class="fas fa-pen"></i> Affiliate
                                    </a>
                                    <a class="dropdown-item" id="conf_drop" href="#home-configuration">
                                        <i class="fas fa-clock"></i> Configuration
                                        <div class="inner_dropdown3">
                                            <span id="inner_1" class="dropdown-item" href="#setting"><i class="fas fa-cog mr-1"></i>
                                                Settings</span>
                                            <span id="inner_1" class="dropdown-item" href="#bank_account"><i class="fas fa-folder-open mr-1"></i>
                                                Back accounts</span>
                                            <span id="inner_1" class="dropdown-item" href="#integeration_setting"><i class="fas fa-puzzle-piece mr-1"></i>
                                                integrations</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white dropbtn" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-file-invoice"></i> Receivables
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#receivable-dashboard">
                                        <i class="fas fa-globe-europe"></i>
                                        Dashboard</a>
                                    <a class="dropdown-item" id="rec_drop" href="#receivable-document">
                                        <i class="fas fa-dollar-sign"></i> Documents
                                        <div class="inner_dropdown_r">
                                            <span id="inner_1" class="dropdown-item" href="#doc-invoice-inner">
                                                <i class="fas fa-dollar-sign mr-1"></i> Invoices</span>
                                            <span id="inner_1" class="dropdown-item" href="#doc-offer-inner">
                                                <i class="fas fa-folder-open mr-1"></i> Offers
                                            </span>
                                            <span id="inner_1" class="dropdown-item" href="#doc-order-inner">
                                                <i class="fas fa-folder-open mr-1"></i> Order confirmation
                                            </span>
                                            <span id="inner_1" class="dropdown-item" href="#doc-delivery-inner">
                                                <i class="fas fa-pen mr-1"></i> Delviery notes
                                            </span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" id="cat_drop" href="#receivable-catalogue">
                                        <i class="fas fa-book-open"></i>
                                        Catalogue
                                        <div class="inner_dropdown_c">
                                            <span id="inner_1" class="dropdown-item" href="#receivable-service-inner">
                                                <i class="fas fa-book-open mr-1"></i> Services </span>
                                            <span id="inner_1" class="dropdown-item" href="#receivable-product-inner">
                                                <i class="fas fa-folder-open mr-1"></i> Products
                                            </span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#receivable-mailling">
                                        <i class="fas fa-paper-plane"></i>
                                        Mailing
                                        Center</a>
                                    <a class="dropdown-item" href="#receivable-statitics">
                                        <i class="fas fa-chart-bar"></i>
                                        Statistics
                                    </a>
                                    <a class="dropdown-item" id="data_drop" href="#receivable-data">
                                        <i class="fas fa-database"></i>
                                        Data
                                        <div class="inner_dropdown_d">
                                            <span id="inner_1" class="dropdown-item" href="#receivable-import-inner">
                                                <i class="fas fa-arrow-circle-down mr-1"></i> Import </span>
                                            <span id="inner_1" class="dropdown-item" href="#receivable-export-inner">
                                                <i class="fas fa-arrow-circle-up mr-1"></i> Export </span>
                                            <span id="inner_1" class="dropdown-item"
                                                href="#receivable-bankstatement-inner">
                                                <i class="fas fa-arrow-circle-down mr-1"></i> Bank statements
                                            </span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" id="confi_drop" href="#receivable-configuration">
                                        <i class="fas fa-clock"></i>
                                        Configuration
                                        <div class="inner_dropdown_Con">
                                            <span id="inner_1" class="dropdown-item" href="#receivable-layout-inner">
                                                <i class="fas fa-laptop mr-1"></i> Layout</span>
                                            <span id="inner_1" class="dropdown-item" href="#receivable-software-inner">
                                                <i class="fas fa-clock mr-1"></i> Software settings</span>
                                            <span id="inner_1" class="dropdown-item" href="#txt-and-templates">
                                                <i class="fas fa-pen mr-1"></i> Texts and templates
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white dropbtn" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-file-alt"></i> Payables
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#payable-dashboard"><i class="fas fa-globe-europe"></i>
                                        Dashboard</a>
                                    <a class="dropdown-item" href="#payable-cost"><i class="fas fa-dollar-sign"></i> Costs</a>
                                    <a class="dropdown-item" href="#payable-creditiors"><i class="fas fa-user"></i> Creditors</a>
                                    <a class="dropdown-item" href="#payable-Categories"><i class="fas fa-book-open"></i>
                                        Categories</a>
                                    <a class="dropdown-item" id="pay_data_drop" href="#payable-data">
                                        <i class="fas fa-database"></i> Data
                                        <div class="inner_dropdown_pay_data">
                                            <span id="inner_1" class="dropdown-item" href="#pay-export-innner">
                                                <i class="fas fa-arrow-up mr-1"></i> Export
                                            </span>
                                            <span id="inner_1" class="dropdown-item" href="#pay-statment-innner">
                                                <i class="fas fa-arrow-down mr-1"></i> Bankstatements
                                            </span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#payable-configuration"><i class="fas fa-clock"></i> Configuration</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white dropbtn" href="#project-dashboard"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-tasks"></i> Projects & times
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#project-dashboard"><i
                                            class="fas fa-globe-europe"></i>
                                        Dashboard
                                    </a>
                                    <a class="dropdown-item" href="#project-project"><i class="fas fa-folder-open"></i>
                                        Projects
                                    </a>
                                    <a class="dropdown-item" id="time_report_drop" href="#project-timereport">
                                        <i class="fas fa-clock"></i> Time report
                                        <div class="inner_dropdown_Timemanagement">
                                            <span id="inner_1" class="dropdown-item"
                                                href="#project-timemanagemnet-inner">
                                                <i class="fas fa-clock mr-1"></i> Time management</span>
                                            <span id="inner_1" class="dropdown-item"
                                                href="#project-employeereports-inner">
                                                <i class="fas fa-clock mr-1"></i> Employee reports
                                            </span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#project-customer-report"><i class="fas fa-user-friends"></i> Customer
                                        report
                                    </a>
                                    <a class="dropdown-item" href="#project-costs-units"><i class="fas fa-book-open"></i> Cost
                                        units
                                    </a>
                                    <a class="dropdown-item" href="#project-statics"><i class="fas fa-chart-bar"></i>
                                        Statistics
                                    </a>
                                    <a class="dropdown-item" href="#project-data"><i class="fas fa-database"></i>
                                        Data
                                    </a>
                                    <a class="dropdown-item" id="project-config_drop" href="#project-configuration">
                                        <i class="fas fa-pen"></i> Configuration
                                        <div class="inner_dropdown_project-config">
                                            <span id="inner_1" class="dropdown-item"
                                                href="#project-general-inner">
                                                <i class="fas fa-laptop mr-1"></i> General</span>
                                            <span id="inner_1" class="dropdown-item"
                                                href="#">
                                                <i class="fas fa-clock mr-1"></i> Target times/prices
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white dropbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-users"></i> Contacts
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"><i class="fas fa-globe-europe"></i>
                                        Dashboard</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Administraion</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-folder-open"></i>
                                        Correspondence</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-bars"></i> Reminders</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-database"></i> Data</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white dropbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-clock"></i> Payroll
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"><i class="fas fa-globe-europe"></i>
                                        E-salars</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white dropbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-book"></i> Accounting
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"><i class="fas fa-globe-europe"></i>
                                        Dashboard</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Financial
                                        statements</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-database"></i> Data</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-book-open"></i>
                                        Fiducaries</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-clock"></i> Configuration</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center">

                <!-- Home Tab Start -->

                <?php homeDashboard(); ?>
                <?php homePlan(); ?>
                <?php homeCredit(); ?>
                <?php homeNotification(); ?>
                <?php homeAffiliate(); ?>
                <?php homeConfig(); ?>

                <!-- Home Tab end -->
                <!-- Receivable Tab Start -->

                <?php ReceivableDashboard(); ?>
                <?php ReceivableDocument(); ?>
                <?php ReceivableCatalogue(); ?>
                <?php ReceivableMailing(); ?>
                <?php ReceivableStatistics(); ?>
                <?php ReceivableData(); ?>
                <?php ReceivableConfiguration(); ?>

                <!-- Receivable Tab end -->

                <!-- Payable Tab Start -->
                <?php PayableDashbaord(); ?>
                <?php PayableCost(); ?>
                <?php PayableCreditors(); ?>
                <?php PaybaleCatagories(); ?>
                <?php PayableData(); ?>
                <?php PayableConfig(); ?>

                <!-- payable Tab end -->
                <!-- project Tab start -->

                <?php projectDashboard(); ?>
                <?php projectProjectTab(); ?>
                <?php timeReportTab(); ?>
                <?php customerReportTab(); ?>
                <?php costUnit(); ?>
                <?php statiTics(); ?>
                <?php daTa(); ?>
                <?php confiGuration(); ?>

                <!-- project Tab end -->
            </div>
        </div>
    </section>
    <!-- portfolio-section end -->

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>

    <!-- jequery plugins -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/circle-progress.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/isotope.js"></script>

    <!-- main-js -->
    <script src="js/script.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="Newjquery.js"></script> -->

</body>
<!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Appway/portfolio-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 07:20:37 GMT -->
<?php HomeTabFunc(); ?>

</html>