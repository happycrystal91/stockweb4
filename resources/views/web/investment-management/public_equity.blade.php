@extends('layouts.app')
@section('title', 'Public Equity | Investment Management | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.public equity')
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
                                    @lang('public.public equity 1')
                                    <br><br>
                                    @lang('public.public equity 2')
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
                                <h3 class="item-name"><a href="{{ route('web.investment-management.public-equity.us_large_cap_equity') }}" class="link-effect">@lang('public.US large cap equity')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.public equity 3')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.investment-management.public-equity.global_equity') }}" class="link-effect">@lang('public.global equity')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.public equity 4')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.investment-management.public-equity.us_small_and_mid_cap_equity') }}" class="link-effect">@lang('public.US small & mid-cap equity')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.public equity 5')
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
                            @lang('public.public equity 6')
                            <br>
                            @lang('public.public equity 7')
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
