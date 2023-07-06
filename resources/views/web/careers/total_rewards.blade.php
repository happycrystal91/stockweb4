@extends('layouts.app')
@section('title', 'Total Rewards | Careers | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.total rewards')
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
                                    @lang('public.total rewards 1')
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
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.benefits, wellness and compensation')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 2')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.career management')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 3')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.ongoing learning')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 4')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.mobility')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 5')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider-l"></div>
                    <div class="the-line"></div>
                    <div class="divider-l"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
