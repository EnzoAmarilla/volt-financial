<div class="section-fullscreen bg-image logos-flex-section lazyload" data-bg-src="{{ asset($imagen) }}">
    <div class="logos-container">
        @foreach ($logos as $logo)
            <img data-src="{{ asset($logo)}}" alt="" class="lazyload">
        @endforeach
    </div>
    <div class="logos-container-mobile">
        @foreach ($logos_mobile as $logo)
            <img class="img-mobile-hero-img lazyload" data-src="{{ asset($logo)}}" alt="">
        @endforeach
    </div>
</div>