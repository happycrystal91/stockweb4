@extends('layouts.app')
@section('title', 'Investor Services | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.investor services')
])
@endcomponent

<div id="rooms" class="section-all bg-dark">
    <div class="container-fluid nopadding">
        <div class="owl-carousel owl-carousel-rooms">
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/custody-and-fund-services.jpeg'),
                'url' => '#',
                'title' => __('public.custody & fund services'),
                'caption' => __('public.investor services caption 1')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/specialist-expertise.jpeg'),
                'url' => '#',
                'title' => __('public.specialist expertise'),
                'caption' => __('public.investor services caption 2')
            ])
            @endcomponent
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/markets.jpeg'),
                'url' => '#',
                'title' => __('public.markets'),
                'caption' => __('public.investor services caption 3')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/investment-operations-and-technology-solutions.jpeg'),
                'url' => '#',
                'title' => __('public.investment operations & technology'),
                'caption' => __('public.investor services caption 2')
            ])
            @endcomponent
        </div>
        @include('web.partials._halves-divider')
    </div>
</div>

@endsection
