<div class="halves">
    <div class="half post-bg-all all-bg-right" style="background-image: url('{{ $imgurl }}');"></div>
    <a class="" href="{{ $url }}">
        <div class="image-caption">{{ $title }}</div>
    </a>
    <div class="half half-color">
        <div class="row post-all-txt">
            <div class="col-md-12">
                <div class="divider-l"></div>
                <div class="divider-m"></div>
                <h2>
                    {{ $title }}
                </h2>
                <div class="divider-l"></div>
                <p>
                    {{ $caption }}
                </p>
                <div class="divider-l"></div>
                <div class="more-wraper-center">
                    <a href="{{ $url }}">
                        <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle"></div>
                        <div class="more-button-txt-center more-button-txt-center-close">
                            <a href="{{ $url }}"><span>@lang('public.details')</span></a>
                        </div>
                    </a>
                </div>
                <div class="divider-l"></div>
            </div>
        </div>
    </div>
</div>
