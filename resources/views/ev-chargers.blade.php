@extends('layouts.master')
@section('title') Discover the Best Home EV Chargers | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Explore our selection of high-performance EV chargers for your home. Get fast and efficient charging solutions for your electric vehicle.">
@endsection
@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1-ev-chargers.avif', 
		'class_image_mobile' => 'bg-mobile-ev-chargers',
		'titulo' => __("translations.Energy Solutions"), 
		'subtitulo' => __("translations.EV Chargers Banner"),
	])

	@include('components.sections.hero-text', 
	[
		'hero_titulo' => __("translations.hero-title-ev-chargers"), 
		'hero_texto' => __("translations.hero-text-ev-chargers")
	])

	@include('components.sections.main-section-solar-2', 
	[
		'imagen_lg' => 'images/Main/2-ev-chargers.avif',
		'imagen_sm' => 'images/Main/2-ev-chargers.avif',
		'hero_lead_titulo' => __("translations.hero-lead-titulo-ev-chargers"), 
		'hero_lead_desc' =>  __("translations.hero-lead-desc-ev-chargers"),
		'justify' => 'around',
		'order' => '',
		'text_button_1' => __("translations.I want to know more"),
		'text_button_2' => __("translations.Chat with us"),
	])

	@include('components.sections.main-section-solar-2', 
	[
		'imagen_lg' => 'images/Main/3-ev-chargers.jpg',
		'imagen_sm' => 'images/Main/3-ev-chargers.jpg',
		'hero_lead_titulo' => __("translations.hero-lead-titulo-ev-chargers-2"), 
		'hero_lead_desc' =>  __("translations.hero-lead-desc-ev-chargers-2"),
		'justify' => 'center',
		'order' => 'order-2',
		'text_button_1' => __("translations.I want to know more"),
		'text_button_2' => __("translations.Chat with us"),
	])

	@include('components.sections.main-section-solar-2', 
	[
		'imagen_lg' => 'images/Main/4-ev-chargers.jpg',
		'imagen_sm' => 'images/Main/4-ev-chargers.jpg',
		'hero_lead_titulo' => __("translations.hero-lead-titulo-ev-chargers-3"), 
		'hero_lead_desc' =>  __("translations.hero-lead-desc-ev-chargers-3"),
		'justify' => 'around',
		'order' => '',
		'text_button_1' => __("translations.I want to know more"),
		'text_button_2' => __("translations.Chat with us"),
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