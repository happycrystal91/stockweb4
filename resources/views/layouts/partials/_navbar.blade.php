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
                    <li><a class="main-menu" href="{{ url('/home') }}">@lang('public.home')</a></li>
                    <li>
                        <a class="main-menu desktop-item" href="{{ route('web.our-firm.index') }}">@lang('public.our firm') <span class="caret"></span></a>
                        <input type="checkbox" id="showDrop1">
                        <label for="showDrop1" class="mobile-item">@lang('public.our firm') <span class="caret"></span></label>
                        <ul class="drop-menu">
                            <li><a href="{{ route('web.our-firm.the_partnership') }}">The Partnership</a></li>
                            <li><a href="{{ route('web.our-firm.our_mission_and_profile') }}">Our Mission & Profile</a></li>
                            <li><a href="{{ route('web.our-firm.sustainability') }}">Sustainability</a></li>
                            <li><a href="{{ route('web.our-firm.philanthropy') }}">Philanthropy</a></li>
                            <li><a href="{{ route('web.our-firm.policies_and_disclosures') }}">Policies & Disclosures</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu desktop-item" href="{{ route('web.careers.index') }}">@lang('public.careers') <span class="caret"></span></a>
                        <input type="checkbox" id="showDrop2">
                        <label for="showDrop2" class="mobile-item">@lang('public.careers') <span class="caret"></span></label>
                        <ul class="drop-menu">
                            <li><a href="{{ route('web.careers.what_we_look_for') }}">What We Look For</a></li>
                            <li><a href="{{ route('web.careers.total_rewards') }}">Total Rewards</a></li>
                            <li><a href="{{ route('web.careers.life_here') }}">Life At Vanward</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="main-menu desktop-item" href="{{ route('web.private-banking.index') }}">@lang('public.private banking') <span
                                class="caret"></span></a>
                        <input type="checkbox" id="showMega1">
                        <label for="showMega1" class="mobile-item">@lang('public.private banking') <span class="caret"></span></label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <a class="header" href="{{ route('web.private-banking.private_wealth_management') }}">@lang('public.private wealth management')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.private-banking.private-wealth-management.investment_advisory') }}">Investment Advisory</a></li>
                                        <li><a href="{{ route('web.private-banking.private-wealth-management.wealth_planning') }}">Wealth Planning</a></li>
                                        <li><a href="{{ route('web.private-banking.private-wealth-management.philanthropic_advisory') }}">Philanthropic Advisory</a></li>
                                        <li><a href="{{ route('web.private-banking.private-wealth-management.trust_services') }}">Trust Services</a></li>
                                        <li><a href="{{ route('web.private-banking.private-wealth-management.private_client_landing') }}">Private Client Lending</a></li>
                                        <li><a href="{{ route('web.private-banking.private-wealth-management.center_for_women_and_wealth') }}">Center For Women & Wealth</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <a class="header" href="{{ route('web.private-banking.corporate_advisory_and_banking') }}">@lang('public.corporate advisory')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_advisory') }}">Corporate Advisory</a></li>
                                        <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_banking') }}">Corporate Banking</a></li>
                                        <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.center_for_family_business') }}">Center For Family Business</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <a class="header" href="{{ route('web.private-banking.private_equity') }}">@lang('public.private equity')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.private-banking.private-equity.about_vanward') }}">About Vanward</a></li>
                                        <li><a href="{{ route('web.private-banking.private-equity.investment_profile') }}">Investment Profile</a></li>
                                        <li><a href="{{ route('web.private-banking.private-equity.investment_strategy_and_transaction_types') }}">Investment Strategy & Transaction Types</a></li>
                                        <li><a href="{{ route('web.private-banking.private-equity.select_portfolio_companies') }}">Select Portfolio Companies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="main-menu desktop-item" href="{{ route('web.investment-management.index') }}">@lang('public.investment management') <span
                                class="caret"></span></a>
                        <input type="checkbox" id="showMega2">
                        <label for="showMega2" class="mobile-item">@lang('public.investment management') <span
                                class="caret"></span></label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <a class="header" href="{{ route('web.investment-management.public_equity') }}">@lang('public.public equity')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.investment-management.public-equity.us_large_cap_equity') }}">US Large Cap Equity</a></li>
                                        <li><a href="{{ route('web.investment-management.public-equity.global_equity') }}">Global Equity</a></li>
                                        <li><a href="{{ route('web.investment-management.public-equity.us_small_and_mid_cap_equity') }}">US Small & Mid-Cap Equity</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <a class="header" href="{{ route('web.investment-management.fixed_income') }}">@lang('public.fixed income')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.investment-management.fixed-income.taxable_fixed_income_strategies') }}">Taxable Fixed Income Strategies</a></li>
                                        <li><a href="{{ route('web.investment-management.fixed-income.tax_exempt_fixed_income_strategy') }}">Tax-Exempt Fixed Income Strategy</a></li>
                                        <li><a href="{{ route('web.investment-management.fixed-income.us_tips_strategy') }}">US TIPS Strategy</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <a class="header" href="{{ route('web.investment-management.open_account') }}">@lang('public.open account')</a>
                                    <ul class="mega-links">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="main-menu desktop-item" href="{{ route('web.investor-services.index') }}">@lang('public.investor services') <span
                                class="caret"></span></a>
                        <input type="checkbox" id="showMega3">
                        <label for="showMega3" class="mobile-item">@lang('public.investor services') <span
                                class="caret"></span></label>
                        <div class="mega-box">
                            <div class="content">
                                <div class="row">
                                    <a class="header" href="{{ route('web.investor-services.custody_and_fund_services') }}">@lang('public.custody & fund services')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.custody') }}">Custody</a></li>
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.depositary_and_trustee') }}">Depositary & Trustee</a></li>
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_accounting') }}">Fund Accounting</a></li>
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_administration') }}">Fund Administration</a></li>
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.transfer_agency') }}">Transfer Agency</a></li>
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.global_tax') }}">Global Tax</a></li>
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.collateral_management') }}">Collateral Management</a></li>
                                        <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_order_and_custody') }}">Fund Order & Custody</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <a class="header" href="{{ route('web.investor-services.specialist_expertise') }}">@lang('public.specialist expertise')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.cross_border_funds') }}">Cross-Border Funds</a></li>
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.us_funds') }}">US Funds</a></li>
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.consultants_and_advisors') }}">Consultants & Advisors</a></li>
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.distribution_intelligence') }}">Distribution Intelligence</a></li>
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.alternative_funds') }}">Alternative Funds</a></li>
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.exchange_traded_funds') }}">Exchange Traded Funds</a></li>
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.insurance') }}">Insurance</a></li>
                                        <li><a href="{{ route('web.investor-services.specialist-expertise.regulatory_intelligence') }}">Regulatory Intelligence</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <a class="header" href="{{ route('web.investor-services.markets') }}">@lang('public.markets')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.investor-services.markets.foreign_exchange') }}">Foreign Exchange</a></li>
                                        <li><a href="{{ route('web.investor-services.markets.active_fx_execution') }}">Active FX Execution</a></li>
                                        <li><a href="{{ route('web.investor-services.markets.infofx') }}">InfoFX</a></li>
                                        <li><a href="{{ route('web.investor-services.markets.currency_hedging') }}">Currency Hedging</a></li>
                                        <li><a href="{{ route('web.investor-services.markets.securities_lending') }}">Securities Lending</a></li>
                                        <li><a href="{{ route('web.investor-services.markets.market_intelligence') }}">Market Intelligence</a></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <a class="header" href="{{ route('web.investor-services.investment_operations_and_technology_solutions') }}">@lang('public.investment operations & technology')</a>
                                    <ul class="mega-links">
                                        <li><a href="{{ route('web.investor-services.investment-operations-and-technology-solutions.technology_services') }}">Technology Services</a></li>
                                        <li><a href="{{ route('web.investor-services.investment-operations-and-technology-solutions.middle_office_outsourcing') }}">Middle Office Outsourcing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="main-menu" href="#">Contact Us</a></li>
                    <li><a class="main-menu" href="https://app.vanwardintl.com/en/accounts/login/">@lang('public.client login')</a></li>
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
