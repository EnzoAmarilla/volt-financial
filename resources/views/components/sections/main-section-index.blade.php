<section class="container-main-section-index tablet-container">
    <div class="row align-items-center justify-content-{{ $position }}">
        <div class="col-lg-4 col-md-6 col-sm-12 {{ $order }} order-mobile-5">
            <h4 class="title-banner-black-the-volt-home">{{ $banner_titulo1 }}<span class="yellow-text">.</span></h4>
            <p class="text-banner-paragraph-the-volt-home white-space">{{ $banner_titulo2 }}</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-{{ $image_direction }}">
            <img class="border-radius-2px lazyload" data-src="{{ asset($imagen) }}" alt="">
        </div>
    </div>
</section>