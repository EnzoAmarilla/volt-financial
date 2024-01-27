@extends('layouts.master')

@section('title') Become a Volt Solar Energy Partner | Join Us in Powering the Future @endsection

@section('meta_description')
    <meta name="description" content="Discover your dream job in the dynamic field of solar and renewable energy. Join our team and shape a sustainable future with Volt Solar Energy.">
@endsection

@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-partner.avif', 
    'class_image_mobile' => 'bg-mobile-become-a-partner',
    'titulo' => null, 
    'subtitulo' => __("translations.Become a Partner Banner"),
])

@include('components.sections.hero-text-black', 
[
    'text_black' => __("translations.hero-text-partner"),
])

@include('components.sections.main-section-partner', 
[
    'img' => 'images/Main/2-partner.avif',
    'title' =>  __("translations.main-section-title1-partner"),
    'desc' => __("translations.main-section-desc1-partner"),
    'btn' => __("translations.Let's team up"),
])

@include('components.sections.main-section-partner-2', 
[
    'img' => 'images/Main/3-partner.jpg',
    'title' =>  __("translations.main-section-title2-partner"),
    'desc' => __("translations.main-section-desc2-partner"),
    'btn' => __("translations.Let's team up"),
    'list1' => __("translations.list1"),
    'list2' => __("translations.list2"),
    'list3' => __("translations.list3"),
])

@include('components.sections.main-section-partner-3', 
[
    'img' => 'images/Main/4-partner.jpg',
    'title' =>  __("translations.main-section-title3-partner"),
    'desc' => __("translations.main-section-desc3-partner"),
    'btn' => __("translations.Let's team up"),
])

@include('components.sections.form-partner', 
[

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

@section('script')
    @if(session('status'))
    <script>
        $(document).ready(function () {
            $('#modal-form-result').modal('show');
        });
    </script>
    @endif
@endsection