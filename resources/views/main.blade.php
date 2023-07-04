<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <title>
            Vanward International
        </title>
        <meta content="" name="description">
        <meta content="" name="author">
        <meta content="" name="keywords">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <!-- style start -->
        <link href="{{ asset('css/plugins.css') }}" media="all" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/custom.css') }}" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- style end -->
        <!-- google fonts start -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7CMontserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type=
            "text/css">
        <!-- google fonts end -->

        <style>
            .trail { /* className for the trail elements */
                position: absolute;
                height: 6px; width: 6px;
                border-radius: 3px;
                background: #F89F3C;
                position: absolute;
                z-index: 9;
            }
        </style>
    </head>
    <body>
        <!-- preloader start -->
        {{-- <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader">
                    <span></span>
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->
        <!-- tst line start -->
        <div class="tst-line-t"></div>
        <div class="tst-line-l"></div>
        <div class="tst-line-r"></div>
        <div class="tst-line-b"></div>
        <!-- tst line end -->
        <!-- border top start -->
        <!-- container start -->
        <div class="container-fluid nopadding">
            <div class="extra-margin-border">
                <div class="border-top"></div>
            </div>
        </div>
        <!-- container end -->
        <!-- border top end -->
        <!-- navigation start -->
        <nav class="navbar navbar-fixed-top navbar-bg-switch"  >
            <!-- container start -->
            <div class="container-fluid nopadding">
                <div class="navbar-header fadeIn-element">
                    <!-- logo start -->
                    <div class="logo">
                        <a class="navbar-brand logo" href="#">
                            <!-- logo light start -->
                            <img alt="Logo" class="logo-light" src="{{ asset('logo-2.png') }}" style="width:200px; margin-top: -25px;">
                            <!-- logo light end -->
                            <!-- logo dark start -->
                            <img alt="Logo" class="logo-dark" src="{{ asset('logo-2.png') }}" style="width:200px; margin-top: 25px;">
                            <!-- logo dark end -->
                        </a>
                    </div>
                    <!-- logo end -->
                <!-- main navigation start -->
                    <div class="wrapper">
                        <input type="radio" name="slider" id="menu-btn">
                        <input type="radio" name="slider" id="close-btn">
                        <ul class="nav-links">
                            <!-- close btn for mobile view -->
                        <label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
                        <li><a class="main-menu" href="#">Home</a></li>
                        <li>
                            <a class="main-menu desktop-item" href="#">Our Firm <span class="caret"></span></a>
                            <input type="checkbox" id="showDrop1">
                            <label for="showDrop1" class="mobile-item">Our Firm<span class="caret"></label>
                            <ul class="drop-menu">
                                <li><a href="#">The Partnership</a></li>
                                <li><a href="#">Our Mission & Profile</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Philanthropy</a></li>
                                <li><a href="#">Policies & Disclosures</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="main-menu desktop-item" href="#">Careers <span class="caret"></span></a>
                            <input type="checkbox" id="showDrop2">
                            <label for="showDrop2" class="mobile-item">Careers<span class="caret"></label>
                            <ul class="drop-menu">
                                <li><a href="#">What We Look For</a></li>
                                <li><a href="#">Total Rewards</a></li>
                                <li><a href="#">Life At Vanward</a></li>
                                <li><a href="#">Cares</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="main-menu desktop-item" href="#">Private Banking <span class="caret"></span></a>
                            <input type="checkbox" id="showMega1">
                            <label for="showMega1" class="mobile-item">Private Banking<span class="caret"></label>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <a class="header" href="#">Private Wealth Management</a>
                                        <ul class="mega-links">
                                            <li><a href="#">Investment Advisory</a></li>
                                            <li><a href="#">Wealth Planning</a></li>
                                            <li><a href="#">Philanthropic Advisory</a></li>
                                            <li><a href="#">Trust Services</a></li>
                                            <li><a href="#">Private Client Lending</a></li>
                                            <li><a href="#">Center For Women & Wealth</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <a href="#" class="header">Corporate Advisory & Banking</a>
                                        <ul class="mega-links">
                                            <li><a href="#">Corporate Advisory</a></li>
                                            <li><a href="#">Corporate Banking</a></li>
                                            <li><a href="#">Center For Family Business</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <a href="#" class="header">Private Equity</a>
                                        <ul class="mega-links">
                                            <li><a href="#">About Vanward</a></li>
                                            <li><a href="#">Investment Profile</a></li>
                                            <li><a href="#">Investment Strategy & Transaction Types</a></li>
                                            <li><a href="#">Select Portfolio Companies</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="main-menu desktop-item" href="#">Investment Management <span class="caret"></span></a>
                            <input type="checkbox" id="showMega2">
                            <label for="showMega2" class="mobile-item">Investment Management<span class="caret"></label>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <a class="header" href="#">Public Equity</a>
                                        <ul class="mega-links">
                                            <li><a href="#">US Large Cap Equity</a></li>
                                            <li><a href="#">Global Equity</a></li>
                                            <li><a href="#">US Small & Mid-Cap Equity</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <a class="header" href="#">Fixed Income</a>
                                        <ul class="mega-links">
                                            <li><a href="#">Taxable Fixed Income Strategies</a></li>
                                            <li><a href="#">Tax-Exempt Fixed Income Strategy</a></li>
                                            <li><a href="#">US TIPS Strategy</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <a class="header" href="#">Open Account</a>
                                        <ul class="mega-links">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="main-menu desktop-item" href="#">Investor Services <span class="caret"></span></a>
                            <input type="checkbox" id="showMega3">
                            <label for="showMega3" class="mobile-item">Investor Services<span class="caret"></label>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <a class="header" href="#">Custody & Fund Services</a>
                                        <ul class="mega-links">
                                            <li><a href="#">Custody</a></li>
                                            <li><a href="#">Depositary & Trustee</a></li>
                                            <li><a href="#">Fund Accounting</a></li>
                                            <li><a href="#">Fund Administration</a></li>
                                            <li><a href="#">Transfer Agency</a></li>
                                            <li><a href="#">Global Tax</a></li>
                                            <li><a href="#">Collateral Management</a></li>
                                            <li><a href="#">Fund Order & Custody</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <a class="header" href="#">Specialist Expertise</a>
                                        <ul class="mega-links">
                                            <li><a href="#">Cross-Border Funds</a></li>
                                            <li><a href="#">US Funds</a></li>
                                            <li><a href="#">Consultants & Advisors</a></li>
                                            <li><a href="#">Distribution & Intelligence</a></li>
                                            <li><a href="#">Alternative Funds</a></li>
                                            <li><a href="#">Exchange Traded Funds</a></li>
                                            <li><a href="#">Insurance</a></li>
                                            <li><a href="#">Regulatory Intelligence</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <a class="header" href="#">Markets</a>
                                        <ul class="mega-links">
                                            <li><a href="#">Foreign Exchange</a></li>
                                            <li><a href="#">Active FX Execution</a></li>
                                            <li><a href="#">InfoFX</a></li>
                                            <li><a href="#">Currency Hedging</a></li>
                                            <li><a href="#">Securities Lending</a></li>
                                            <li><a href="#">Market Intelligence</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <a class="header" href="#">Investment Operations & Technology Solutions</a>
                                        <ul class="mega-links">
                                            <li><a href="#">Technology Services</a></li>
                                            <li><a href="#">Middle Office Outsourcing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                            <li><a class="main-menu" href="#">Contact Us</a></li>
                            <li><a class="main-menu" href="#">Client Login</a></li>
                        </ul>
                        <!-- bar btn for mobile view -->
                        <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
                    </div>
                </div>

                {{-- <div class="main-navigation fadeIn-element">
                    <div class="navbar-header">
                        <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle
                        navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- menu start -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="https://vanwardintl.com">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('our-firm') }}">Our Firm</a>
                            </li>
                            <li>
                                <a href="https://en.vanwardintl.com/#careers">Careers</a>
                            </li>
                            <li>
                                <a href="https://en.vanwardintl.com/#sustainability">Sustainability</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle disabled-custom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Private Banking <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-close" href="#">Investment Advisory</a></li>
                                    <li><a class="nav-close" href="#">Wealth Planning</a></li>
                                    <li><a class="nav-close" href="#">Philanthropic Advisory</a></li>
                                    <li><a class="nav-close" href="#">Trust Services</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://en.vanwardintl.com/#investmentManagement">Investment Management</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Menu 1 <span class="caret"></span></a>
                                <div class="submenu">
                                    <a href="#">Submenu 1</a>
                                    <a href="#">Submenu 2</a>
                                    <a href="#">Submenu 3</a>
                                </div>
                            </li>
                            <li>
                                <a href="https://en.vanwardintl.com/#contact">Contact Us</a>
                            </li>
                            <li>
                                <a href="https://app.vanwardintl.com/en/accounts/login/">Client Login</a>
                            </li>
                        </ul>
                        <!-- menu end -->
                    </div>
                </div> --}}

                <!-- main navigation end -->
            </div>
            <!-- container end -->
        </nav>
        <!-- navigation end -->
        <!-- home start -->
        <div class="upper-page bg-dark" id="home">
            <!-- hero bg start -->
            <div class="hero-fullscreen">
                <div class="hero-fullscreen-FIX">
                    <div class="hero-bg">
                        <!-- hero slider wrapper start -->
                        <div class="swiper-container-wrapper">
                            <!-- swiper container start -->
                            <div class="swiper-container swiper2">
                                <!-- swiper wrapper start -->
                                <div class="swiper-wrapper">
                                    <!-- swiper slider item start -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-inner">
                                            <!-- swiper slider item IMG start -->
                                            <div class="swiper-slide-inner-bg bg-img-1 overlay overlay-dark">
                                                <!-- HTML5 video URL start -->
                                                <video playsinline autoplay muted loop>
                                                    {{-- <source src="https://www.11-76.com/html5-videos-22/luxex/luxex-3.mp4" type="video/mp4"> --}}
                                                        <source src="{{ asset('stock-market3.mp4') }}" type="video/mp4">
                                                </video>
                                                <!-- HTML5 video URL end -->
                                            </div>
                                            <!-- swiper slider item IMG end -->
                                            <!-- swiper slider item txt start -->
                                            <div class="swiper-slide-inner-txt-2">
                                                <!-- section subtitle start -->

                                                <!-- section subtitle end -->
                                                <!-- divider start -->
                                                <div class="divider-m"></div>
                                                <!-- divider end -->
                                                <!-- section title start -->
                                                {{-- <h1 class="hero-heading hero-heading-home fadeIn-element">
                                                    VANWARD INTERNATIONAL
                                                </h1> --}}
                                                <!-- section title end -->
                                                <!-- divider start -->
                                                <div class="divider-m"></div>
                                                <!-- divider end -->
                                                <!-- button start -->
                                                <div class="more-wraper-center more-wraper-center-home fadeIn-element" >
                                                    <a class="button button-effect" href="https://app.vanwardintl.com/en/applications/create/">
                                                        <div class="more-wraper-inner-home">
                                                            <i class="pulse"></i>
                                                            <div class="more-button-txt-center more-button-txt-center-home" style="position: absolute; z-index: 9;">
                                                                <span>Become a client</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- button end -->
                                            </div>
                                            <!-- swiper slider item txt end -->
                                        </div>
                                    </div>
                                    <!-- swiper slider item end -->
                                </div>
                                <!-- swiper wrapper end -->
                            </div>
                            <!-- swiper container end -->
                        </div>
                        <!-- hero slider wrapper end -->
                    </div>
                </div>
            </div>
            <!-- hero bg end -->
            <!-- scroll indicator start -->
            <div class="scroll-indicator">
                <div class="scroll-indicator-wrapper">
                    <div class="scroll-line fadeIn-element"></div>
                </div>
            </div>
            <!-- scroll indicator end -->
        </div>
        <!-- home end -->


        <!-- about start -->
        <div id="about" class="section-all bg-dark" style="background-color: #1E2445">
            <!-- container start -->
            <div class="container-fluid nopadding nopadding-xs">
                <div class="extra-margin-container">
                    <!-- row start -->
                    <div class="row">
                        <!-- col start -->
                        <div class="col-lg-12">
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                            <!-- line start -->
                            <div class="the-line"></div>
                            <!-- line end -->
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                        </div>
                        <!-- col end -->
                    </div>
                    <!-- row end -->
                    <!-- row start -->
                    <div class="row">
                        <!-- col start -->
                        <div class="col-lg-12">
                            <div class="post-list" style="background-color: #1E2445">
                                <div class="post-list-content-wrapper">
                                    <div class="post-list-wrapper">
                                        <!-- section item start -->
                                        <div class="post-list-item">
                                            <div class="container-custom post-list-item-container">
                                                <div class="row post-list-row">
                                                    <div class="col-lg-4-custom col-md-6-custom offset-lg-1-custom">
                                                        <div class="post-list-content post-list-content-reverse" style="background-color: #ffebcd;">
                                                            <!-- row start -->
                                                            <div class="row">
                                                                <!-- col start -->
                                                                <div class="col-md-12">
                                                                    <!-- divider start -->
                                                                    <div class="divider-l visible-mobile-devices"></div>
                                                                    <!-- divider end -->
                                                                    <!-- section title start -->
                                                                    <h2 class="section-heading">

                                                                    </h2>
                                                                    <!-- section title end -->
                                                                    <!-- divider start -->
                                                                    <div class="divider-m"></div>
                                                                    <!-- divider end -->
                                                                    <!-- section title start -->
                                                                    <h2 class="hero-heading hero-heading-dark">
                                                                        About Us
                                                                    </h2>
                                                                    <!-- section title end -->
                                                                    <!-- divider start -->
                                                                    <div class="divider-l"></div>
                                                                    <!-- divider end -->
                                                                    <!-- section txt start -->
                                                                    <div class="section-txt">
                                                                        <p>
                                                                            At Vanward International, we take a unique approach to investing, providing customised strategies based on the goals of each client and our extensive knowledge of global markets and economies. Through our expert interpretation of multiple data sources, we identify suitable solutions for you, solutions that will strengthen your position.
                                                                        </p>
                                                                    </div>
                                                                    <!-- section txt end -->
                                                                    <!-- divider start -->
                                                                    <div class="divider-l"></div>
                                                                    <!-- divider end -->
                                                                    <!-- section txt start -->
                                                                    <div class="blog-tag blog-tag-rooms"> </div>
                                                                    <!-- divider start -->
                                                                    <div class="divider-s"></div>
                                                                    <!-- divider end -->
                                                                    <p><a class="link-effect" href="#"></a></p>
                                                                    <!-- section txt end -->
                                                                    <!-- divider start -->
                                                                    <div class="divider-l visible-mobile-devices"></div>
                                                                    <!-- divider end -->
                                                                </div>
                                                                <!-- col end -->
                                                            </div>
                                                            <!-- row end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- section img start -->
                                            <div class="post-list-bg post-list-bg-reverse post-list-bg-all about-bg-1"></div>
                                            <!-- section img end -->
                                        </div>
                                        <!-- section item end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col end -->
                    </div>
                    <!-- row end -->
                    <!-- row start -->
                    <div class="row">
                        <!-- col start -->
                        <div class="col-lg-12">
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                            <!-- line start -->
                            <div class="the-line"></div>
                            <!-- line end -->
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                        </div>
                        <!-- col end -->
                    </div>
                    <!-- row end -->
                </div>
            </div>
            <!-- container end -->
        </div>
        <!-- about end -->
        <!-- video testimonials start -->
        <div id="video-testimonials" class="section-all bg-dark" >
            <!-- container start -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">
                    <!-- parallax wrapper start -->
                    <div class="parallax parallax-all">
                        <!-- HTML5 video URL start -->
                        <video playsinline autoplay muted loop>
                            <source src="{{ asset('stock-market6.mp4') }}" type="video/mp4">
                        </video>
                        <!-- HTML5 video URL end -->
                        <!-- parallax overlay start -->
                        <div class="parallax-overlay-video-testimonials"></div>
                        <!-- parallax overlay end -->
                        <!-- parallax content start -->
                        <div class="parallax-content">
                            <!-- line start -->
                            {{-- <div class="the-line the-line-light"></div> --}}
                            <!-- line end -->
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                            <!-- testimonials start -->
                            <div class="owl-carousel owl-carousel-testimonials">
                                <!-- testimonials quote start -->
                                <div class="testimonial testimonial-2">
                                    <div class="inner">
                                        <div class="quote">
                                            <blockquote class="quote-inner">
                                                Build lasting expansion
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials quote end -->
                                <!-- testimonials quote start -->
                                <div class="testimonial testimonial-2">
                                    <div class="inner">
                                        <div class="quote">
                                            <blockquote class="quote-inner">
                                                Collaboration with us
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials quote end -->
                                <!-- testimonials quote start -->
                                <div class="testimonial testimonial-2">
                                    <div class="inner">
                                        <div class="quote">
                                            <blockquote class="quote-inner">
                                                Dependable and responsive service and support
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials quote end -->
                            </div>
                            <!-- testimonials end -->
                        </div>
                        <!-- parallax content end -->
                    </div>
                    <!-- parallax wrapper end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>

        <!-- video testimonials end -->
        <!-- rooms start -->
        <div id="rooms" class="section-all bg-dark" style="background-color: #1E2445">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section title start -->
                        <h2 class="hero-heading hero-heading-dark">
                           Our Services
                        </h2>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- container start -->
            <div class="container-fluid nopadding">
                <!-- carousel start -->
                <div class="owl-carousel owl-carousel-rooms">
                    <!-- halve start -->
                    <div class="halves">
                        <!-- halve IMG start -->
                        <div class="half post-bg-all rooms-bg-1 all-bg-right"></div>
                        <a class="popup-photo" href="{{ asset('private-equity.jpg') }}">
                            <div class="image-caption">Private Equity</div>
                        </a>
                        <!-- halve IMG end -->
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->

                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Private<br>
                                        Equity
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>
                                        We provide our clients with access to global markets, and our team is available to assist you in navigating the vast array of available investment vehicles. Additionally, our personal advisors collaborate closely with clients to determine the most suitable options given their circumstances.
                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="#">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->
                    </div>
                    <!-- halve end -->
                    <!-- halve start -->
                    <div class="halves">
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->

                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Trust<br>
                                        Services
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>
                                        As seasoned trustees and executors, we collaborate with clients and their advisors to administer all types of trusts, from simple living trusts to complex estate planning vehicles propelled by tax considerations. We also provide specialised services for retirement and charitable foundations.
                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="#">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->
                        <!-- halve IMG start -->
                        <div class="half post-bg-all rooms-bg-2 all-bg-left"></div>
                        <a class="popup-photo" href="{{ asset('trust-services.jpg') }}" >
                            <div class="image-caption">Trust Services</div>
                        </a>
                        <!-- halve IMG end -->
                    </div>
                    <!-- halve end -->
                    <!-- halve start -->
                    <div class="halves">
                        <!-- halve IMG start -->
                        <div class="half post-bg-all rooms-bg-3 all-bg-right"></div>
                        <a class="popup-photo" href="{{ asset('hedge-funds.jpg') }}">
                            <div class="image-caption">Hedge Funds</div>
                        </a>
                        <!-- halve IMG end -->
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->

                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Hedge<br>
                                        Funds
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>
                                        With global access to hedge funds, we offer our clients unrivalled opportunities, and our team is here to ensure your success. Our extensive expertise in this field enables us to assist clients in selecting the optimal hedge fund for their portfolios.
                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="#">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->
                    </div>
                    <!-- halve end -->
                    <!-- halve start -->
                    <div class="halves">
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->

                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Real<br>
                                        Estate
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>
                                        Real estate market performance is inextricably linked to local economies, and we leverage our global network to research and analyse economic data to comprehend market direction and gain insights that inform our investment strategies.
                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="#">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->
                        <!-- halve IMG start -->
                        <div class="half post-bg-all rooms-bg-4 all-bg-left"></div>
                        <a class="popup-photo" href="{{ asset('real-estate.jpg') }}">
                            <div class="image-caption">Real Estate</div>
                        </a>
                        <!-- halve IMG end -->
                    </div>
                    <!-- halve end -->
                    <!-- halve start -->
                    <div class="halves">
                        <!-- halve IMG start -->
                        <div class="half post-bg-all rooms-bg-5 all-bg-right"></div>
                        <a class="popup-photo" href="{{ asset('commodities.jpg') }}" >
                            <div class="image-caption">Commodities</div>
                        </a>
                        <!-- halve IMG end -->
                        <!-- halve TXT start -->
                        <div class="half half-color">
                            <!-- row start -->
                            <div class="row post-all-txt">
                                <!-- col start -->
                                <div class="col-md-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        Commodities
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>
                                        We provide our clients with access to a vast selection of hard and soft commodities by leveraging our global reach and networks to offer you the opportunities. With an understanding of our client's position and the true value of commodity options, we aim to discover portfolio-improving solutions.
                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="more-wraper-center">
                                        <a href="#">
                                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                            <div class="more-button-txt-center more-button-txt-center-close">
                                                <span>Details</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- button end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                        <!-- halve TXT end -->
                    </div>
                    <!-- halve end -->
                </div>
                <!-- carousel end -->
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                <!-- owl nav start -->
                <div class="owl-nav owl-nav-custom-rooms"></div>
                <!-- owl nav end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- rooms end -->
        <!-- video testimonials start -->
        <div id="video-testimonials-2" class="section-all">
            <!-- container start -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">
                    <!-- parallax wrapper start -->
                    <div class="parallax parallax-all">
                        <!-- HTML5 video URL start -->
                        <video playsinline autoplay muted loop>
                            <source src="{{ asset('stock-market7.mp4') }}" type="video/mp4">
                        </video>
                        <!-- HTML5 video URL end -->
                        <!-- parallax overlay start -->
                        <div class="parallax-overlay-video-testimonials"></div>
                        <!-- parallax overlay end -->
                        <!-- parallax content start -->
                        <div class="parallax-content">
                            <!-- line start -->
                            <div class="the-line the-line-light"></div>
                            <!-- line end -->
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                            <!-- testimonials start -->
                            <div class="owl-carousel owl-carousel-testimonials">
                                <!-- testimonials quote start -->
                                <div class="testimonial testimonial-2">
                                    <div class="inner">
                                        <div class="quote">
                                            <blockquote class="quote-inner">
                                                To accumulate any wealth, you must invest at a growth rate higher than inflation.
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials quote end -->
                                <!-- testimonials quote start -->
                                <div class="testimonial testimonial-2">
                                    <div class="inner">
                                        <div class="quote">
                                            <blockquote class="quote-inner">
                                                You must start investing as early as possible. Yesterday was better than today, and today is better than tomorrow. Don’t wait for a significant market drop.
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials quote end -->
                                <!-- testimonials quote start -->
                                <div class="testimonial testimonial-2">
                                    <div class="inner">
                                        <div class="quote">
                                            <blockquote class="quote-inner">
                                                Expect the best. Prepare for the worst. Capitalize on what comes.
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials quote end -->
                            </div>
                            <!-- testimonials end -->
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->

                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                            <!-- line start -->
                            <div class="the-line the-line-light"></div>
                            <!-- line end -->
                        </div>
                        <!-- parallax content end -->
                    </div>
                    <!-- parallax wrapper end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- video testimonials end -->

        <!-- contact start -->
        <div id="contact" class="section-all bg-light" style="background-color: #1E2445">
            <!-- container start -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- parallax wrapper start -->
                        <div class="parallax-title">
                            <!-- HTML5 video URL start -->
                            <video playsinline autoplay muted loop>
                                <source src="{{ asset('stock-market5.mp4') }}" type="video/mp4">
                            </video>
                            <!-- HTML5 video URL end -->
                            <!-- page title start -->
                            <div class="parallax-title-content">
                                Vanward<br>
                                International
                            </div>
                            <!-- page title end -->
                        </div>
                        <!-- parallax wrapper end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="post-spacing-3">
                        <!-- col start -->
                        <div class="col-md-4 col-sm-12">
                            <!-- section subtitle start -->
                            <div class="blog-tag">The Address</div>
                            <!-- section subtitle end -->
                            <!-- divider start -->
                            <div class="divider-m"></div>
                            <!-- divider end -->
                            <!-- section TXT start -->
                            <div class="section-txt-2">
                                <p>Unit 1112, The Metropolis Tower, 10 Metroplis Drive, Hung Hom, Hong Kong</p>
                            </div>
                            <!-- section TXT end -->
                            <!-- divider start -->
                            <div class="divider-l visible-mobile-devices"></div>
                            <!-- divider end -->
                        </div>
                        <!-- col end -->
                        <!-- col start -->
                        <div class="col-md-4 col-sm-12">
                            <!-- section subtitle start -->
                            <div class="blog-tag">The Email</div>
                            <!-- section subtitle end -->
                            <!-- divider start -->
                            <div class="divider-m"></div>
                            <!-- divider end -->
                            <!-- section TXT start -->
                            <div class="section-txt-2">
                                <p>
                                    <a class="link-effect" href="mailto:info@vanwardintl.com">info@vanwardintl.com</a>
                                </p>
                            </div>
                            <!-- section TXT end -->
                            <!-- divider start -->
                            <div class="divider-l visible-mobile-devices"></div>
                            <!-- divider end -->
                        </div>
                        <!-- col end -->
                        <!-- col start -->
                        <div class="col-md-4 col-sm-12">
                            <!-- section subtitle start -->
                            <div class="blog-tag">The Phone</div>
                            <!-- section subtitle end -->
                            <!-- divider start -->
                            <div class="divider-m"></div>
                            <!-- divider end -->
                            <!-- section TXT start -->
                            <div class="section-txt-2">
                                <p></p>
                            </div>
                            <!-- section TXT end -->
                        </div>
                        <!-- col end -->
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- container start -->
            <div class="footer" style="margin-top: 40px !important;">
                <div class="container">
                        <p style="font-weight: bold;">
                           Important Information
                        </p>
                        <p>
                            All investing is subject to risk including the possible loss of the money you invest.
                        </p>
                        <p>
                            *Vanward International is owned by its funds, which are owned by Vanward International's fund shareholder clients.
                        </p>

                        <p>Vanward International © 2023</p>
                </div>
            </div>
            <!-- container end -->
        </div>
        <!-- contact end -->
        <!-- to top arrow start -->
        <div class="to-top-arrow">
            <span class="ion-ios-arrow-up"></span>
        </div>
        <!-- to top arrow end -->
        <!-- photoSwipe background start -->
        <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                            "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                            "Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                        "Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- photoSwipe background end -->
        <!-- scripts start -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/luxex.js') }}"></script>
        <!-- scripts end -->

        <script>
            // dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
   // of the mouse, set with a mousemove event listener below
