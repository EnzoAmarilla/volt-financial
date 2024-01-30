@extends('layouts.master')

@section('title') Volt Financial Services @endsection

{{-- @section('meta_description')
    <meta property="og:title" content="VOLT: Solar, Batteries & Home Improvement.">
    <meta name="description" content="Explore efficient solar panel energy solutions and cutting-edge energy storage options at Volt Solar Energy. Power your future sustainably.">
@endsection --}}

@section('content')

    @include('components.sections.banner',
    [
        'img' => 'images/About/main-about.png', 
        'text_color' => 'text-white', 
		// 'class_image_mobile' => 'bg-mobile-solar-energy',
		'title' => __("translations.Banner Title About"), 
		'subtitle' => __("translations.Banner Subtitle About"),
    ])

    @include('components.sections.about-1', 
    [
        'pretxt' => __("translations.Who we are"),
        'title' => __("translations.Title1 About"), 
        'text' => __("translations.Text About"),
        'img' => 'images/About/main-about-2.png',
    ])

    @include('components.sections.landing-3', 
    [
        'pretxt' => __("translations.Upgrading Your Home"),
        'title' => __("translations.Home Improvement"),
        'text1_hi' => __("translations.text1_hi"),
        'text2_hi' => __("translations.text2_hi"),
    ])

    {{-- // Title footer --}}
    @php
        $text_title_footer = __('translations.Title Footer About');
    @endphp
    {{-- // END Title footer --}}

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