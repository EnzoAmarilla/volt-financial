@extends('layouts.master')
@section('title') Solar and Green Energy Solutions | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Discover solar independent energy solutions and efficient green energy management, paving the way for a sustainable and environmentally friendly future.">
@endsection
@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1-solar.avif', 
		'class_image_mobile' => 'bg-mobile-solar-energy',
		'titulo' => __("translations.Energy Solutions"), 
		'subtitulo' => __("translations.Solar Energy Banner"),
	])

	@include('components.sections.hero-text', 
	[
		'hero_titulo' => __("translations.hero-title-solar"), 
		'hero_texto' => __("translations.hero-text-solar")
	])

	@include('components.sections.hero-lead', 
	[
		'imagen' => 'images/Hero/Lead/1-solar.avif',
		'imagen_sm' => 'images/Hero/Lead/1-solar.avif',
		'hero_lead_titulo' => __("translations.hero-lead-title-solar"), 
		'hero_lead_items' => 
		[
			__("translations.hero-lead-item-solar-1"),
			__("translations.hero-lead-item-solar-2"),
			__("translations.hero-lead-item-solar-3"),
			__("translations.hero-lead-item-solar-4"),
			__("translations.hero-lead-item-solar-5")
		],
		'justify' => 'end',
		'order' => 'order-2',
		'm0auto' => '',
		'mleft' => 'ml-lead-img',
		'mright' => '',
		'img0auto' => '',
	])

    @include('components.sections.main-section-solar', 
    [
        'imagen1' => 'images/Main/3-mainsolar.jpg',
		'imagen2' => 'images/Main/4-mainsolar.jpg',
		'imagen3' => 'images/Main/5-mainsolar.jpg', 
        'banner_titulo1' => __("translations.banner-titulo1"), 
        'banner_desc1' => __("translations.banner-desc1"), 
        'banner_titulo2' => __("translations.banner-titulo2"),
        'banner_desc2' => __("translations.banner-desc2"), 
        'banner_titulo3' => __("translations.banner-titulo3"),
        'banner_desc3' => __("translations.banner-desc3"),
        // 'order' => '',
        // 'image_direction' => 'right'
    ])

	@include('components.sections.main-section-solar-2', 
	[
		'imagen_lg' => 'images/Main/3-solar.avif',
		'imagen_sm' => 'images/Main/Mobile/1-solar.avif',
		'hero_lead_titulo' => __("translations.hero-lead-titulo"), 
		'hero_lead_desc' =>  __("translations.hero-lead-desc"),
		'justify' => 'center',
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