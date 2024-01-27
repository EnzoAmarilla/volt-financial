<div class="section-sm d-none-sm swiper-title-flex">
  <h2 class="title-hero-black w-65">{{ $title_landing2 }}</h2>
    <div class="swiper mySwiper" id="mySwiper">
        <div class="swiper-wrapper">
          @foreach ($images_sliders as $image_slider)
            <div class="swiper-slide">
              <img class="box-shadow-img border-radius-2px lazyload" data-src="data:image/gif;base64,{{ $image_slider->url }}" />
            </div>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
  </div>