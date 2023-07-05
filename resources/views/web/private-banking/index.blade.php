@extends('layouts.app')
@section('title', 'Private Banking | Vanward International')

@section('content')

@component('components.title1', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.private banking')
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
                                    {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <a class="link-effect" href="#">magna aliqua</a>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id <a class="link-effect" href="#">est laborum</a>. --}}
                                    @lang('public.private banking 1')
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
