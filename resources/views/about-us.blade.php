@extends('layouts.master')
@section('title') Leading the Way to Long-Term Energy Independence | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Discover our commitment to long-term energy independence and industrial solar solutions. Learn more about our mission and expertise at Volt Solar Energy.">
@endsection
@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-about-us.avif', 
    'class_image_mobile' => 'bg-mobile-about-us',
    'titulo' => null, 
    'subtitulo' => __("translations.About Us Banner"),
])

@include('components.sections.hero-text-black', 
[
    'text_black' => __("translations.hero-text-black"),
])

{{-- Desktop Component --}}
@include('components.sections.our-story', 
[
    'title' => __("translations.story-title"),
    'lg_text' => __("translations.story-lg-text"),
    'team_img' => 'images/Team/Team.png',
])

{{-- Mobile / Tablet Component --}}
@include('components.sections.mobile.our-story-mobile', 
[
    'img' => 'images/About/1-sm.avif',
    'title' => __("translations.story-title"),
    'lg_text' => __("translations.story-lg-text"),
])

@include('components.sections.hero-lead-about', 
[
    'img' => 'images/About/1.png',
    'hero_lead_title' => __("translations.hero-lead-title"),
    'hero_lead_desc' => __("translations.hero-lead-desc"),
    'text_button1' => __("translations.I want to know more"),
    'text_button2' => __("translations.Chat with us"),
])

{{-- Mobile / Tablet Component 2 --}}
@include('components.sections.mobile.hero-lead-about-mobile', 
[
    'img' => 'images/About/1-md-sm.avif',
    'hero_lead_title' => __("translations.hero-lead-title"),
    'hero_lead_desc' => __("translations.hero-lead-desc-mobile"),
    'text_button1' => __("translations.I want to know more"),
    'text_button2' => __("translations.Chat with us"),
])
{{-- End Mobile / Tablet Component 2 --}}

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