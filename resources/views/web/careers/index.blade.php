@extends('layouts.app')
@section('title', 'Careers | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.careers')
])
@endcomponent

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
