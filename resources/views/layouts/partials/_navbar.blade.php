<nav class="navbar navbar-fixed-top navbar-bg-switch">
    <!-- container start -->
    <div class="container-fluid nopadding">
        <div class="navbar-header fadeIn-element">
            <!-- logo start -->
            <div class="logo" id="logo">
                <a class="navbar-brand -link" href="#">
                    <!-- logo light start -->
                    <img alt="Logo" class="logo-light" src="{{ asset('logo-2.png') }}"
                        style="width:200px; margin-top: -25px;">
                    <!-- logo dark start -->
                    <img alt="Logo" class="logo-dark" src="{{ asset('logo-2.png') }}"
                        style="width:200px; margin-top: 25px;">
                </a>
            </div>
            <!-- main navigation start -->
            <div class="wrapper">
                <input type="radio" name="slider" id="menu-btn">
                <input type="radio" name="slider" id="close-btn">
                <ul class="nav-links">
                    <!-- close btn for mobile view -->
                    <img alt="Logo" class="logo-light" id="logo-mobile" src="{{ asset('logo-2.png') }}">
                    <label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
                    <li><a class="main-menu" href="{{ url('/home') }}">Home</a></li>
                    <li>
                        <a class="main-menu desktop-item" href="#">Our Firm <span class="caret"></span></a>
                        <input type="checkbox" id="showDrop1">
                        <label for="showDrop1" class="mobile-item">Our Firm <span class="caret"></span></label>
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
                        <label for="showDrop2" class="mobile-item">Careers <span class="caret"></span></label>
                        <ul class="drop-menu">
                            <li><a href="#">What We Look For</a></li>
                            <li><a href="#">Total Rewards</a></li>
                            <li><a href="#">Life At Vanward</a></li>
                            <li><a href="#">Cares</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu desktop-item" href="{{ route('web.private-banking.index') }}">Private Banking <span
                                class="caret"></span></a>
                        <input type="checkbox" id="showMega1">
                        <label for="showMega1" class="mobile-item">Private Banking <span class="caret"></span></label>
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
                        <a class="main-menu desktop-item" href="#">Investment Management <span
                                class="caret"></span></a>
                        <input type="checkbox" id="showMega2">
                        <label for="showMega2" class="mobile-item">Investment Management <span
                                class="caret"></span></label>
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
                        <a class="main-menu desktop-item" href="#">Investor Services <span
                                class="caret"></span></a>
                        <input type="checkbox" id="showMega3">
                        <label for="showMega3" class="mobile-item">Investor Services <span
                                class="caret"></span></label>
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
