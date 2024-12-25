@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
<!DOCTYPE html>

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../../../../../../www.googletagmanager.com/gtm5445..php?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TNL8QV6');</script>
    <!-- End Google Tag Manager -->
    <title>The Nest - Real Estate .php Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="frontend/css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="frontend/css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/flaticon/font/flaticon.css">
    <link type="text/css" rel="stylesheet" href="frontend/fonts/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="frontend/css/initial.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="frontend/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="frontend/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;900&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="frontend/frontend/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- .php5 shim and Respond.js for IE8 support of .php5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/.php5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns..php?id=GTM-TNL8QV6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page_loader"></div>

    <!-- Option Panel -->
    <div class="option-panel option-panel-collased">
        <h2>Change Color</h2>
        <div class="color-plate default-plate" data-color="default"></div>
        <div class="color-plate blue-plate" data-color="blue"></div>
        <div class="color-plate yellow-plate" data-color="yellow"></div>
        <div class="color-plate red-plate" data-color="red"></div>
        <div class="color-plate green-light-plate" data-color="green-light"></div>
        <div class="color-plate orange-plate" data-color="orange"></div>
        <div class="color-plate yellow-light-plate" data-color="yellow-light"></div>
        <div class="color-plate green-light-2-plate" data-color="green-light-2"></div>
        <div class="color-plate olive-plate" data-color="olive"></div>
        <div class="color-plate purple-plate" data-color="purple"></div>
        <div class="color-plate blue-light-plate" data-color="blue-light"></div>
        <div class="color-plate brown-plate" data-color="brown"></div>
    </div>
    <nav id="sidebar" class="nav-sidebar">
        <!-- Close btn-->
        <div id="dismiss">
            <i class="fa fa-close"></i>
        </div>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <a href="index..php">
                    <img src="frontend/img/logos/logo.png" alt="sidebarlogo">
                </a>
            </div>
            <div class="sidebar-navigation">
                <h3 class="heading">Pages</h3>
                <ul class="menu-list">
                    <li><a href="#" class="pt0">Index <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="index..php">Index 1</a></li>
                            <li><a href="index-2..php">Index 2</a></li>
                            <li><a href="index-3..php">Index 3</a></li>
                            <li><a href="index-4..php">Index 4</a></li>
                            <li><a href="index-5..php">Index 5</a></li>
                            <li><a href="index-6..php">Index 6</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Properties <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="properties-list-rightside..php">Right Sidebar</a></li>
                                    <li><a href="properties-list-leftside..php">Left Sidebar</a></li>
                                    <li><a href="properties-list-fullwidth..php">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Grid Layout<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="properties-grid-rightside..php">Right Sidebar</a></li>
                                    <li><a href="properties-grid-leftside..php">Left Sidebar</a></li>
                                    <li><a href="properties-grid-fullwidth..php">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Map View <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="properties-map-rightside-list..php">Map List 1</a></li>
                                    <li><a href="properties-map-leftside-list..php">Map List 2</a></li>
                                    <li><a href="properties-map-rightside-grid..php">Map Grid 1</a></li>
                                    <li><a href="properties-map-leftside-grid..php">Map Grid 2</a></li>
                                    <li><a href="properties-map-full..php">Map FullWidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Property Detail <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="properties-details..php">Property Detail 1</a></li>
                                    <li><a href="properties-details-2..php">Property Detail 2</a></li>
                                    <li><a href="properties-details-3..php">Property Detail 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Agents <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="agent-listing-grid..php">Agent grid</a></li>
                            <li><a href="agent-listing-grid-sidebar..php">Agent Grid sidebarbar</a></li>
                            <li><a href="agent-listing-row..php">Agent list</a></li>
                            <li><a href="agent-listing-row-sidebar..php">Agent List Sidebarbar</a></li>
                            <li><a href="agent-single..php">Agent Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="active">Pages <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">About<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="about..php">About 1</a></li>
                                    <li><a href="about-2..php">About 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Services<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="services-1..php">Services 1</a></li>
                                    <li><a href="services-2..php">Services 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pricing Tables <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="pricing-tables..php">Pricing Tables 1</a></li>
                                    <li><a href="pricing-tables-2..php">Pricing Tables 2</a></li>
                                    <li><a href="pricing-tables-3..php">Pricing Tables 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Faq <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="faq..php">Faq 1</a></li>
                                    <li><a href="faq-2..php">Faq 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Gallery<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="gallery-1..php">Gallery 1</a></li>
                                    <li><a href="gallery-2..php">Gallery 2</a></li>
                                    <li><a href="gallery-3..php">Gallery 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Contact <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="contact..php">Contact 1</a></li>
                                    <li><a href="contact-2..php">Contact 2</a></li>
                                    <li><a href="contact-3..php">Contact 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="properties-comparison..php">Properties Comparison</a>
                            </li>
                            <li>
                                <a href="search-brand..php">Search Brand</a>
                            </li>
                            <li>
                                <a href="typography..php">Typography</a>
                            </li>
                            <li>
                                <a href="elements..php">Elements</a>
                            </li>
                            <li>
                                <a href="icon..php">Icon</a>
                            </li>
                            <li>
                                <a href="404..php">Pages 404</a>
                            </li>
                            <li>
                                <a href="user-profile..php">User Profile</a>
                            </li>
                            <li>
                                <a href="my-properties..php">My Properties</a>
                            </li>
                            <li>
                                <a href="favorited-properties..php">Favorited properties</a>
                            </li>
                            <li>
                                <a href="login..php">Login</a>
                            </li>
                            <li>
                                <a href="signup..php">Signup</a>
                            </li>
                            <li>
                                <a href="forgot-password..php">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">Blog Classic <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-classic-sidebar-right..php">Right Sidebar</a></li>
                                    <li><a href="blog-classic-sidebar-left..php">Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Columns <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-columns-2col..php">2 Columns</a></li>
                                    <li><a href="blog-columns-3col..php">3 Columns</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Details <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-single-sidebar-right..php">Right Sidebar</a></li>
                                    <li><a href="blog-single-sidebar-left..php">Left Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="submit-property..php">Submit Property</a>
                    </li>
                </ul>
            </div>
            <div class="get-in-touch">
                <h3 class="heading">Get in Touch</h3>
                <div class="sidebar-contact-info">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="body-info">
                        <a href="tel:0477-0477-8556-552">0477 8556 552</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="body-info">
                        <a href="#">info@themevessel.com</a>
                    </div>
                </div>
                <div class="sidebar-contact-info mb-0">
                    <div class="icon">
                        <i class="fa fa-fax"></i>
                    </div>
                    <div class="body-info">
                        <a href="tel:0477-0477-8556-552">0266 8556 787</a>
                    </div>
                </div>
            </div>
            <div class="get-social">
                <h3 class="heading">Get Social</h3>
                <a href="#" class="facebook-bg">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="twitter-bg">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="google-bg">
                    <i class="fa fa-google"></i>
                </a>
                <a href="#" class="linkedin-bg">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>
    </nav>
    <!-- Sidenav end -->

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>About Us</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index..php">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- About city estate start -->
    <div class="about-city-estate">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="properties-detail-slider simple-slider pds-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="frontend/img/properties/properties-1.jpg" class="d-block w-100 img-fluid"
                                        alt="photo">
                                </div>
                                <div class="carousel-item">
                                    <img src="frontend/img/properties/properties-2.jpg" class="d-block w-100 img-fluid"
                                        alt="photo">
                                </div>
                                <div class="carousel-item">
                                    <img src="frontend/img/properties/properties-3.jpg" class="d-block w-100 img-fluid"
                                        alt="photo">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 align-self-center">
                    <div class="about-text">
                        <h3>Welcome to The Nest</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula
                            convallis, vel tincidunt ipsum posuere. Fusce sodales lacus ut pellentes sollicitudin. Duis
                            iaculis,<span class="n-1200"> arcu ut hendrerit pharetra, elit augue pulvinar magna, a
                                consectetur eros quam magna, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere. Fusce sodales
                                lacus.</span></p>

                        <ul class="clearfix mb-25">
                            <li>
                                <i class="fa fa-hand-o-right"></i> Professional Variations
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Guaranteed
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Consulting
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Happy Clients
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Clean design
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Advertise
                            </li>
                        </ul>

                        <a class="btn-2 btn-defaults" href="#">
                            <span>Read More</span> <i class="arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About city estate end -->

    <!-- Agent section start -->
    <div class="agent-section content-area comon-slick">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Agent</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            </div>
            <div class="slick row comon-slick-inner"
                data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="item slide-box">
                    <div class="agent-1">
                        <div class="member-thumb">
                            <img src="frontend/img/avatar/avatar-1.png" alt="agent-1" class="img-fluid w-100">
                        </div>
                        <div class="member-content-wrap">
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Michelle Nelson</a>
                                </h4>
                                <p class="member-designation">Support Manager</p>
                                <div class="social-list clearfix">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-hover-content">
                            <div class="member-thumb">
                                <img src="frontend/img/avatar/avatar-1.png" alt="agent-1" class="img-fluid w-100 h-100">
                            </div>
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Michelle Nelson</a>
                                </h4>
                                <p class="member-designation">Support Manager</p>
                            </div>
                            <div class="member-socials">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook "></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="rss-bg"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-box">
                    <div class="agent-1">
                        <div class="member-thumb">
                            <img src="frontend/img/avatar/avatar-2.png" alt="agent-1" class="img-fluid w-100 h-100">
                        </div>
                        <div class="member-content-wrap">
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Karen Paran</a>
                                </h4>
                                <p class="member-designation">Web Developer</p>
                                <div class="social-list clearfix">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-hover-content">
                            <div class="member-thumb">
                                <img src="frontend/img/avatar/avatar-2.png" alt="agent-1" class="img-fluid w-100 h-100">
                            </div>
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Karen Paran</a>
                                </h4>
                                <p class="member-designation">Web Developer</p>
                            </div>
                            <div class="member-socials">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook "></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="rss-bg"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-box">
                    <div class="agent-1">
                        <div class="member-thumb">
                            <img src="frontend/img/avatar/avatar-3.png" alt="agent-1" class="img-fluid w-100">
                        </div>
                        <div class="member-content-wrap">
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Karen Paran</a>
                                </h4>
                                <p class="member-designation">Office Manager</p>
                                <div class="social-list clearfix">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-hover-content">
                            <div class="member-thumb">
                                <img src="frontend/img/avatar/avatar-3.png" alt="agent-1" class="img-fluid w-100 h-100">
                            </div>
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Karen Paran</a>
                                </h4>
                                <p class="member-designation">Office Manager</p>
                            </div>
                            <div class="member-socials">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook "></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="rss-bg"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-box">
                    <div class="agent-1">
                        <div class="member-thumb">
                            <img src="frontend/img/avatar/avatar-4.png" alt="team-1" class="img-fluid">
                        </div>
                        <div class="member-content-wrap">
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Martin Smith</a>
                                </h4>
                                <p class="member-designation">Creative Director</p>
                                <div class="social-list clearfix">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-hover-content">
                            <div class="member-thumb">
                                <img src="frontend/img/avatar/avatar-4.png" alt="team-1" class="img-fluid h-100">
                            </div>
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Martin Smith</a>
                                </h4>
                                <p class="member-designation">Creative Director</p>
                            </div>
                            <div class="member-socials">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook "></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="rss-bg"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-box">
                    <div class="agent-1">
                        <div class="member-thumb">
                            <img src="frontend/img/avatar/avatar-3.png" alt="team-1" class="img-fluid">
                        </div>
                        <div class="member-content-wrap">
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Karen Paran</a>
                                </h4>
                                <p class="member-designation">Office Manager</p>
                                <div class="social-list clearfix">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-hover-content">
                            <div class="member-thumb">
                                <img src="frontend/img/avatar/avatar-3.png" alt="team-1" class="img-fluid h-100">
                            </div>
                            <div class="member-name-designation">
                                <h4 class="member-name">
                                    <a href="agent-single..php">Martin Smith</a>
                                </h4>
                                <p class="member-designation">Creative Director</p>
                            </div>
                            <div class="member-socials">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook "></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="rss-bg"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agent section end -->

    <!-- Counters 3 strat -->
    <div class="counters-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 align-self-center">
                    <div class="sec-title-three">
                        <div class="main-title main-title-5 mb-0">
                            <h1>More than 10 Years of Experience</h1>
                            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="counters-3-inner">
                        <div class="counter-box-3 d-flex">
                            <i class="flaticon-tag"></i>
                            <div class="detail">
                                <h1 class="counter">967</h1>
                                <p>Listings For Sale</p>
                            </div>
                        </div>
                        <div class="counter-box-3 d-flex">
                            <i class="flaticon-symbol-1"></i>
                            <div class="detail">
                                <h1 class="counter">967</h1>
                                <p>Listings For Rent</p>
                            </div>
                        </div>
                        <div class="counter-box-3 d-flex">
                            <i class="flaticon-people"></i>
                            <div class="detail">
                                <h1 class="counter">396</h1>
                                <p>Agents</p>
                            </div>
                        </div>
                        <div class="counter-box-3 d-flex">
                            <i class="flaticon-people-1"></i>
                            <div class="detail">
                                <h1 class="counter">177</h1>
                                <p>Brokers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters 3 end -->

    <div class="clearfix"></div>
    <!-- Testimonials 2 -->
    <div class="testimonials-2 comon-slick">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Testimonials</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="slick row comon-slick-inner"
                        data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                        <div class="item slide-box">
                            <div class="testimonials-box">
                                <div class="detail clearfix">
                                    <P><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when unknown. <i class="fa fa-quote-right"></i></P>
                                    <div class="user-info d-flex">
                                        <a class="pr-3" href="#">
                                            <img src="frontend/img/avatar/avatar-3.jpg" alt="user" class="flex-shrink-0 me-3">
                                        </a>
                                        <div class="detail align-self-center">
                                            <h5>
                                                <a href="#">Anne Brady</a>
                                            </h5>
                                            <p>Office Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="testimonials-box">
                                <div class="detail clearfix">
                                    <P><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when unknown. <i class="fa fa-quote-right"></i></P>
                                    <div class="user-info d-flex">
                                        <a class="pr-3" href="#">
                                            <img src="frontend/img/avatar/avatar-2.jpg" alt="user" class="flex-shrink-0 me-3">
                                        </a>
                                        <div class="detail align-self-center">
                                            <h5>
                                                <a href="#">Michelle Nelson</a>
                                            </h5>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item slide-box">
                            <div class="testimonials-box">
                                <div class="detail clearfix">
                                    <P><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when unknown. <i class="fa fa-quote-right"></i></P>
                                    <div class="user-info d-flex">
                                        <a class="pr-3" href="#">
                                            <img src="frontend/img/avatar/avatar-1.jpg" alt="user" class="flex-shrink-0 me-3">
                                        </a>
                                        <div class="detail align-self-center">
                                            <h5>
                                                <a href="#">Auro Navanth</a>
                                            </h5>
                                            <p>Web Designer, Uk</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial 2 end -->
    <div class="clearfix"></div>

    <!-- Intro section start -->
    <div class="intro-section">
        <div class="intro-section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-sm-12">
                        <h3>Looking To Sell Or Rent Your Property?</h3>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <a class="btn-2 btn-white" href="contact..php">
                            <span>Get in Touch</span> <i class="arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/bootstrap-submenu.js"></script>
    <script src="frontend/js/rangeslider.js"></script>
    <script src="frontend/js/jquery.mb.YTPlayer.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="frontend/js/bootstrap-select.min.js"></script>
    <script src="frontend/js/jquery.easing.1.3.js"></script>
    <script src="frontend/js/jquery.scrollUp.js"></script>
    <script src="frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="frontend/js/leaflet.js"></script>
    <script src="frontend/js/leaflet-providers.js"></script>
    <script src="frontend/js/leaflet.markercluster.js"></script>
    <script src="frontend/js/dropzone.js"></script>
    <script src="frontend/js/jquery.filterizr.js"></script>
    <script src="frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="frontend/js/slick.min.js"></script>
    <script src="frontend/js/maps.js"></script>
    <script src="frontend/js/sidebar.js"></script>
    <script src="frontend/js/app.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="frontend/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script src="frontend/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
@endsection