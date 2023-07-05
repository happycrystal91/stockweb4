@extends('layouts.app')
@section('title', 'Investment Management | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.investment management')
])
@endcomponent

<div id="rooms" class="section-all bg-dark">
    <div class="container-fluid nopadding">
        <div class="owl-carousel owl-carousel-rooms">
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/public-equity.jpeg'),
                'url' => '#',
                'title' => __('public.public equity'),
                'caption' => __('public.investment management caption 1')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/fixed-income.jpeg'),
                'url' => '#',
                'title' => __('public.fixed income'),
                'caption' => __('public.investment management caption 2')
            ])
            @endcomponent
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/open-account.jpeg'),
                'url' => '#',
                'title' => __('public.open account'),
                'caption' => __('public.investment management caption 3') //not yet exist
            ])
            @endcomponent
        </div>
        @include('web.partials._halves-divider')
    </div>
</div>

@endsection
