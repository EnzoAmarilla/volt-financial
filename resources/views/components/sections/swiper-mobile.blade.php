<div class="section-sm d-none-md d-none-lg">
  <h4 class="title-hero-black">{{ $title_landing2 }}</h4>
    <div class="swiper mySwiperMobile">
      <div class="swiper-wrapper">
        @foreach ($images_sliders_mobile as $image_slider)
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