@extends('layouts.master')

@section('title') Volt Financial | Volt Financial @endsection

{{-- @section('meta_description')
    <meta property="og:title" content="VOLT: Solar, Batteries & Home Improvement.">
    <meta name="description" content="Explore efficient solar panel energy solutions and cutting-edge energy storage options at Volt Solar Energy. Power your future sustainably.">
@endsection --}}

@section('content')

    <!-- Landing Hero section -->
    <div class="section-fullscreen bg-image bg-p-bottom parallax bg-mobile-landing lazyload" data-bg-src="{{ asset('images/Main/1-landing.avif') }}">
        <div class="bg-effect-black banner-text-flex padding-y-50">
            <h1 class="text-title-tv text-center-md text-center-sm">{{ __("translations.Your path to energy independence") }}<span class="yellow-text">.</span></h1>
            <p class="text-subtitle-tv padding-y-10">{{ __("translations.Solar and energy efficiency for your home") }}</p>
            <button class="button button-md button-outline-grey-2 border-radius-2px margin-top-20 text-inherit" data-toggle="modal" data-target="#modal-form-contact">{{ __("translations.I want to know more") }}</button>
        </div>
    </div>
    <!-- end Landing Hero section -->

    @include('components.sections.hero-text-2', 
    [
        'hero_titulo' => __("translations.Energy 360"),
        'hero_texto' => __("translations.Hero Text Description 3"),
    ])

    {{-- Landing Cards --}}
	<div class="">
		<div class="container">
			<div class="row col-spacing-60 pb-2rem text-center">
				<!-- 1 -->
				<div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="/solar-energy">
                        <div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
                                <img class="w-100 lazyload" data-src="{{ asset('/images/Cards/Solar.avif') }}" alt="">
                                <div class="content mt-3rem flex-content-landing bg-transparent">
                                    <div class="pb-2">
                                        <img data-src="{{ asset('/images/Cards/Icons/Solar.png') }}" alt="" class="lazyload">
                                    </div>
                                    <span class="box-text-landing-img">{{__("translations.Solar Energy")}}</span>
                                </div>
                        </div>
                    </a>
				</div>
				<!-- 2 -->
				<div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="/energy-storage">
                        <div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
                                <img class="w-100 lazyload" data-src="{{ asset('/images/Cards/Batteries.avif') }}" alt="">
                                <div class="content mt-3rem flex-content-landing bg-transparent">
                                    <div class="pb-2">
                                        <img data-src="{{ asset('/images/Cards/Icons/Battery.png') }}" alt="" class="lazyload">
                                    </div>
                                    <span class="box-text-landing-img">{{__("translations.Energy Storage")}}</span>
                                </div>
                        </div>
                    </a>
				</div>
				<!-- 3 -->
				<div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="/roofing">
                        <div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
                                <img class="w-100 lazyload" data-src="{{ asset('/images/Cards/Roof.avif') }}" alt="">
                                <div class="content mt-3rem flex-content-landing bg-transparent">
                                    <div class="pb-4">
                                        <img data-src="{{ asset('/images/Cards/Icons/Roof.png') }}" alt="" class="lazyload">
                                    </div>
                                    <span class="box-text-landing-img">{{__("translations.Roofing")}}</span>
                                </div>
                        </div>
                    </a>
				</div>
			</div><!-- end row -->
			<div class="row col-spacing-60 pb-2rem text-center">
				<!-- 4 -->
				<div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="/ev-chargers">
                        <div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
                                <img class="w-100 lazyload" data-src="{{ asset('/images/Cards/EV.avif') }}" alt="">
                                <div class="content mt-3rem flex-content-landing bg-transparent">
                                    <div class="pb-2">
                                        <img data-src="{{ asset('/images/Cards/Icons/EV.png') }}" alt="" class="lazyload">
                                    </div>
                                    <span class="box-text-landing-img">{{__("translations.EV Chargers 2")}}</span>
                                </div>
                        </div>
                    </a>
				</div>
				<!-- 5 -->
				<div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="/energy-efficiency">
                        <div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
                                <img class="w-100 lazyload" data-src="{{ asset('/images/Cards/EF.avif') }}" alt="">
                                <div class="content mt-3rem flex-content-landing bg-transparent">
                                    <div class="pb-2">
                                        <img data-src="{{ asset('/images/Cards/Icons/EF.png') }}" alt="" class="lazyload">
                                    </div>
                                    <span class="box-text-landing-img">{{__("translations.Energy Efficiency")}}</span>
                                </div>
                        </div>
                    </a>
				</div>
				<!-- 6 -->
				<div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="/ac-heat-pumps">
                        <div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
                                <img class="w-100 lazyload" data-src="{{ asset('/images/Cards/AC.avif') }}" alt="">
                                <div class="content mt-3rem flex-content-landing bg-transparent">
                                    <div class="pb-2">
                                        <img data-src="{{ asset('/images/Cards/Icons/AC.png') }}" alt="" class="lazyload">
                                    </div>
                                    <span class="box-text-landing-img">{{__("translations.AC & Heat Pumps 2")}}</span>
                                </div>
                        </div>
                    </a>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div>
	{{-- End Landing Cards --}}

    @include('components.sections.logos-landing', 
    [
        'logo_1' => 'images/Logos/logo-1.png', 
        'logo_2' => 'images/Logos/logo-2.png',
        'logo_3' => 'images/Logos/logo-3.png',
        'logo_4' => 'images/Logos/logo-4.png',
        'logo_5' => 'images/Logos/logo-5.png',
        'logo_6' => 'images/Logos/logo-6.png',
    ])

    @include('components.sections.hero-title-landing', [
        "title_landing" => __("translations.title-landing"),
    ])

    {{-- Img Banner --}}
    <div class="section-md h-50 bg-img-landing lazyload">
        <div class="bg-img-gradient"></div>
    </div>
    {{-- End Img Banner --}}

    <section class="container-main-section-index">
        <div class="row justify-content-between justify-center-md">
            <div class="col-lg-3 col-md-6 col-sm-12 div-flex-col">
                <h4 class="title-main-section-1">{{ __("translations.banner-title-landing-1") }}</h4>
                <h5 class="text-center font-weight-600 lh-small">{{ __("translations.banner-subt-landing-1") }}</h5>
                <p class="desc-main-section-2">{{ __("translations.banner-text-landing-1") }}</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 div-flex-col">
                <h4 class="title-main-section-1">{{ __("translations.banner-title-landing-2") }}</h4>
                <h5 class="text-center font-weight-600 lh-small">{{ __("translations.banner-subt-landing-2") }}</h5>
                <p class="desc-main-section-2">{{ __("translations.banner-text-landing-2") }}</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 div-flex-col">
                <h4 class="title-main-section-1">{{ __("translations.banner-title-landing-3") }}</h4>
                <h5 class="text-center font-weight-600 lh-small">{{ __("translations.banner-subt-landing-3") }}</h5>
                <p class="desc-main-section-2">{{ __("translations.banner-text-landing-3") }}</p>
            </div>
        </div>
    </section><!-- end container -->

    @include('components.sections.banner-footer-1', 
    [
        'imagen' => 'images/Footer/banner-2/1-solar.avif', 
        'titulo' => __("translations.banner-footer-title-solar"), 
        'subtitulo' => __("translations.banner-footer-text-solar"), 
        'btn_texto' => __("translations.banner-footer-button-solar"),
        'form' => true,
    ])

    {{-- @include('components.sections.swiper', [
        'title_landing2' => __("translations.title-landing-2"),
        'images_sliders' => $images_sliders,
    ])

    @include('components.sections.swiper-mobile', [
        'title_landing2' => __("translations.title-landing-2"),
        'images_sliders_mobile' => $images_sliders_mobile,
    ]) --}}

@endsection

@section('script')
    @if(session('status'))
    <script>
        $(document).ready(function () {
            $('#modal-form-result').modal('show');
        });
    </script>
    @endif
@endsection