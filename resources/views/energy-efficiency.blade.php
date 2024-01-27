@extends('layouts.master')
@section('title') Enhance Home Energy Efficiency | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Discover how our home solar energy solutions, efficient heat pumps, and solar panels can significantly reduce your energy bills. Boost your energy efficiency today!">
@endsection
@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1-energy-effi.jpg',
		'class_image_mobile' => 'bg-mobile-energy-efficiency',
		'titulo' => __("translations.Energy Solutions"), 
		'subtitulo' => __("translations.Energy Efficiency"),
	])

	@include('components.sections.hero-text', 
	[
		'hero_titulo' => __("translations.hero-title-energy-effi"), 
		'hero_texto' => __("translations.hero-text-energy-effi")
	])

	@include('components.sections.hero-lead', 
	[
		'imagen' => 'images/Hero/Lead/1-energy-effi.avif',
		'imagen_sm' => 'images/Hero/Lead/1-energy-effi.avif',
		'hero_lead_titulo' => __("translations.hero-lead-title-energy-effi"), 
		'hero_lead_items' => 
		[
			__("translations.hero-lead-item-energy-effi-1"),
			__("translations.hero-lead-item-energy-effi-2"),
			__("translations.hero-lead-item-energy-effi-3"),
			__("translations.hero-lead-item-energy-effi-4"),
			__("translations.hero-lead-item-energy-effi-5"),
			__("translations.hero-lead-item-energy-effi-6")
		],
		'justify' => 'end',
		'order' => 'order-2',
		'm0auto' => '',
		'mleft' => 'ml-lead-img',
		'mright' => '',
		'img0auto' => '',
	])

	@include('components.sections.main-section-solar-2', 
	[
		'imagen_lg' => 'images/Main/3-solar.avif',
		'imagen_sm' => 'images/Main/Mobile/1-solar.avif',
		'hero_lead_titulo' => __("translations.hero-lead-titulo"), 
		'hero_lead_desc' =>  __("translations.hero-lead-desc"),
		'justify' => 'around',
		'order' => '',
		'text_button_1' => __("translations.I want to know more"),
		'text_button_2' => __("translations.Connect me"),
	])

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