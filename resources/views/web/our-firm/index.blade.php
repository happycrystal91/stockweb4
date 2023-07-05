@extends('layouts.app')
@section('title', 'Our Firm | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.our firm')
])
@endcomponent

<div id="rooms" class="section-all bg-dark">
    <div class="container-fluid nopadding">
        <div class="owl-carousel owl-carousel-rooms">
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/the-partnership.jpg'),
                'url' => '#',
                'title' => __('public.the partnership'),
                'caption' => __('public.our firm caption 1')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/sustainability.jpg'),
                'url' => '#',
                'title' => __('public.sustainability'),
                'caption' => __('public.our firm caption 2')
            ])
            @endcomponent
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/philanthropy.jpg'),
                'url' => '#',
                'title' => __('public.philanthropy'),
                'caption' => __('public.our firm caption 3') //not yet exist
            ])
            @endcomponent
        </div>
        @include('web.partials._halves-divider')
    </div>
</div>

@endsection
