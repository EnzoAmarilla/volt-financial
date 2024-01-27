@extends('layouts.master')
@section('title') Refer a Friend | Volt Solar Energy @endsection
@section('meta_description')
    <meta name="description" content="Join our mission to promote independent and efficient renewable energy. Refer a friend and help us drive the future of sustainable power.">
@endsection
@section('content')

@include('components.sections.banner', 
[
    'imagen' => 'images/Main/1-referal.avif', 
    'titulo' => null, 
    'subtitulo' => __("translations.Submit a referal"),
])

{{-- @include('components.sections.hero-referral', 
[
    'img' => "images/Main/2-referal.jpg",
    'hero_title' => __("translations.hero-title"),
    'hero_text' => __("translations.hero-text"),
]) --}}

{{-- <div class="">
    <img src="{{ asset('images/Main/2-referal.jpg') }}" alt="">
</div> --}}

<div class="background-form-referral">
    <div class="mb-4">
        <h2 class="text-title-tv text-dark text-center">{{__("translations.hero-title-referal")}}</h2>
        <p class="text-form-tv mt-4 text-dark text-center">{{__("translations.refer-text")}}</p>            
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="div-bg-form">
                    <h6 class="text-title-tv text-center-md text-center-sm">{{__("translations.Help spread the word")}}<span class="yellow-text">!</span></h6>
                    <p class="text-form-tv mt-4">{{__("translations.refer-text-2")}}</p>
                    <p class="title-hero-grey mt-5">{{__("translations.Your Friend Information")}}</p>
                    <form action="/refer-a-friend" method="POST" class="w-100 mt-3">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="firstNameFriend" placeholder="{{__("translations.First Name")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="lastNameFriend" placeholder="{{__("translations.Last Name")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control bg-input-form border-radius-2px" name="emailFriend" placeholder="{{__("translations.Email Address")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="phone" class="form-control bg-input-form border-radius-2px" name="phoneFriend" placeholder="{{__("translations.Phone Number")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="how" placeholder="{{__("translations.How")}}">
                        </div>
                        <p class="title-hero-grey mt-5 mb-3">{{__("translations.Your Information")}}</p>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="firstName" placeholder="{{__("translations.First Name")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="lastName" placeholder="{{__("translations.Last Name")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control bg-input-form border-radius-2px" name="email" placeholder="{{__("translations.Email Address")}}" required>
                        </div>
                        <div class="mb-4">
                            <input type="phone" class="form-control bg-input-form border-radius-2px" name="phone" placeholder="{{__("translations.Phone Number")}}" required>
                        </div>
                        <p class="text-form-tv">{{__("translations.warning-text")}} <a data-toggle="modal" data-target="#modal-privacy" href="#">{{__("translations.Privacy Policy")}}</a> {{__("translations.statement-consent")}}</p>
                        <div class="mb-4 mt-4 form-check">
                            <input type="checkbox" class="form-check-input" name="checkboxAgree" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">{{__("translations.I agree")}}<span class="yellow-text"> *</span></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-font button-form">{{__("translations.submit")}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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

@section('script')
    @if(session('status'))
    <script>
        $(document).ready(function () {
            $('#modal-form-result').modal('show');
        });
    </script>
    @endif
@endsection