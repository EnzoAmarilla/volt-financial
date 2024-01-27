@extends('layouts.master')
@section('title') Guarantee: Ensuring Energy-Efficient Solutions | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Learn about our commitment to guaranteeing energy-efficient solutions with unwavering confidence. Explore how we're making sustainability a promise at Volt Solar Energy.">
@endsection
@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-volt-guarantee.avif', 
    'titulo' => null, 
    'subtitulo' => __("translations.Volt Guarantee"),
])

@include('components.sections.hero-text-sustain', 
[
    'text_black' => __("translations.hero-text-guarantee"),
])


@include('components.sections.main-section-guarantee', 
[
    'imagen' => 'images/Main/2-volt-guarantee.avif', 
    'banner_titulo1' => __("translations.main-section-index-title-volt-guarantee"), 
    'banner_titulo2' => __("translations.main-section-index-description-volt-guarantee"), 
    'image_direction' => 'right'
])

@include('components.sections.hero-img-desc',
[
    'title' => __("translations.hero-title"),
    'desc' => __("translations.hero-desc"),
])

@include('components.sections.main-section-guarantee-2', 
[
    'imagen' => 'images/Main/4-volt-guarantee.jpg', 
    'banner_titulo1' => __("translations.main-section-index-title-volt-guarantee-2"), 
    'banner_titulo2' => __("translations.main-section-index-description-volt-guarantee-2"), 
    'image_direction' => 'right'
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