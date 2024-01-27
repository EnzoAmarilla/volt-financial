@extends('layouts.master')
@section('title') Solar Roofing Panels for Cleaner Energy | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Discover the benefits of our solar roofing solutions. Enhance your home's energy efficiency and generate clean and sustainable power.">
@endsection
@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1-roofing.avif',
		'class_image_mobile' => 'bg-mobile-roofing',
		'titulo' => __("translations.Energy Solutions"), 
		'subtitulo' => __("translations.Roofing"),
	])

	@include('components.sections.hero-text', 
	[
		'hero_titulo' => __("translations.hero-title-roofing"), 
		'hero_texto' => __("translations.hero-text-roofing")
	])

	@include('components.sections.hero-lead', 
	[
		'imagen' => 'images/Hero/Lead/1-roofing.avif',
		'imagen_sm' => 'images/Hero/Lead/1-roofing.avif',
		'hero_lead_titulo' => __("translations.hero-lead-title-roofing"), 
		'hero_lead_items' => 
		[
			__("translations.hero-lead-item-roofing-1"),
			__("translations.hero-lead-item-roofing-2"),
			__("translations.hero-lead-item-roofing-3"),
			__("translations.hero-lead-item-roofing-4"),
			__("translations.hero-lead-item-roofing-5"),
			__("translations.hero-lead-item-roofing-6")
		],
		'justify' => 'end',
		'order' => 'order-2',
		'm0auto' => '',
		'mleft' => 'ml-lead-img',
		'mright' => '',
		'img0auto' => '',
	])

	{{-- Roofing Cards --}}
	<div class="section">
		<div class="container">
			<div class="row col-spacing-40 pb-2rem text-center">
				<!-- 1 -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
							<img class="w-100 lazyload" data-src="{{ asset('/images/Cards/Tile roof.jpg') }}" alt="">
							<div class="content flex-content-roof bg-transparent">
								<span class="box-text-roof-img">{{__("translations.card-1-roofing")}}</span>
							</div>
					</div>
				</div>
				<!-- 2 -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
							<img class="w-100 lazyload" data-src="{{ asset('/images/Cards/Shingle roof.jpg') }}" alt="">
							<div class="content flex-content-roof bg-transparent">
								<span class="box-text-roof-img">{{__("translations.card-2-roofing")}}</span>
							</div>
					</div>
				</div>
			</div><!-- end row -->
			<div class="row col-spacing-40 pb-2rem text-center">
				<!-- 3 -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
							<img class="w-100 lazyload" data-src="{{ asset('/images/Cards/Metal roof.jpg') }}" alt="">
							<div class="content flex-content-roof bg-transparent">
								<span class="box-text-roof-img">{{__("translations.card-3-roofing")}}</span>
							</div>
					</div>
				</div>
				<!-- 4 -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="hoverbox-7 w-100 box-shadow-radius-img-roof">
							<img class="w-100 lazyload" data-src="{{ asset('/images/Cards/Flat roof.jpg') }}" alt="">
							<div class="content flex-content-roof bg-transparent">
								<span class="box-text-roof-img">{{__("translations.card-4-roofing")}}</span>
							</div>
					</div>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div>
	{{-- End Roofing Cards --}}

	@include('components.sections.banner-footer-1', 
	[
		'imagen' => 'images/Footer/banner-2/1-solar.avif', 
		'titulo' => __("translations.banner-footer-title-solar"), 
		'subtitulo' => __("translations.banner-footer-text-solar"), 
		'btn_texto' => __("translations.banner-footer-button-solar"),
        'form' => true,
	])

	@include('components.sections.banner-footer-2', 
	[
		'imagen' => 'images/Footer/banner-1/icon/icon.png', 
		'banner_titulo1' => __("translations.More Solar Less CO2"), 
		'banner_titulo2' => __("translations.We can make a difference"), 
		'banner_texto' => __("translations.description-banner-footer-2")
	])

@endsection