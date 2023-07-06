@extends('layouts.app')
@section('title', 'Investment Advisory | Private Banking | Vanward International')

@section('content')

<div class="post-wrapper">
    <div class="lower-page lower-page-post">
        <div class="post-content">
            <div class="container">
                <div class="extra-margin-container extra-margin-container-post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="divider-l"></div>
                            {{-- <div class="the-line"></div> --}}
                            <div class="divider-l"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="paragraph">
                                {{-- <div class="blog-tag">October 1, 2022</div> --}}
                                <div class="divider-m"></div>
                                <h2>
                                    @lang('public.center for women & wealth')
                                </h2>
                                <div class="divider-l"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-quote">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="divider-l"></div>
                            <p class="paragraph">
                                @lang('public.center for women and wealth caption 1')
                                <br><br>
                                @lang('public.center for women and wealth caption 2')
                                <br><br>
                                @lang('public.center for women and wealth caption 3')
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="divider-l"></div>
                            <div class="the-line"></div>
                            <div class="divider-l"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
