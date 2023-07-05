@extends('layouts.app')
@section('title', 'Private Banking | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.private banking')
])
@endcomponent

<div id="rooms" class="section-all bg-dark">
    <div class="container-fluid nopadding">
        <div class="owl-carousel owl-carousel-rooms">
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/private-wealth-management.jpeg'),
                'url' => route('web.private-banking.private_wealth_management'),
                'title' => __('public.private wealth management'),
                'caption' => __('public.private banking caption 1')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/corporate-advisory-and-banking.jpeg'),
                'url' => route('web.private-banking.corporate_advisory_and_banking'),
                'title' => __('public.corporate advisory & banking'),
                'caption' => __('public.private banking caption 2')
            ])
            @endcomponent
            @component('components.halves-pic-up', [
                'imgurl' => url('resource/private-equity.jpeg'),
                'url' => route('web.private-banking.private_equity'),
                'title' => __('public.private equity'),
                'caption' => __('public.private banking caption 3')
            ])
            @endcomponent
        </div>
        @include('web.partials._halves-divider')
    </div>
</div>

@endsection
