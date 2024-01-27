@extends('layouts.master')

@section('title') Solar Energy Storage System | Volt Solar Energy @endsection

@section('meta_description')
    <meta name="description" content="Discover our energy-efficient, all-in-one solutions for solar energy storage. Gain independence and efficiency with our cutting-edge energy storage system.">
@endsection

@section('content')

	@include('components.sections.banner',
	[
		'imagen' => 'images/Main/1-solar-bat.jpg',
		'class_image_mobile' => 'bg-mobile-solar-bat',
		'titulo' => __("translations.Energy Solutions"),
		'subtitulo' => __("translations.Energy Storage 2"),
	])

	@include('components.sections.hero-text',
	[
		'hero_titulo' => __("translations.hero-title-solarbat"),
		'hero_texto' => __("translations.hero-text-solarbat"),
	])

	@include('components.sections.hero-lead-solarbat-1', 
	[
		'imagen' => 'images/Main/2-solar-bat.avif',
		'hero_lead_titulo' => __("translations.hero-lead-title-solarbat"), 
		'hero_lead_items' => 
		[
			__("translations.hero-lead-item-solarbat-1"),
			__("translations.hero-lead-item-solarbat-2"),
			__("translations.hero-lead-item-solarbat-3"),
		],
		'justify' => 'center',
		'order' => '',
	])

	@include('components.sections.hero-img', 
	[
		'imagen' => 'images/Hero/Img/1-solar-bat.avif',
		'logos' => 
		[
			'images/Logos/sonnen.png',
			'images/Logos/tesla-pwall.png',
			'images/Logos/generac.png',
		],
		'logos_mobile' => 
		[
			'images/Logos/Mobile/sonnen.png',
			'images/Logos/Mobile/generac.png',
			'images/Logos/Mobile/powerwall.png',
		],
	])

	@include('components.sections.hero-lead-solarbat-2', 
	[
		'imagen' => 'images/Hero/Lead/1-solar-bat.jpg',
		'hero_lead_titulo' => __("translations.hero-lead-title-solarbat-2"), 
		'hero_lead_text' => __("translations.hero-lead-text-solarbat-1"),
		'hero_lead_items' => 
		[
			__("translations.hero-lead-item-solarbat-4"),
			__("translations.hero-lead-item-solarbat-5"),
		],
		'justify' => 'end',
		'order' => 'order-2',
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