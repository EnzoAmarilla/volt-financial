@extends('layouts.master')
@section('title') Get Assistance | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Find the help you need with our 360 energy efficiency solutions. Schedule a consultation and take the next step toward sustainable power.">
@endsection
@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-help.avif', 
    'class_image_mobile' => 'bg-mobile-help',
    'titulo' => null, 
    'subtitulo' => __("translations.Help"),
])

@include('components.sections.hero-text-black', 
[
    'text_black' => __("translations.hero-text-help"), 
])

@include('components.sections.hero-lead-help', 
[
    'img' => 'images/Hero/Lead/1-help.avif',
    'hero_lead_title' => __("translations.hero-lead-title-help"), 
    'hero_lead_desc' => __("translations.hero-lead-text-help"),
    'text_button1' => __("translations.I want to know more"),
    'text_button2' => __("translations.Chat with us"),
])

@include('components.sections.hero-lead-help-2', 
[
    'items' => 
		[
			__("translations.item1"),
			__("translations.item2"),
			__("translations.item3"),
			__("translations.item4"),
			__("translations.item5"),
            __("translations.item6"),
		],
    'title' => __("translations.FAQ"), 
    'desc' => __("translations.hero-lead-desc-help-2"),
    'text' => __("translations.hero-lead-text-help-2"),
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