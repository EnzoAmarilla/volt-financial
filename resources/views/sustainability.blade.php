@extends('layouts.master')
@section('title') Driving Sustainability with Cleaner Energy Solutions | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Explore how our solutions in solar power generators are leading the way in reducing CO2 emissions and promoting sustainability through renewable, cleaner energy.">
@endsection
@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-sust.avif', 
    'titulo' => null, 
    'subtitulo' => __("translations.Sustainability"),
])

@include('components.sections.hero-text-sustain', 
[
    'text_black' => __("translations.hero-text-sustain"),
])

@include('components.sections.sustain-main', 
[
    'title' => __("translations.sus-title"),
    'lg_text' => __("translations.sus-lg-text"),
    'logo1' => 'images/Logos/logo-2.png',
    'icons' => 'images/Cards/Icons/sustain-icons.png',
    'lg_text2' => __("translations.sus-lg-text-2"),
    'lg_text3' => __("translations.sus-lg-text-3"),
])

{{-- Mobile Component  --}}

@include('components.sections.mobile.sustain-main-mobile', 
[
    'title' => __("translations.sus-title"),
    'lg_text' => __("translations.sus-lg-text"),
    'logo1' => 'images/Logos/logo-2.png',
    'icons' => 'images/Cards/Icons/sustain-icons.png',
    'lg_text2' => __("translations.sus-lg-text-2"),
    'lg_text3' => __("translations.sus-lg-text-3"),
])

{{-- End Mobile Component  --}}

@include('components.sections.sustain-main-2', 
[
    'icon' => 'images/Footer/banner-1/icon/icon.png',
    'title' => __("translations.sus-lg-text-4"),
    'title2' => __("translations.sus-lg-text-5"),
    'lg_text' => __("translations.sus-lg-text-6"),
    'img' => 'images/Main/2-sust.jpg',
])

@include('components.sections.banner-footer-help', 
[
    'imagen' => 'images/Footer/banner-1/2.avif', 
    'titulo' => __("translations.We are here to help"), 
    'subtitulo' => __("translations.Footer Subtitle"), 
    'btn_texto' => __("translations.I need your help"),
    'form' => true,
])

@endsection