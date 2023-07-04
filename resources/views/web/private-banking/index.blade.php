@extends('layouts.app')
@section('title', 'Private Banking | Vanward International')

@section('content')

<div class="upper-page bg-dark" id="home">
    <div class="hero-fullscreen">
        <div class="hero-fullscreen-FIX">
            <div class="hero-bg">
                <div class="swiper-container-wrapper">
                    <div class="swiper-container swiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-inner">
                                    <div class="swiper-slide-inner-bg about-bg-1 overlay overlay-dark">
                                    </div>
                                    <div class="swiper-slide-inner-txt-2">
                                        <div class="divider-m"></div>
                                        <h1 class="hero-heading hero-heading-home fadeIn-element">
                                            @lang('public.private banking')
                                        </h1>
                                        <div class="divider-m"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="scroll-indicator-wrapper">
            <div class="scroll-line fadeIn-element"></div>
        </div>
    </div>
</div>


<div id="rooms" class="section-all bg-dark" style="background-color: #1E2445; padding:30px">

    <div class="container-fluid nopadding">
        <div class="owl-carousel owl-carousel-rooms">
            <div class="halves">
                <div class="half post-bg-all rooms-bg-1 all-bg-right"></div>
                <a class="popup-photo" href="{{ asset('private-equity.jpg') }}">
                    <div class="image-caption">@lang('public.private banking heading 1')</div>
                </a>
                <div class="half half-color">
                    <div class="row post-all-txt">
                        <div class="col-md-12">
                            <div class="divider-l"></div>
                            <div class="divider-m"></div>
                            <h2>
                                @lang('public.private banking heading 1')
                            </h2>
                            <div class="divider-l"></div>
                            <p>
                                @lang('public.private banking caption 1')
                            </p>
                            <div class="divider-l"></div>
                            <div class="more-wraper-center">
                                <a href="#">
                                    <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                    <div class="more-button-txt-center more-button-txt-center-close">
                                        <a href=""><span>Details</span></a>
                                    </div>
                                </a>
                            </div>
                            <div class="divider-l"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="halves">
                <div class="half half-color">
                    <div class="row post-all-txt">
                        <div class="col-md-12">
                            <div class="divider-l"></div>
                            <div class="divider-m"></div>
                            <h2>
                                @lang('public.private banking heading 2')
                            </h2>
                            <div class="divider-l"></div>
                            <p>
                                @lang('public.private banking caption 2')
                            </p>
                            <div class="divider-l"></div>
                            <div class="more-wraper-center">
                                <a href="#">
                                    <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                    <div class="more-button-txt-center more-button-txt-center-close">
                                        <a href=""><span>Details</span></a>
                                    </div>
                                </a>
                            </div>
                            <div class="divider-l"></div>
                        </div>
                    </div>
                </div>
                <div class="half post-bg-all rooms-bg-2 all-bg-left"></div>
                <a class="popup-photo" href="{{ asset('trust-services.jpg') }}" >
                    <div class="image-caption">@lang('public.private banking heading 2')</div>
                </a>
            </div>
            <div class="halves">
                <div class="half post-bg-all rooms-bg-3 all-bg-right"></div>
                <a class="popup-photo" href="{{ asset('hedge-funds.jpg') }}">
                    <div class="image-caption">@lang('public.private banking heading 3')</div>
                </a>
                <div class="half half-color">
                    <div class="row post-all-txt">
                        <div class="col-md-12">
                            <div class="divider-l"></div>
                            <div class="divider-m"></div>
                            <h2>
                                @lang('public.private banking heading 3')
                            </h2>
                            <div class="divider-l"></div>
                            <p>
                                @lang('public.private banking caption 3')
                            </p>
                            <div class="divider-l"></div>
                            <div class="more-wraper-center">
                                <a href="#">
                                    <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                                    <div class="more-button-txt-center more-button-txt-center-close">
                                        <a href=""><span>Details</span></a>
                                    </div>
                                </a>
                            </div>
                            <div class="divider-l"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-l"></div>
        <div class="owl-nav owl-nav-custom-rooms"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="divider-l"></div>
                <div class="the-line"></div>
                <div class="divider-l"></div>
            </div>
        </div>
    </div>
</div>

@endsection
