@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
    <nav id="sidebar" class="nav-sidebar">
        <div id="dismiss">
            <i class="fa fa-close"></i>
        </div>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <a href="index.php">
                    <img src="frontend/img/logos/logo.png" alt="sidebarlogo">
                </a>
            </div>
            <div class="sidebar-navigation">
                <h3 class="heading">Pages</h3>
                <ul class="menu-list">
                    <li><a href="#" class="active pt0">Index <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="index.php">Index 1</a></li>
                            <li><a href="index-2.php">Index 2</a></li>
                            <li><a href="index-3.php">Index 3</a></li>
                            <li><a href="index-4.php">Index 4</a></li>
                            <li><a href="index-5.php">Index 5</a></li>
                            <li><a href="index-6.php">Index 6</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Properties <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="frontend/properties-list-rightside.php">Right Sidebar</a></li>
                                    <li><a href="properties-list-leftside.php">Left Sidebar</a></li>
                                    <li><a href="properties-list-fullwidth.php">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Grid Layout<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="properties-grid-rightside.php">Right Sidebar</a></li>
                                    <li><a href="properties-grid-leftside.php">Left Sidebar</a></li>
                                    <li><a href="properties-grid-fullwidth.php">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Map View <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="properties-map-rightside-list.php">Map List 1</a></li>
                                    <li><a href="properties-map-leftside-list.php">Map List 2</a></li>
                                    <li><a href="properties-map-rightside-grid.php">Map Grid 1</a></li>
                                    <li><a href="properties-map-leftside-grid.php">Map Grid 2</a></li>
                                    <li><a href="properties-map-full.php">Map FullWidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Property Detail <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="properties-details.php">Property Detail 1</a></li>
                                    <li><a href="properties-details-2.php">Property Detail 2</a></li>
                                    <li><a href="properties-details-3.php">Property Detail 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Agents <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="agent-listing-grid.php">Agent grid</a></li>
                            <li><a href="agent-listing-grid-sidebar.php">Agent Grid sidebarbar</a></li>
                            <li><a href="agent-listing-row.php">Agent list</a></li>
                            <li><a href="agent-listing-row-sidebar.php">Agent List Sidebarbar</a></li>
                            <li><a href="agent-single.php">Agent Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">About<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="about.php">About 1</a></li>
                                    <li><a href="about-2.php">About 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Services<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="services-1.php">Services 1</a></li>
                                    <li><a href="services-2.php">Services 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pricing Tables <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="pricing-tables.php">Pricing Tables 1</a></li>
                                    <li><a href="pricing-tables-2.php">Pricing Tables 2</a></li>
                                    <li><a href="pricing-tables-3.php">Pricing Tables 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Faq <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="faq.php">Faq 1</a></li>
                                    <li><a href="faq-2.php">Faq 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Gallery<em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="gallery-1.php">Gallery 1</a></li>
                                    <li><a href="gallery-2.php">Gallery 2</a></li>
                                    <li><a href="gallery-3.php">Gallery 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Contact <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="contact.php">Contact 1</a></li>
                                    <li><a href="contact-2.php">Contact 2</a></li>
                                    <li><a href="contact-3.php">Contact 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="properties-comparison.php">Properties Comparison</a>
                            </li>
                            <li>
                                <a href="search-brand.php">Search Brand</a>
                            </li>
                            <li>
                                <a href="typography.php">Typography</a>
                            </li>
                            <li>
                                <a href="elements.php">Elements</a>
                            </li>
                            <li>
                                <a href="icon.php">Icon</a>
                            </li>
                            <li>
                                <a href="404.php">Pages 404</a>
                            </li>
                            <li>
                                <a href="user-profile.php">User Profile</a>
                            </li>
                            <li>
                                <a href="my-properties.php">My Properties</a>
                            </li>
                            <li>
                                <a href="favorited-properties.php">Favorited properties</a>
                            </li>
                            <li>
                                <a href="login.php">Login</a>
                            </li>
                            <li>
                                <a href="signup.php">Signup</a>
                            </li>
                            <li>
                                <a href="forgot-password.php">Forgot Password</a>
                            </li>
                        </ul>
                    </li
                    <li>
                        <a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">Blog Classic <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-classic-sidebar-right.php">Right Sidebar</a></li>
                                    <li><a href="blog-classic-sidebar-left.php">Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Columns <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-columns-2col.php">2 Columns</a></li>
                                    <li><a href="blog-columns-3col.php">3 Columns</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Details <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="blog-single-sidebar-right.php">Right Sidebar</a></li>
                                    <li><a href="blog-single-sidebar-left.php">Left Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="submit-property.php">Submit Property</a>
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

    <div class="banner" id="banner3">
        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item item-bg active">
                    <img class="d-block w-100 h-100" src="frontend/img/banner/img-4.jpg" alt="banner-photo">
                    <div class="carousel-caption banner-slider-inner d-flex h-100">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-lg-7 wow fadeInLeft delay-04s align-self-center">
                                    <div class="banner-detail-box text-start">
                                        <h2 data-animation="animated fadeInDown delay-05s">Modern <span>Apartment</span>
                                            In A New Residential Complex</h2>
                                        <p data-animation="animated fadeInUp delay-1s">Allow us to guide you through the
                                            innovative stress free approach in finding your dream Properties.</p>
                                        <a class="btn-2 btn-defaults" href="#"
                                            data-animation="animated fadeInUp delay-15s">
                                            <span>Get Started Now</span> <i class="arrow"></i>
                                        </a>
                                        <a class="btn-1 btn-outline-1" href="#"
                                            data-animation="animated fadeInUp delay-15s">
                                            <span>Learn More</span> <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 wow fadeInRight delay-04s">
                                    <div class="banner-search-box d-none-992">
                                        <!-- Search area start -->
                                        <div class="search-area clearfix">
                                            <div class="search-area-inner">
                                                <div class="search-contents ">
                                                    <form method="GET">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <select class="selectpicker search-fields"
                                                                    name="area from">
                                                                    <option>Area From</option>
                                                                    <option>1000</option>
                                                                    <option>800</option>
                                                                    <option>600</option>
                                                                    <option>400</option>
                                                                    <option>200</option>
                                                                    <option>100</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields"
                                                                name="property status">
                                                                <option>Property Status</option>
                                                                <option>For Sale</option>
                                                                <option>For Rent</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields" name="location">
                                                                <option>Location</option>
                                                                <option>United States</option>
                                                                <option>United Kingdom</option>
                                                                <option>American Samoa</option>
                                                                <option>Belgium</option>
                                                                <option>Cameroon</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields" name="bedrooms">
                                                                <option>Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-30">
                                                            <select class="selectpicker search-fields" name="bathrooms">
                                                                <option>Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="range-slider">
                                                                <div data-min="0" data-max="150000" data-unit="USD"
                                                                    data-min-name="min_price" data-max-name="max_price"
                                                                    class="range-slider-ui ui-slider"
                                                                    aria-disabled="false"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <button class="search-button">Search</button>
                                                        </div>
                                                    </form>
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
        </div>
    </div>

    <div class="search-area d-xl-none d-lg-none">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents ">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="area from">
                                        <option>Area From</option>
                                        <option>1000</option>
                                        <option>800</option>
                                        <option>600</option>
                                        <option>400</option>
                                        <option>200</option>
                                        <option>100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property status">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Cameroon</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property types">
                                        <option>Property Types</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Land</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="range-slider mb-0">
                                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price"
                                            data-max-name="max_price" class="range-slider-ui ui-slider"
                                            aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button btn-3">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content-area featured-properties">
        <div class="container">

            <div class="main-title-3">
                <p class="section-subtitle">Best Rent Properties</p>
                <h1>Featured Properties</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="row g-0 property fp2">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-price">$150,000</div>
                                <img src="frontend/img/properties/properties-14.jpg" alt="fp-list" class="img-responsive hp-2">
                                <div class="property-overlay">
                                    <a href="properties-details.php" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="frontend/img/properties/properties-14.jpg" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="frontend/img/properties/properties-13.jpg" class="hidden"></a>
                                        <a href="frontend/img/properties/properties-15.jpg" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 property-content">

                            <div class="info">

                                <h1 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Beautful Single Home</a>
                                </h1>

                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>

                                <ul class="facilities-list fl-2 clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Bedrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2 Bathrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage </span>
                                    </li>
                                </ul>

                            </div>

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
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight delay-04s">
                    <div class="row g-0 property fp2">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-price">$150,000</div>
                                <img src="frontend/img/properties/properties-15.jpg" alt="fp-list" class="img-responsive hp-2">
                                <div class="property-overlay">
                                    <a href="properties-details.php" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="frontend/img/properties/properties-15.jpg" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="frontend/img/properties/properties-13.jpg" class="hidden"></a>
                                        <a href="frontend/img/properties/properties-14.jpg" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 property-content">
                            <div class="info">
                                <h1 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Modern Family Home</a>
                                </h1>
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <ul class="facilities-list fl-2 clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Bedrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2 Bathrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage </span>
                                    </li>
                                </ul>
                            </div>
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
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="row g-0 property fp2">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-price">$150,000</div>
                                <img src="frontend/img/properties/properties-13.jpg" alt="fp-list" class="img-responsive hp-2">
                                <div class="property-overlay">
                                    <a href="properties-details.php" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="frontend/img/properties/properties-13.jpg" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="frontend/img/properties/properties-14.jpg" class="hidden"></a>
                                        <a href="frontend/img/properties/properties-15.jpg" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 property-content ">
                            <div class="info">
                                <h1 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Sweet Family Home</a>
                                </h1>
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <ul class="facilities-list fl-2 clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Bedrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2 Bathrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage </span>
                                    </li>
                                </ul>
                            </div>
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
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight delay-04s">
                    <div class="row g-0 property fp2">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-price">$150,000</div>
                                <img src="frontend/img/properties/properties-16.jpg" alt="fp-list" class="img-responsive hp-2">
                                <div class="property-overlay">
                                    <a href="properties-details.php" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="frontend/img/properties/properties-16.jpg" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="frontend/img/properties/properties-14.jpg" class="hidden"></a>
                                        <a href="frontend/img/properties/properties-15.jpg" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 property-content">
                            <div class="info">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Masons Villas</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list fl-2 clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Bedrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2 Bathrooms</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage </span>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Featured properties end -->

    <!-- Services start -->
    <div class="services content-area-11 clearfix">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-3">
                <p class="section-subtitle">Our Expertise</p>
                <h1>Why Choose Us</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="service-info-2 df-box">
                        <div class="number">01</div>
                        <div class="icon">
                            <i class="flaticon-people-1"></i>
                        </div>
                        <div class="detail">
                            <h5>
                                <a href="{{url('/services')}}">Trusted By Thousands</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. simply dummy
                                Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                    <div class="service-info-2 df-box">
                        <div class="number">02</div>
                        <div class="icon">
                            <i class="flaticon-symbol-1"></i>
                        </div>
                        <div class="detail">
                            <h5>
                                <a href="{{url('/services')}}">Financing Made Easy</a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. simply dummy
                                Lorem Ipsum has been standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                    <div class="service-info-2 df-box">
                        <div class="number">03</div>
                        <div class="icon">
                            <i class="flaticon-apartment"></i>
                        </div>
                        <div class="detail">
                            <h5>
                                <a href="{{url('/services')}}">Find Your Property </a>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. simply dummy
                                Lorem Ipsum has been standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 text-center wow fadeInUp delay-04s">
                    <a class="btn-1 btn-outline-1" href="/services">
                        <span>Read More</span> <i class="arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services end -->

    <!-- Recently properties start -->
    <div class="content-area-17 comon-slick recently-properties">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-3">
                <p class="section-subtitle">Latest Listings</p>
                <h1>Recently Properties</h1>
            </div>
            <div class="slick row comon-slick-inner"
                data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="item slide-box wow fadeInRight delay-04s">
                    <div class="property-2">
                        <div class="property-inner">
                            <div class="property-overflow">
                                <div class="property-photo">
                                    <img src="frontend/img/recently-properties/img-1.jpg" alt="rp" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured active">For Sale</span>
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$72.000</div>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <!-- title -->
                                <h4 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Big Head House</a>
                                </h4>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                            </div>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3Bed</span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span>2Bath</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item slide-box wow fadeInRight delay-04s">
                    <div class="property-2">
                        <div class="property-inner">
                            <div class="property-overflow">
                                <div class="property-photo property-img">
                                    <img src="frontend/img/recently-properties/img-2.jpg" alt="rp" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured red">For Rent</span>
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$72.000</div>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <!-- title -->
                                <h4 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Masons Villas</a>
                                </h4>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                            </div>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3Bed</span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span>2Bath</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item slide-box wow fadeInLeft delay-04s">
                    <div class="property-2">
                        <div class="property-inner">
                            <div class="property-overflow">
                                <div class="property-photo">
                                    <img src="frontend/img/recently-properties/img-3.jpg" alt="rp" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured active">For Sale</span>
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$72.000</div>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <!-- title -->
                                <h4 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Park Avenue</a>
                                </h4>

                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                            </div>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3Bed</span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span>2Bath</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item slide-box wow fadeInLeft delay-04s">
                    <div class="property-2">
                        <div class="property-inner">
                            <div class="property-overflow">
                                <div class="property-photo property-img">
                                    <img src="frontend/img/recently-properties/img-4.jpg" alt="rp" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured red">For Rent</span>
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$72.000</div>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <!-- title -->
                                <h4 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Park Avenue</a>
                                </h4>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                            </div>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3Bed</span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span>2Bath</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item slide-box wow fadeInLeft delay-04s">
                    <div class="property-2">
                        <div class="property-inner">
                            <div class="property-overflow">
                                <div class="property-photo property-img">
                                    <img src="frontend/img/recently-properties/img-3.jpg" alt="rp" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured red">For Rent</span>
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$72.000</div>
                                    </div>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <!-- title -->
                                <h4 class="title">
                                    <a href="{{url('/propertiesdetails')}}">Family Villa</a>
                                </h4>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.php">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                            </div>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3Bed</span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span>2Bath</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recently Partners block end -->

    <!-- Counters 1 strat -->
    <div class="counters-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="counter-box-1">
                        <i class="flaticon-symbol-1"></i>
                        <h1 class="counter">967</h1>
                        <h5>Listings For Rent</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="counter-box-1">
                        <i class="flaticon-tag"></i>
                        <h1 class="counter">1276</h1>
                        <h5>Listings For Sale</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="counter-box-1">
                        <i class="flaticon-people-1"></i>
                        <h1 class="counter">396</h1>
                        <h5>Brokers</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="counter-box-1">
                        <i class="flaticon-people"></i>
                        <h1 class="counter">177</h1>
                        <h5>Agents</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters 1 end -->

    <!-- Popular Places strat -->
    <div class="popular-places pp2 content-area-12">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-3">
                <p class="section-subtitle">Find Your City</p>
                <h1>Popular Places</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInLeft delay-04s col-pad">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="popular-places-box">
                                <div class="popular-places-overflow">
                                    <div class="popular-places-photo">
                                        <img class="img-fluid w-100" src="frontend/img/popular-places/popular-places-1.jpg"
                                            alt="popular-places">
                                    </div>
                                </div>
                                <div class="ling">
                                    <div class="ling-section">
                                        <h3>
                                            <a href="#">Florida</a>
                                            <span class="float-end">27 Properties</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="popular-places-box">
                                <div class="popular-places-overflow">
                                    <div class="popular-places-photo">
                                        <img class="img-fluid w-100" src="frontend/img/popular-places/popular-places-2.jpg"
                                            alt="popular-places">
                                    </div>
                                </div>
                                <div class="ling">
                                    <div class="ling-section">
                                        <h3>
                                            <a href="#">Rome</a>
                                            <span class="float-end">12 Properties</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s col-pad">
                    <div class="popular-places-box">
                        <div class="popular-places-overflow">
                            <div class="popular-places-photo">
                                <img class="img-fluid w-100 big" src="frontend/img/popular-places/popular-places-4.jpg"
                                    alt="popular-places">
                            </div>
                        </div>
                        <div class="ling">
                            <div class="ling-section">
                                <h3>
                                    <a href="#">Tokyo</a>
                                    <span class="float-end">06 Properties</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s col-pad">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="popular-places-box">
                                <div class="popular-places-overflow">
                                    <div class="popular-places-photo">
                                        <img class="img-fluid w-100" src="frontend/img/popular-places/popular-places-6.jpg"
                                            alt="popular-places">
                                    </div>
                                </div>
                                <div class="ling">
                                    <div class="ling-section">
                                        <h3>
                                            <a href="#">New York City</a>
                                            <span class="float-end">26 Properties</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="popular-places-box">
                                <div class="popular-places-overflow">
                                    <div class="popular-places-photo">
                                        <img class="img-fluid w-100" src="frontend/img/popular-places/popular-places-5.jpg"
                                            alt="popular-places">
                                    </div>
                                </div>
                                <div class="ling">
                                    <div class="ling-section">
                                        <h3>
                                            <a href="#">San Francisco</a>
                                            <span class="float-end">65 Properties</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular places end -->

    <!-- Agent section start -->
    <div class="agent-section content-area-17">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-3">
                <p class="section-subtitle">Our Professionals</p>
                <h1>Meet Our Agent</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="row agent-2 a-two g-0">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="photo">
                                <img src="frontend/img/team/team-1.jpg" alt="agent-2" class="img-fluid">
                                <ul class="social-list clearfix">
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
                            <div class="detail">
                                <h4>
                                    <a href="{{url('/agentsingle')}}">Karen Paran</a>
                                </h4>
                                <h5>Office Manager</h5>
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <strong>Address:</strong><a href="#"> 44 New Design Street,</a>
                                        </li>
                                        <li>
                                            <strong>Email:</strong><a href="mailto:info@themevessel.com">
                                                info@themevessel.com</a>
                                        </li>
                                        <li>
                                            <strong>Mobile:</strong><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                        </li>
                                        <li>
                                            <strong>Fax:</strong><a href="#"> +0477 85X6 552</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                    <div class="row agent-2 a-two g-0">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="photo">
                                <img src="frontend/img/team/team-2.jpg" alt="agent-2" class="img-fluid">
                                <ul class="social-list clearfix">
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
                            <div class="detail">
                                <h4>
                                    <a href="{{url('/agentsingle')}}">David Jackson Roy</a>
                                </h4>
                                <h5>Creative Director</h5>
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <strong>Address:</strong><a href="#"> 44 New Design Street,</a>
                                        </li>
                                        <li>
                                            <strong>Email:</strong><a href="mailto:info@themevessel.com">
                                                info@themevessel.com</a>
                                        </li>
                                        <li>
                                            <strong>Mobile:</strong><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                        </li>
                                        <li>
                                            <strong>Fax:</strong><a href="#"> +0477 85X6 552</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agent section end -->

    <div class="clearfix"></div>
    <!-- Testimonials 1 Start-->
    <div class="testimonials-1">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-3">
                <p class="section-subtitle">Customer Reviews</p>
                <h1>Our Testimonial</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonials-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text everLorem industry's standard
                                        dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</p>
                                    <div class="avatar">
                                        <img src="frontend/img/avatar/avatar-2.jpg" alt="testimonial-user">
                                    </div>
                                    <h4>Karen Paran</h4>
                                    <p class="job">CEO, Brick Consulting</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonials-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text everLorem industry's standard
                                        dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</p>
                                    <div class="avatar">
                                        <img src="frontend/img/avatar/avatar-1.jpg" alt="testimonial-user">
                                    </div>
                                    <h4>Karen Paran</h4>
                                    <p class="job">Office Manager, New York</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonials-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text everLorem industry's standard
                                        dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</p>
                                    <div class="avatar">
                                        <img src="frontend/img/avatar/avatar-3.jpg" alt="testimonial-user">
                                    </div>
                                    <h4>Karen Paran</h4>
                                    <p class="job">Creative Director, india</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonials-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text everLorem industry's standard
                                        dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</p>
                                    <div class="avatar">
                                        <img src="frontend/img/avatar/avatar-4.jpg" alt="testimonial-user">
                                    </div>
                                    <h4>Karen Paran</h4>
                                    <p class="job">Web Designer, Uk</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials 1 End -->
    <div class="clearfix"></div>

    <!-- Blog start -->
    <div class="blog comon-slick content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-3">
                <p class="section-subtitle">Latest News</p>
                <h1>Our Blog</h1>
            </div>
            <div class="slick row comon-slick-inner"
                data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="item slide-box wow fadeInUp delay-04s">
                    <div class="blog-2">
                        <img src="frontend/img/blog/blog-4.jpg" alt="blog-photo" class="img-fluid w-100">
                        <div class="date-box">
                            <span>24</span> May
                        </div>
                        <div class="blog-info">
                            <h3><a href="{{url('/blogsinglesidebarright')}}">Find Your Best Real Estate</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                        </div>
                    </div>
                </div>
                <div class="item slide-box wow fadeInRight delay-04s">
                    <div class="blog-2">
                        <img src="frontend/img/blog/blog-5.jpg" alt="blog-photo" class="img-fluid w-100">
                        <div class="date-box">
                            <span>21</span> July
                        </div>
                        <div class="blog-info">
                            <h3><a href="blog-single-sidebar-right.php">Selling Your Real House</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                        </div>
                    </div>
                </div>
                <div class="item slide-box wow fadeInUp delay-04s">
                    <div class="blog-2">
                        <img src="frontend/img/blog/blog-6.jpg" alt="blog-photo" class="img-fluid w-100">
                        <div class="date-box">
                            <span>27</span> April
                        </div>
                        <div class="blog-info">
                            <h3><a href="{{url('/blogsinglesidebarright')}}">Buying a Best House</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                        </div>
                    </div>
                </div>
                <div class="item slide-box wow fadeInLeft delay-04s">
                    <div class="blog-2">
                        <img src="frontend/img/blog/blog-6.jpg" alt="blog-photo" class="img-fluid w-100">
                        <div class="date-box">
                            <span>27</span> April
                        </div>
                        <div class="blog-info">
                            <h3><a href="blog-single-sidebar-right.php">Buying a Best House</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog end -->

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
@endsection
