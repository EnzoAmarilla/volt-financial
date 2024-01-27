@extends('layouts.master-404')
@section('title') Page Not Found | Volt Solar Energy @endsection
{{-- @section('meta_description')
    <meta name="description" content="Discover the benefits of Volt Heat Pump and AC systems solutions, designed for efficiency and low energy consumption to help reduce your carbon footprint.">
@endsection --}}
@section('content')
    <div class="section-lg">
        <div>
            <div class="container text-left">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <h1 class="display-1 font-weight-bold yellow-text">404</h1>
                        <h5 class="font-weight-light text-light">Sorry, It appears that the page you were looking for doesn't exist or might have been moved.</h5>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <h2 class="display-7 font-weight-bold text-white">Find answers</h2>
                        <ul class="list-inline text-left">
                            <li><a href="/help" class="nav-dropdown-link yellow-text font-weight-bold text-light font-size-2">Help</a></li>
                            <li><a href="/faqs" class="nav-dropdown-link yellow-text font-weight-bold text-light font-size-2">FAQ's</a></li>
                            <li><a href="/privacy-policy" class="nav-dropdown-link yellow-text font-weight-bold text-light font-size-2">Privacy Policy</a></li>
                            <li><a href="/terms-and-conditions" class="nav-dropdown-link yellow-text font-weight-bold text-light font-size-2">Terms & Conditions</a></li>
                            <li><a href="#" class="nav-dropdown-link yellow-text font-weight-bold text-light font-size-2" onclick="modal_doble_active()" data-toggle="modal" data-target="#modal-form-contact">@lang('translations.Contact us')</a></li>
                        </ul>
                        <a class="button button-xl button-radius button-reveal-left-dark margin-top-30" href="/"><i class="fas fa-home"></i><span>Go home page</span></a>
                    </div>
                </div>
            </div><!-- end container -->
        </div>
    </div>
@endsection