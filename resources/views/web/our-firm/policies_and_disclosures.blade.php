@extends('layouts.app')
@section('title', 'Policies & Disclosures | Our Firm | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.policies & disclosures')
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
                                    @lang('public.policies & disclosures 1')
                                    <br><br>
                                    @lang('public.please') <a href="" class="link-effect">@lang('public.contact us')</a> @lang('public.with questions')
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
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.important statements & disclosures')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.USA patriot act')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.legal')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.privacy policy')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.new account policy')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="#" class="link-effect">@lang('public.cookie policy')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
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
