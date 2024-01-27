@extends('layouts.master')
@section('title') Best Energy Monitoring System App | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Discover the most effective way to reduce your home's carbon footprint with our energy monitoring system app. Take control of your energy usage and make a positive impact.">
@endsection
@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1-energy-mon.avif',
		'titulo' => __("translations.Energy Solutions"), 
		'subtitulo' => __("translations.Energy Monitoring"),
	])

	@include('components.sections.hero-text', 
	[
		'hero_titulo' => __("translations.hero-title-energy-mon"),
		'hero_texto' => __("translations.hero-text-energy-mon")
	])

	@include('components.sections.hero-lead', 
	[
		'imagen' => 'images/Main/3-solar.avif',
		'imagen_sm' => 'images/Main/Mobile/1-solar.avif',
		'hero_lead_titulo' => __("translations.hero-lead-title-energy-mon"), 
		'hero_lead_items' => 
		[
			__("translations.hero-lead-item-energy-mon-1"),
			__("translations.hero-lead-item-energy-mon-2"),
			__("translations.hero-lead-item-energy-mon-3"),
			__("translations.hero-lead-item-energy-mon-4"),
			__("translations.hero-lead-item-energy-mon-5"),
			__("translations.hero-lead-item-energy-mon-6")
		],
		'justify' => 'around',
		'order' => '',
		'm0auto' => 'm-0-auto',
		'mleft' => '',
		'mright' => '',
		'img0auto' => 'm-0-auto',
	])

	@include('components.sections.banner-yellow-energy-mon', 
	[
		'imagen' => 'images/Main/2-energy-mon.png',
		'banner_titulo' => __("translations.yellow-energy-mon-title"), 
		'banner_texto' => __("translations.yellow-energy-mon-description"),
		'banner_item_1' => __("translations.yellow-energy-mon-item-1"),
		'banner_item_2' => __("translations.yellow-energy-mon-item-2"),
		'banner_item_3' => __("translations.yellow-energy-mon-item-3"),
	])

	@include('components.sections.banner-footer-1', 
	[
		'imagen' => 'images/Footer/banner-1/1.avif', 
		'titulo' => __("translations.Share the Spark"), 
		'subtitulo' => __("translations.Refer a friend Earn rewards!"), 
		'btn_texto' => __("translations.Refer Now"),
        'form' => false,
	])

	@include('components.sections.banner-footer-2', 
	[
		'imagen' => 'images/Footer/banner-1/icon/icon.png', 
		'banner_titulo1' => __("translations.More Solar Less CO2"), 
		'banner_titulo2' => __("translations.We can make a difference"), 
		'banner_texto' => __("translations.description-banner-footer-2")
	])

@endsection