@extends('layouts.app')
@section('title', 'Our Firm | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.our firm')
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
                            <div class="para">
                                <p class="paragraph">
                                    @lang('public.our firm 1')
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

<div id="rooms" class="section-all bg-dark">
    <div class="container-fluid nopadding">
        <div class="owl-carousel owl-carousel-rooms">
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/the-partnership.jpg'),
                'url' => route('web.our-firm.the_partnership'),
                'title' => __('public.the partnership'),
                'caption' => __('public.our firm caption 1')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/sustainability.jpg'),
                'url' => route('web.our-firm.sustainability'),
                'title' => __('public.sustainability'),
                'caption' => __('public.our firm caption 2')
            ])
            @endcomponent
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/philanthropy.jpg'),
                'url' => route('web.our-firm.philanthropy'),
                'title' => __('public.philanthropy'),
                'caption' => __('public.our firm caption 3') //not yet exist
            ])
            @endcomponent
        </div>
        @include('web.partials._halves-divider')
    </div>
</div>

@endsection
