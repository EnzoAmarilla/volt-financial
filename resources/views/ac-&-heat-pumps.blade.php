@extends('layouts.master')
@section('title') AC & Heat Pumps | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Discover the benefits of Volt Heat Pump and AC systems solutions, designed for efficiency and low energy consumption to help reduce your carbon footprint.">
@endsection
@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1-ac-&-heat-pumps.jpg', 
	    'class_image_mobile' => 'bg-mobile-ac-heat-pumps',
		'titulo' => __("translations.Energy Solutions"), 
		'subtitulo' => __("translations.AC & Heat Pumps"),
	])

	@include('components.sections.hero-text', 
	[
		'hero_titulo' => __("translations.hero-text-title-ac-&-heat-pumps"), 
		'hero_texto' => __("translations.hero-text-desc-ac-&-heat-pumps")
	])

	@include('components.sections.hero-lead', 
	[
		'imagen' => 'images/Hero/Lead/1-ac-&-heat-pumps.avif',
		'imagen_sm' => 'images/Hero/Lead/1-ac-&-heat-pumps.avif',
		'hero_lead_titulo' => __("translations.hero-lead-title-ac-&-heat-pumps"), 
		'hero_lead_items' => 
		[
			__("translations.hero-lead-item-ac-&-heat-pumps-1"),
			__("translations.hero-lead-item-ac-&-heat-pumps-2"),
			__("translations.hero-lead-item-ac-&-heat-pumps-3"),
			__("translations.hero-lead-item-ac-&-heat-pumps-4"),
			__("translations.hero-lead-item-ac-&-heat-pumps-5"),
			__("translations.hero-lead-item-ac-&-heat-pumps-6"),
		],
		'justify' => 'between',
		'order' => '',
		'm0auto' => '',
		'mleft' => '',
		'mright' => 'mr-lead-img',
		'img0auto' => '',
	])

	@include('components.sections.main-section-ac-heat', 
	[
		'img1' => 'images/Main/1-heat.jpg',
		'img2' => 'images/Main/1-AC.jpg',
		'hero_lead_title1' => __("translations.main-title1"),
		'hero_lead_desc1' => __("translations.main-desc1"),
		'hero_lead_title2' => __("translations.main-title2"),
		'hero_lead_desc2' => __("translations.main-desc2"),
		'text_button_1' => __("translations.I want to know more"),
		'text_button_2' => __("translations.Chat with us"),
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