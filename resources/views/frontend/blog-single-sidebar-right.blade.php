@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
<!DOCTYPE html>
<head>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../../../../../../www.googletagmanager.com/gtm5445..php?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TNL8QV6');</script>

    <title>The Nest - Real Estate .php Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
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
    <link rel="stylesheet" type="text/css" href="frontend/css/initial.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="frontend/css/skins/default.css">
    <link rel="shortcut icon" href="frontend/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;900&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="frontend/css/ie10-viewport-bug-workaround.css">


    <script src="frontend/js/ie-emulation-modes-warning.js"></script>


</head>

<body>

    <noscript><iframe src="https://www.googletagmanager.com/ns..php?id=GTM-TNL8QV6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="page_loader"></div>


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
                        <a href="#" class="active">Blog <em class="fa fa-chevron-down"></em></a>
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

    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Blog Details Right Sidebar</h1>
                <ul class="breadcrumbs">
                    <li><a href="index..php">Home</a></li>
                    <li class="active">Blog Details Right Sidebar</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blog-body content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">


                    <div class="blog-box clearfix">
                        <img src="frontend/img/blog/blog-1.jpg" alt="blog-1" class="img-fluid w-100">

                        <div class="detail">

                            <h3 class="title">
                                <a href="blog-single-sidebar-right..php">Find Your Dream House</a>
                            </h3>

                            <div class="post-meta">
                                <span><a href="#"><i class="fa fa-user"></i>John Antony</a></span>
                                <span><a><i class="fa fa-calendar "></i>May 27, 2021</a></span>
                                <span><a href="#"><i class="fa fa-bars"></i> The Nest</a></span>
                                <span><a href="#"><i class="fa fa-comments"></i>7 Comment</a></span>
                            </div>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries.But also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the
                                leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing
                            </p>
                            <blockquote class="mb-30">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries. But also the leap into electronic typesetting,
                                remaining essentially unchanged. It was
                            </blockquote>
                            <div class="row mrg-btm-30">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <img src="frontend/img/properties/properties-3.jpg" alt="properties-3"
                                        class="img-fluid mb-30">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <p>But also the leap into electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more recently with desktop publishing software like
                                        Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop
                                    </p>
                                </div>
                            </div>
                            <h3>This is another Sub-Heading</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries. But also the leap into electronic typesetting,
                                remaining essentially unchanged. It was Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>

                            <div class="row clearfix t-s">
                                <div class="col-lg-7 col-md-7 col-sm-12">

                                    <div class="tags-box">
                                        <h2>Tags</h2>
                                        <ul class="tags">
                                            <li><a href="#">Image</a></li>
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Slideshow</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">

                                    <div class="social-media-area clearfix blog-share">
                                        <h2>Share</h2>

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
                        </div>
                    </div>

                    <div class="comments-section sidebar-widget mb-30">

                        <div class="main-title-4">
                            <h1><span>Comments </span> Section</h1>
                        </div>

                        <ul class="comments">
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#">
                                            <img src="frontend/img/avatar/avatar-5.png" alt="avatar-5">
                                        </a>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author">
                                                John Antony
                                            </div>
                                            <div class="comment-meta-reply float-end">
                                                <a href="#">Reply</a>
                                            </div>
                                            <div class="comment-meta-date float-end">
                                                8:55 PM 7/4/2021
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="comment-body">
                                            <div class="comment-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>( 4 Reviews )</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus
                                                tincidunt aliquam. Aliquam gravida massa at sem vulputate.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#">
                                            <img src="frontend/img/avatar/avatar-5.png" alt="avatar-5">
                                        </a>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author">
                                                Eliane Pereira
                                            </div>
                                            <div class="comment-meta-reply float-end">
                                                <a href="#">Reply</a>
                                            </div>
                                            <div class="comment-meta-date float-end">
                                                8:45 PM 7/3/2020
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="comment-body">
                                            <div class="comment-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>( 4 Reviews )</span>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comment comment-mrg-bdr-nane mb-0">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="frontend/img/avatar/avatar-5.png" alt="avatar-5">
                                                </a>
                                            </div>
                                            <div class="comment-content cc2">
                                                <div class="comment-meta">
                                                    <div class="comment-meta-author">
                                                        Jane Doe
                                                    </div>
                                                    <div class="comment-meta-reply float-end">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <div class="comment-meta-date float-end">
                                                        8:42 PM 3/3/2021
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="comment-body">
                                                    <div class="comment-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>( 4 Reviews )</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                                        luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate
                                                        interdum et vel eros.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-1 sidebar-widget mb-30">
                        <div class="main-title-4">
                            <h1> <span>Leave</span> a Comment</h1>
                        </div>
                        <div class="contact-form">
                            <form id="contact_form" action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                aria-label="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address" aria-label="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject"
                                                aria-label="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone"
                                                aria-label="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group message">
                                            <textarea class="form-control" name="message" placeholder="Write message"
                                                aria-label="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send-btn text-center">
                                            <button type="submit" name='submit'
                                                class="button-md button-theme btn-3">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar">

                        <div class="sidebar-widget search-box">
                            <form class="form-inline form-search" method="GET">
                                <div class="form-group">
                                    <label class="sr-only" for="textsearch2">Search</label>
                                    <input type="text" class="form-control" id="textsearch2" placeholder="Search">
                                </div>
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="sidebar-widget category-posts">
                            <div class="main-title-4">
                                <h1>Popular Category</h1>
                            </div>
                            <ul class="list-unstyled list-cat">
                                <li><a href="#">Single Family </a> <span>(45) </span></li>
                                <li><a href="#">Apartment </a> <span>(21) </span></li>
                                <li><a href="#">Condo </a> <span>(23) </span></li>
                                <li><a href="#">Multi Family </a> <span>(19) </span></li>
                                <li><a href="#">Villa </a> <span>(19) </span></li>
                                <li><a href="#">Other </a> <span>(22) </span></li>
                            </ul>
                        </div>

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

                        <div class="sidebar-widget archives">
                            <div class="main-title-4">
                                <h1><span>Popular</span> Archives</h1>
                            </div>
                            <ul class="list-unstyled">
                                <li><a href="#">July 2021</a></li>
                                <li><a href="#">August 2021</a></li>
                                <li><a href="#">September 2020</a></li>
                                <li><a href="#">October 2020</a></li>
                                <li><a href="#">November 2019</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-widget tags-box clearfix">
                            <div class="main-title-4">
                                <h1><span>Popular</span> Tags</h1>
                            </div>
                            <ul class="tags">
                                <li><a href="#">Image</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">WooCommerce</a></li>
                                <li><a href="#">Post Formats</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Slideshow</a></li>
                                <li><a href="#">Sellers</a></li>
                            </ul>
                        </div>

                        <div class="social-media-area sidebar-widget clearfix">

                            <div class="main-title-4">
                                <h1><span>Social</span> Media</h1>
                            </div>

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

                        <div class="sidebar-widget latest-tweet mb-30">
                            <div class="main-title-4">
                                <h1><span>Latest</span> Tweet</h1>
                            </div>
                            <p><a href="#">@Lorem ipsum dolor</a> sit amet, consectetur adipiscing elit. Aenean id
                                dignissim justo. Maecenas urna lacus, bibendum </p>
                            <p class="mb-0">@Lorem ipsum dolor<a href="#">sit amet, consectetur</a> adipiscing elit.
                                Aenean id dignissim justo. Maecenas urna lacus, bibendum </p>
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
