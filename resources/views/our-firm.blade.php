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
                </div>
                <!-- main navigation start -->
                <div class="main-navigation fadeIn-element">
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
                                    <li><a class="nav-close" href="restaurant.html">Restaurant</a></li>
                                    <li><a class="nav-close" href="spa.html">Spa Center</a></li>
                                    <li><a class="nav-close" href="fitness.html">Fitness Center</a></li>
                                    <li><a class="nav-close" href="pool.html">Indoor Pool</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://en.vanwardintl.com/#investmentManagement">Investment Management</a>
                            </li>
                            <li>
                                <a href="https://en.vanwardintl.com/#investorServices">Investor Services</a>
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
                </div>
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
                                            <div class="swiper-slide-inner-bg about-bg-1 overlay overlay-dark">
                                            </div>
                                            <!-- swiper slider item IMG end -->
                                            <!-- swiper slider item txt start -->
                                            <div class="swiper-slide-inner-txt-2">
                                                <!-- divider start -->
                                                <div class="divider-m"></div>
                                                <!-- divider end -->
                                                <!-- section title start -->
                                                <h1 class="hero-heading hero-heading-home fadeIn-element">
                                                    Our Firm
                                                </h1>
                                                <!-- section title end -->
                                                <!-- divider start -->
                                                <div class="divider-m"></div>
                                                <!-- divider end -->

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
       <div class="section-all bg-dark"  style="background-color: #1E2445;">
            <div class="col-lg-12" style="padding-top: 30px; padding-bottom:30px;">
                <p style="color:#fff;">
                    Vanward International ("Vanward") is an independently owned and operated financial services firm. Our focus is on serving highly discerning individuals and institutions, offering specialized expertise in Private Banking, Investment Management, and Investor Services.
                </p>
                <br>
                <p style="color:#fff;">
                    As we are not influenced by external shareholders, our interests are completely aligned with those of our clients. Our success is derived from the success of our clients. We prioritize a personalized approach to conducting business, placing emphasis on prudent risk management and always keeping our clients' reputation and best interests at the forefront of all our actions.
                </p>
            </div>

       </div>

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
                                                                        The Partnership
                                                                    </h2>
                                                                    <!-- section title end -->
                                                                    <!-- divider start -->
                                                                    <div class="divider-l"></div>
                                                                    <!-- divider end -->
                                                                    <!-- section txt start -->
                                                                    <div class="section-txt">
                                                                        <p>
                                                                            Our esteemed global leadership team
                                                                        </p>
                                                                        <a href="" class="btn btn-primary">Read More</a>
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



        <!-- contact start -->
        <div id="contact" class="section-all bg-light" style="background-color: #1E2445">
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
                                <p>ex Inc. Touchdown Dr 1176</p>
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
                                <p>+123 456 7890</p>
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
