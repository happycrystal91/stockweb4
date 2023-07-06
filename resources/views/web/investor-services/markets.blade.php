@extends('layouts.app')
@section('title', 'Markets | Investor Services | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.markets')
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
                                    @lang('public.markets 1')
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
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.foreign exchange')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.markets 2')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.active fx execution')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.markets 3')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.infofx')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.markets 4')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.currency hedging')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.markets 5')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.securities lending')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.markets 6')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.market intelligence')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.markets 7')
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
