@extends('layouts.app')
@section('title', 'Investor Services | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.investor services')
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
                                    @lang('public.investor services 1')
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
                'imgurl' => url('/resource/custody-and-fund-services.jpeg'),
                'url' => route('web.investor-services.custody_and_fund_services'),
                'title' => __('public.custody & fund services'),
                'caption' => __('public.investor services caption 1')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/specialist-expertise.jpeg'),
                'url' => route('web.investor-services.specialist_expertise'),
                'title' => __('public.specialist expertise'),
                'caption' => __('public.investor services caption 2')
            ])
            @endcomponent
            @component('components.halves-pic-up', [
                'imgurl' => url('/resource/markets.jpeg'),
                'url' => route('web.investor-services.markets'),
                'title' => __('public.markets'),
                'caption' => __('public.investor services caption 3')
            ])
            @endcomponent
            @component('components.halves-pic-down', [
                'imgurl' => url('/resource/investment-operations-and-technology-solutions.jpeg'),
                'url' => route('web.investor-services.investment_operations_and_technology_solutions'),
                'title' => __('public.investment operations & technology'),
                'caption' => __('public.investor services caption 2')
            ])
            @endcomponent
        </div>
        @include('web.partials._halves-divider')
    </div>
</div>

@endsection
