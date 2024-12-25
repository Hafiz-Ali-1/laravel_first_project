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
    <!-- /Option Panel -->

    <!-- Login section start -->
    <div class="login-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-section">
                        <div class="logo-2">
                            <a class="logo" href="index..php">
                                {{-- <img src="frontend/img/logo/logo.png" alt="logo"> --}}
                            </a>
                        </div>
                        <h3>Sign Into Your Account</h3>
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group clearfix">
                                <input name="email" type="email" class="form-control" placeholder="Email Address"
                                    aria-label="Email Address">
                            </div>
                            <div class="form-group clearfix">
                                <input name="password" type="password" class="form-control" placeholder="Password"
                                    aria-label="Password">
                            </div>
                            <div class="checkbox form-group clearfix">
                                <div class="form-check float-start">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot-password..php" class="link-light float-end forgot-password">Forgot your
                                    password?</a>
                            </div>
                            <div class="form-group mb-0 clearfix">
                                <button type="submit" name='submit'
                                    class="button-md button-theme btn-3 w-100">Login</button>
                            </div>
                            <div class="extra-login clearfix">
                                <span>Or Login With</span>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="social-list">
                                <li><a href="#" class="facebook-color"><i
                                            class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li>
                                <li><a href="#" class="twitter-color"><i
                                            class="fa fa-twitter twitter-i"></i><span>Twitter</span></a></li>
                                <li><a href="#" class="google-color"><i
                                            class="fa fa-google google-i"></i><span>Google</span></a></li>
                            </ul>
                        </form>
                        <p>Don't have an account? <a href="signup..php" class="thembo"> Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login section end -->

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
