<section class="container-main-section-index">
    <div class="row align-items-center justify-content-around">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <h4 class="title-banner-black-2 text-justify">{{ $banner_titulo1 }}</h4>
            <p class="text-banner-paragraph text-justify white-space">{{ $banner_titulo2 }}</p>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-{{ $image_direction }} order--1">
            <img data-src="{{ asset($imagen) }}" alt="" class="lazyload">
        </div>
    </div>
</section>