var dots = [],
    mouse = {
      x: 0,
      y: 0
    };

// The Dot object used to scaffold the dots
var Dot = function() {
  this.x = 0;
  this.y = 0;
  this.node = (function(){
    var n = document.createElement("div");
    n.className = "trail";
    document.body.appendChild(n);
    return n;
  }());
};
// The Dot.prototype.draw() method sets the position of
  // the object's <div> node
Dot.prototype.draw = function() {
  this.node.style.left = this.x + "px";
  this.node.style.top = this.y + "px";
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 12; i++) {
  var d = new Dot();
  dots.push(d);
}

// This is the screen redraw function
function draw() {
  // Make sure the mouse position is set everytime
    // draw() is called.
  var x = mouse.x,
      y = mouse.y;

  // This loop is where all the 90s magic happens
  dots.forEach(function(dot, index, dots) {
    var nextDot = dots[index + 1] || dots[0];

    dot.x = x;
    dot.y = y;
    dot.draw();
    x += (nextDot.x - dot.x) * .6;
    y += (nextDot.y - dot.y) * .6;

  });
}

addEventListener("mousemove", function(event) {
  //event.preventDefault();
  mouse.x = event.pageX;
  mouse.y = event.pageY;
});

// animate() calls draw() then recursively calls itself
  // everytime the screen repaints via requestAnimationFrame().
function animate() {
  draw();
  requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();

          </script>
    </body>
</html>
