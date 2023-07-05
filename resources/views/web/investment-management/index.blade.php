@extends('layouts.app')
@section('title', 'Investment Management | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.investment management')
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
                                    @lang('public.investment management 1')
                                    {{-- <ul>Our investment principles:
                                        <li>concentrate on asset preservation</li>
                                        <li>Value-based strategy</li>
                                        <li>bottom-up primary research</li>
                                        <li>view of the long haul</li>
                                        <li>discipline and tolerance</li>
                                    </ul> --}}

                                    Our investment principles:<br>
                                    • concentrate on asset preservation<br>
                                    • Value-based strategy<br>
                                    • bottom-up primary research<br>
                                    • view of the long haul<br>
                                    • discipline and tolerance
                                    <br><br>
                                    Learn how our bottom-up investment strategy incorporates <a class="link-effect" href="">environmental, social and governance (ESG) considerations</a>.
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
