@extends('layouts.app')
@section('title', 'Careers | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.careers')
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
                                    @lang('public.careers 1')
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
                'imgurl' => url('/resource/what-we-look-for.jpeg'),
                'url' => '#',
                'title' => __('public.what we look for'),
                'caption' => __('public.careers caption 1')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/rewarding-you.jpg'),
                'url' => '#',
                'title' => __('public.rewarding you'),
                'caption' => __('public.careers caption 2')
            ])
            @endcomponent
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/rewarding-you.jpg'),
                'url' => '#',
                'title' => __('public.life at vanward'),
                'caption' => __('public.careers caption 3') //not yet exist
            ])
            @endcomponent
        </div>
        @include('web.partials._halves-divider')
    </div>
</div>

@endsection
