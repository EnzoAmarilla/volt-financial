@extends('layouts.master')

@section('title') Home Solar System with Independent Energy Storage | Volt Solar Energy @endsection

@section('meta_description')
    <meta name="description" content="Experience energy independence with our efficient home solar system and cutting-edge energy storage solutions. Power your home sustainably and efficiently with Volt 360.">
@endsection

@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1.jpg',
		'class_image_mobile' => 'bg-mobile-thevolt-home',
		'titulo' => __("translations.Energy Solutions"), 
		'subtitulo' => __("translations.The Volt Home"),
	])

	@include('components.sections.hero-text', 
	[
		'hero_titulo' => __("translations.360 Energy efficiency approach"), 
		'hero_texto' => __("translations.Hero Text Description")
	])

	@include('components.sections.hero-lead', 
	[
		'imagen' => 'images/Hero/Lead/1.jpg',
		'imagen_sm' => 'images/Hero/Lead/1.jpg',
		'hero_lead_titulo' => __("translations.What Volt's 360-homes are made of"), 
		'hero_lead_items' => 
		[
			__("translations.Solar Energy"),
			__("translations.Roofing Insulation"),
			__("translations.Energy Storage"),
			__("translations.EV Chargers"),
			__("translations.Smart Energy Monitoring")
		],
		'justify' => 'between',
		'order' => '',
		'm0auto' => '',
		'mleft' => '',
		'mright' => 'mr-lead-img',
		'img0auto' => '',
	])

	@include('components.sections.hero-text-2', 
	[
		'hero_titulo' => __("translations.Why?"),
		'hero_texto' => __("translations.Hero Text Description 2")
	])

	@include('components.sections.main-section-index', 
	[
		'imagen' => 'images/Main/2.png', 
		'banner_titulo1' => __("translations.Solar Energy"), 
		'banner_titulo2' => __("translations.Installing solar panels on your house can significantly reduce your electricity bills, increase your property value, provide a reliable source of clean energy, make you eligible for tax credits and incentives, and reduce your carbon footprint, contributing to a more sustainable environment"), 
		'order' => '',
		'image_direction' => 'right',
		'position' => 'around',

	])

	@include('components.sections.main-section-index', 
	[
		'imagen' => 'images/Main/3.png', 
		'banner_titulo1' => __("translations.Energy Storage"), 
		'banner_titulo2' => __("translations.Installing a home energy storage battery allows you to store excess solar power for use during outages or periods of high demand, enhancing your energy independence, reducing reliance on the grid, and potentially saving money on your electricity bills"), 
		'order' => 'order-2',
		'image_direction' => 'left',
		'position' => 'start',
	])

	@include('components.sections.main-section-index', 
	[
		'imagen' => 'images/Main/4.png', 
		'banner_titulo1' => __("translations.Roofing"), 
		'banner_titulo2' => __("translations.Upgrading to a roof with better insulation can significantly reduce your energy consumption for heating and cooling, leading to lower utility bills, a more comfortable living environment, and a reduction in your home's carbon footprint"), 
		'order' => '',
		'image_direction' => 'right',
		'position' => 'around',
	])

	@include('components.sections.main-section-index', 
	[
		'imagen' => 'images/Main/5.png', 
		'banner_titulo1' => __("translations.EV Chargers"), 
		'banner_titulo2' => __("translations.Installing an EV charger in your solar-powered home provides the ultimate convenience of charging your electric vehicle with self-generated clean energy, maximizing cost savings, and leveraging stored power for round-the-clock vehicle charging, thus promoting a truly energy-independent and sustainable lifestyle"), 
		'order' => 'order-2',
		'image_direction' => 'left',
		'position' => 'start',
	])

	@include('components.sections.main-section-index', 
	[
		'imagen' => 'images/Main/6.png', 
		'banner_titulo1' => __("translations.Energy Efficiency"), 
		'banner_titulo2' => __("translations.An energy efficiency consultation empowers you with personalized strategies to reduce energy waste, maximize savings, enhance your home's comfort, and contribute to environmental sustainability"), 
		'order' => '',
		'image_direction' => 'right',
		'position' => 'around',
	])

	@include('components.sections.main-section-index', 
	[
		'imagen' => 'images/Main/7.png', 
		'banner_titulo1' => __("translations.AC & Heat Pumps"), 
		'banner_titulo2' => __("translations.Upgrading to a state-of-the-art heat pump air conditioning system brings substantial energy savings, superior efficiency, and further steps towards energy independence, as it optimizes power consumption, integrates seamlessly with solar and battery storage, and delivers high-performance cooling and heating under one efficient system"), 
		'order' => 'order-2',
		'image_direction' => 'left',
		'position' => 'start',
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