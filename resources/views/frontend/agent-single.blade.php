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
    <link rel="stylesheet" type="text/css" href="frontend//css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
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
    <link rel="stylesheet" type="text/css" href="frontend/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="frontend/js/ie-emulation-modes-warning.js"></script>

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
                        <a href="#" class="active">Agents <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="agent-listing-grid..php">Agent grid</a></li>
                            <li><a href="agent-listing-grid-sidebar..php">Agent Grid sidebarbar</a></li>
                            <li><a href="agent-listing-row..php">Agent list</a></li>
                            <li><a href="agent-listing-row-sidebar..php">Agent List Sidebarbar</a></li>
                            <li><a href="agent-single..php">Agent Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages <em class="fa fa-chevron-down"></em></a>
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
                    <h1>Agent Detail</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index..php">Home</a></li>
                        <li class="active">Agent Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Agent section start -->
    <div class="agent-section content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <!-- Agent detail start -->
                    <div class=" row agent-detail clearfix g-0">
                        <div class="col-lg-5 col-md-5 col-sm-12 agent-theme">
                            <img src="frontend/img/avatar/agent-1.jpg" alt="agent-1" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 agent-content align-self-center">
                            <h5>Creative Director</h5>
                            <h3>
                                <a href="#">John Antony</a>
                            </h3>
                            <!-- Address list -->
                            <ul class="address-list">
                                <li>
                                    <span>
                                        Title:
                                    </span>
                                    John Antony
                                </li>
                                <li>
                                    <span>
                                        Email:
                                    </span>
                                    info@themevessel.com
                                </li>
                                <li>
                                    <span>
                                        Office:
                                    </span>
                                    +55 4XX-634-7071
                                </li>
                                <li>
                                    <span>
                                        Mobile:
                                    </span>
                                    +55 4XX-634-7071
                                </li>
                                <li>
                                    <span>
                                        Skype:
                                    </span>
                                    john.antony
                                </li>
                            </ul>
                            <div class="social-media-area clearfix">
                                <div class="social-media clearfix">
                                    <div class="social-list">
                                        <div class="icon facebook">
                                            <div class="tooltip">Facebook</div>
                                            <span><i class="fa fa-facebook"></i></span>
                                        </div>
                                        <div class="icon twitter">
                                            <div class="tooltip">Twitter</div>
                                            <span><i class="fa fa-twitter"></i></span>
                                        </div>
                                        <div class="icon instagram">
                                            <div class="tooltip">Instagram</div>
                                            <span><i class="fa fa-instagram"></i></span>
                                        </div>
                                        <div class="icon github">
                                            <div class="tooltip">Github</div>
                                            <span><i class="fa fa-github"></i></span>
                                        </div>
                                        <div class="icon youtube mr-0">
                                            <div class="tooltip">Youtube</div>
                                            <span><i class="fa fa-youtube"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agent detail end -->

                    <!-- Biography start -->
                    <div class="sidebar-widget clearfix biography mb-30">
                        <!-- Main Title 2 -->
                        <div class="main-title-4">
                            <h1><span>Biography</span></h1>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla
                            finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus
                            suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla
                            diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a
                            consequat purus viverra a.
                        </p>
                        <p>
                            Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus.
                            Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit
                            amet rutrum elementum</p>
                        <br>
                        <div class="tabbing tabbing-box">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Additional Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Attachments</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="accordion accordion-flush" id="accordionFlushExample7">
                                        <div class="accordion-item">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <ul class="additional-details-list">
                                                        <li><span>Agent Since:</span>2021</li>
                                                        <li><span>Last Sold Property:</span>7 day ago</li>
                                                        <li><span>Properties Sold:</span>20</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <ul class="additional-details-list">
                                                        <li><span>Properties Rented:</span>26</li>
                                                        <li><span>Average Price:</span>$180,000</li>
                                                        <li><span>Website:</span><a href="#">www.sparker.com</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                        <div class="accordion-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="attachments">
                                                        <a href="#"><i class="fa fa-file-o"></i>Resume</a>
                                                        <br>
                                                        <a href="#"><i class="fa fa-file-o"></i>Brochure</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Biography end -->

                    <!-- Recently properties start -->
                    <div class="recently-properties">
                        <!-- Main title -->
                        <div class="main-title-4">
                            <h1>Recently Properties</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <!-- Property start -->
                                <div class="property fp2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="property-tag button alt featured">Featured</div>
                                        <div class="property-tag button sale">For Sale</div>
                                        <div class="property-price">$72.000</div>
                                        <img src="frontend/img/properties/properties-1.jpg" alt="fp" class="img-fluid">
                                        <div class="property-overlay">
                                            <a href="properties-details..php" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <a class="overlay-link property-video" title="Lexus GS F">
                                                <i class="fa fa-video-camera"></i>
                                            </a>
                                            <div class="property-magnify-gallery">
                                                <a href="frontend/img/properties/properties-1.jpg" class="overlay-link">
                                                    <i class="fa fa-expand"></i>
                                                </a>

                                                <a href="frontend/img/properties/properties-2.jpg" class="hidden"></a>
                                                <a href="frontend/img/properties/properties-3.jpg" class="hidden"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Property content -->
                                    <div class="property-content">
                                        <!-- info -->
                                        <div class="info">
                                            <!-- title -->
                                            <h1 class="title">
                                                <a href="properties-details..php">Beautful Single Home</a>
                                            </h1>
                                            <!-- Property address -->
                                            <h3 class="property-address">
                                                <a href="properties-details..php">
                                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                </a>
                                            </h3>
                                            <!-- Facilities List -->
                                            <ul class="facilities-list clearfix">
                                                <li>
                                                    <i
                                                        class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                                    <span>4800 sq ft</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-bed"></i>
                                                    <span>3 Beds</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-monitor"></i>
                                                    <span>TV </span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-holidays"></i>
                                                    <span> 2 Baths</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-vehicle"></i>
                                                    <span>1 Garage</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-building"></i>
                                                    <span> 3 Balcony</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Property footer -->
                                        <div class="property-footer">
                                            <span class="left">
                                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                            </span>
                                            <span class="right">
                                                <i class="fa fa-calendar"></i>5 Days ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property end -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <!-- Property start -->
                                <div class="property fp2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="property-tag button alt featured">Featured</div>
                                        <div class="property-tag button sale">For Sale</div>
                                        <div class="property-price">$72.000</div>
                                        <img src="frontend/img/properties/properties-2.jpg" alt="fp" class="img-fluid">
                                        <div class="property-overlay">
                                            <a href="properties-details..php" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <a class="overlay-link property-video" title="Lexus GS F">
                                                <i class="fa fa-video-camera"></i>
                                            </a>
                                            <div class="property-magnify-gallery">
                                                <a href="frontend/img/properties/properties-2.jpg" class="overlay-link">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                                <a href="frontend/img/properties/properties-4.jpg" class="hidden"></a>
                                                <a href="frontend/img/properties/properties-3.jpg" class="hidden"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Property content -->
                                    <div class="property-content">
                                        <!-- info -->
                                        <div class="info">
                                            <!-- title -->
                                            <h1 class="title">
                                                <a href="properties-details..php">Modern Family Home</a>
                                            </h1>
                                            <!-- Property address -->
                                            <h3 class="property-address">
                                                <a href="properties-details..php">
                                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                </a>
                                            </h3>
                                            <!-- Facilities List -->
                                            <ul class="facilities-list clearfix">
                                                <li>
                                                    <i
                                                        class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                                    <span>4800 sq ft</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-bed"></i>
                                                    <span>3 Beds</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-monitor"></i>
                                                    <span>TV </span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-holidays"></i>
                                                    <span> 2 Baths</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-vehicle"></i>
                                                    <span>1 Garage</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-building"></i>
                                                    <span> 3 Balcony</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Property footer -->
                                        <div class="property-footer">
                                            <span class="left">
                                                <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                            </span>
                                            <span class="right">
                                                <i class="fa fa-calendar"></i>5 Days ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property end -->
                            </div>
                        </div>
                    </div>
                    <!-- Partners block end -->
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12  col-xs-12">
                    <div class="sidebar">
                        <!-- Contact agent start -->
                        <div class="sidebar-widget contact-1">
                            <div class="main-title-4">
                                <h1><span>Contact</span> Agent</h1>
                            </div>
                            <div class="contact-form">
                                <form id="contact_form"
                                    action="https://storage.googleapis.com/theme-vessel-items/checking-sites/nest-2-.php/.php/main/index..php"
                                    method="GET" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group name">
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    aria-label="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group email">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email Address" aria-label="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group number">
                                                <input type="text" name="phone" class="form-control" placeholder="Phone"
                                                    aria-label="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group message">
                                                <textarea class="form-control" name="message"
                                                    placeholder="Write message" aria-label="Write message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="send-btn text-center">
                                                <button type="submit" class="button-md button-theme w-100">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Contact agent end -->

                        <!-- Popular posts start -->
                        <div class="sidebar-widget popular-posts">
                            <div class="main-title-4">
                                <h1>Recent Properties</h1>
                            </div>
                            <div class="d-flex mb-3 popular-posts-box">
                                <a class="pr-3" href="properties-details..php">
                                    <img src="frontend/img/properties/small-properties-2.jpg" alt="small-photo"
                                        class="flex-shrink-0 me-3">
                                </a>
                                <div class="detail align-self-center">
                                    <h4>
                                        <a href="properties-details..php">Modern Family Home</a>
                                    </h4>
                                    <div class="listing-post-meta">
                                        Sep 18, 2021 | <a href="#">$470,00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3 popular-posts-box">
                                <a class="pr-3" href="properties-details..php">
                                    <img src="frontend/img/properties/small-properties-1.jpg" alt="small-photo"
                                        class="flex-shrink-0 me-3">
                                </a>
                                <div class="detail align-self-center">
                                    <h4>
                                        <a href="properties-details..php">Sweet Family Home</a>
                                    </h4>
                                    <div class="listing-post-meta">
                                        Aug 18, 2020 | <a href="#">$485,00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex popular-posts-box">
                                <a class="pr-3" href="properties-details..php">
                                    <img src="frontend/img/properties/small-properties-3.jpg" alt="small-photo"
                                        class="flex-shrink-0 me-3">
                                </a>
                                <div class="detail align-self-center">
                                    <h4>
                                        <a href="properties-details..php">Beautful Single Home</a>
                                    </h4>
                                    <div class="listing-post-meta">
                                        Aug Feb, 2021 | <a href="#">$850,00</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popular posts end -->

                        <!-- Tags box start -->
                        <div class="sidebar-widget tags-box mb-30 clearfix">
                            <div class="main-title-4">
                                <h1><span>Popular</span> Tags</h1>
                            </div>
                            <ul class="tags">
                                <li><a href="#">Image</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Typography</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Slideshow</a></li>
                                <li><a href="#">Post Formats</a></li>
                                <li><a href="#">Sellers</a></li>
                                <li><a href="#">WooCommerce</a></li>
                            </ul>
                        </div>
                        <!-- Tags box end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agent section end -->

    <!-- Our newslatters strat -->
    <div class="our-newslatters">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Get Newsletter</h3>
                    <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                    <div class="form-info">
                        <form class="form-inline d-flex" action="#">
                            <input class="form-control" type="email" id="email2" placeholder="Email Address...">
                            <button class="btn button-theme btn-md" type="submit">Get it now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal property-modal fade" id="propertyModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-raw g-0">
                        <div class="col-lg-5 modal-left">
                            <div class="modal-left-content">
                                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                                    data-bs-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <iframe class="modalIframe w-100"
                                                src="https://www.youtube.com/embed/V7IrnC9MISU"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="frontend/img/img-1.jpg" alt="model-photo" class="w-100 img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="frontend/img/img-2.jpg" alt="model-photo" class="w-100 img-fluid">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 modal-right">
                            <div class="modal-right-content bg-white">
                                <div class="heading comon-section">
                                    <h2>Find Your Dream House</h2>
                                    <p class="location">123 Kathal St. Tampa City,</p>
                                </div>
                                <div class="features comon-section">
                                    <strong class="price">
                                        $178,000
                                    </strong>
                                    <section>
                                        <h3>Features</h3>
                                    </section>
                                    <ul class="bullets">
                                        <li><i class="flaticon-air-conditioner"></i>Air conditioning</li>
                                        <li><i class="flaticon-wifi"></i>Wifi</li>
                                        <li><i class="flaticon-transport"></i>Parking</li>
                                        <li><i class="flaticon-people-2"></i>Pool</li>
                                        <li><i class="flaticon-weightlifting"></i>Gym</li>
                                        <li><i class="flaticon-building"></i>Alarm</li>
                                        <li><i class="flaticon-old-telephone-ringing"></i>Balcony</li>
                                        <li><i class="flaticon-monitor"></i>TV</li>
                                    </ul>
                                </div>
                                <div class="0verview comon-section cs-none">
                                    <section>
                                        <h3>Overview</h3>
                                    </section>
                                    <dl>
                                        <dt>Model</dt>
                                        <dd>Maxima</dd>
                                        <dt>Condition</dt>
                                        <dd>Brand New</dd>
                                        <dt>Year</dt>
                                        <dd>2018</dd>
                                        <dt>Price</dt>
                                        <dd>$178,000</dd>
                                    </dl>
                                    <a href="properties-details..php" class="btn button-sm button-theme">Show Detail</a>
                                </div>
                            </div>
                        </div>
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
    <script src="frontend/js/ie10-viewport-bug-workaround.js"></script>
    <script src="frontend/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
@endsection