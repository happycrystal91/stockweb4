@extends('layouts.app')
@section('title', 'Fixed Income | Investment Management | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.fixed income')
])
@endcomponent

<!-- Paragraph/Description Section -->
<div class="post-wrapper">
    <div class="lower-page lower-page-post">
        <div class="post-content">
            <div class="container">
                <div class="extra-margin-container extra-margin-container-post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="divider-l"></div>
                            <div>
                                <p class="paragraph">
                                    @lang('public.fixed income 1')
                                    <br><br>
                                    @lang('public.fixed income 2')
                                    <br><br>
                                    @lang('public.fixed income 3')
                                    <br><br>
                                    @lang('public.investment management 8') <a class="link-effect" href="">@lang('public.investment management 9')</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="divider-l"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="menu" class="section-all bg-dark">
    <div class="container">
        <div class="extra-margin-container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="divider-m"></div> --}}
                    {{-- <div class="owl-nav owl-nav-custom-menu"></div> --}}
                    {{-- <div class="divider-l"></div> --}}
                    <div class="menu menu-visible" id="menu-1">
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.investment-management.fixed-income.taxable_fixed_income_strategies') }}" class="link-effect">@lang('public.taxable fixed income strategies')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.fixed income 4')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.investment-management.fixed-income.tax_exempt_fixed_income_strategy') }}" class="link-effect">@lang('public.tax-exempt fixed income strategy')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.fixed income 5')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.investment-management.fixed-income.us_tips_strategy') }}" class="link-effect">@lang('public.US TIPS strategy')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.fixed income 6')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider-l"></div>
                    <div>
                        <p class="paragraph italic">
                            @lang('public.fixed income 7')
                        </p>
                        <br>
                        <p class="paragraph justify-content-around font-bold">
                            <span>@lang('public.invest reminder 1')</span>
                            <span>@lang('public.invest reminder 2')</span>
                            <span>@lang('public.invest reminder 3')</span>
                        </p>
                    </div>
                    <div class="divider-l"></div>
                    <div class="the-line"></div>
                    <div class="divider-l"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
