@extends('layouts.master')
@section('title') FAQs on Renewable Energy System Solutions | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Explore our FAQs to find answers about long-term, independent, and efficient renewable energy system solutions, ensuring a reliable power supply for the future.">
@endsection
@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-faq.avif', 
    'class_image_mobile' => 'bg-mobile-faqs',
    'titulo' => null, 
    'subtitulo' => __("translations.Frequently Asked Questions"),
])


@include('components.sections.hero-text-black', 
[
    'text_black' => __("translations.hero-text-faqs"), 
])

@include('components.sections.faqs-main', 
[
    'faqs' => $faqs,
    'faq1' => __("translations.faqs1"),
    'faq2' => __("translations.faqs2"),
    'faq3' => __("translations.faqs3"),
])

{{-- @include('components.sections.faqs-main-2', 
[
    'faq1' => __("translations.faqs1"),
    'faq2' => __("translations.faqs2"),
    'faq3' => __("translations.faqs3"),
])

@include('components.sections.faqs-main', 
[
    'faq1' => __("translations.faqs1"),
    'faq2' => __("translations.faqs2"),
    'faq3' => __("translations.faqs3"),
]) --}}

<div class="section-fullscreen section-footer-1 bg-mobile-help bg-position-xleft bg-image parallax" data-bg-src="{{ asset('images/Footer/banner-1/2.avif') }}">
    <div class="bg-effect-black banner-text-flex padding-y-50">
        <h3 class="text-title-tv text-center-md text-center-sm">{{ __("translations.We are here to help") }}<span class="yellow-text">!</span></h3>
        <p class="text-subtitle-tv padding-y-10">{{ __("translations.Footer Subtitle") }}</p>
        <a class="button button-md button-outline-grey-2 border-radius-2px margin-top-20 text-inherit" href="https://wa.me/13052046134" target="_blank">{{ __("translations.I need your help") }}</a>
    </div>
</div>

@include('components.sections.banner-footer-2', 
[
    'imagen' => 'images/Footer/banner-1/icon/icon.png', 
    'banner_titulo1' => __("translations.More Solar Less CO2"), 
    'banner_titulo2' => __("translations.We can make a difference"), 
    'banner_texto' => __("translations.description-banner-footer-2")
])

@endsection
@section('script')
    <script>
        function hidden_section_faq(){
            $(".hidden-section-faq").removeClass("hidden-section-faq")
            $(".text-see-more-faqs").html("Didn't find the answer to your question?")
            $(".button-chat-with-us-faqs").removeClass("d-none")
            $(".button-see-more-faqs").addClass("d-none")
        }
    </script>
@endsection