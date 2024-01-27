@extends('layouts.master')
@section('title') Volt Projects: Leading the Way in Solar Energy Efficiency @endsection
@section('meta_description')
    <meta name="description" content="Discover how our projects showcasing our leadership in solar energy efficiency, and innovative energy storage solutions.">
@endsection
@section('content')

    @include('components.sections.banner', 
    [
        'imagen' => 'images/Main/1-volt-projects.avif', 
        'titulo' => null, 
        'subtitulo' => __("translations.Volt Projects"),
    ])

    @include('components.sections.hero-lead-about', 
    [
        'img' => 'images/About/1.png',
        'hero_lead_title' => __("translations.hero-lead-title"),
        'hero_lead_desc' => __("translations.hero-lead-desc"),
        'text_button1' => __("translations.I want to know more"),
        'text_button2' => __("translations.Chat with us"),
    ])

    {{-- Mobile / Tablet Component --}}
    @include('components.sections.mobile.hero-lead-about-mobile', 
    [
        'img' => 'images/About/1-md-sm.avif',
        'hero_lead_title' => __("translations.hero-lead-title"),
        'hero_lead_desc' => __("translations.hero-lead-desc-mobile"),
        'text_button1' => __("translations.I want to know more"),
        'text_button2' => __("translations.Chat with us"),
    ])
    {{-- End Mobile / Tablet Component --}}

    @include('components.sections.swiper', [
        'title_landing2' => __("translations.title-projects"),
        'images_sliders' => $images_sliders,
    ])

    @include('components.sections.swiper-mobile', [
        'title_landing2' => __("translations.title-projects"),
        'images_sliders_mobile' => $images_sliders_mobile,
    ])
    
	@include('components.sections.banner-footer-1', 
	[
		'imagen' => 'images/Footer/banner-1/1.avif', 
		'titulo' => __("translations.Share the Spark"), 
		'subtitulo' => __("translations.Refer a friend Earn rewards!"), 
		'btn_texto' => __("translations.Refer Now"),
        'form' => false,
	])

@endsection