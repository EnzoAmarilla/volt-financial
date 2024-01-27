@extends('layouts.master')

@section('title') Explore Rewarding Careers in Solar and Renewable Energy | Volt Solar Energy @endsection

@section('meta_description')
    <meta name="description" content="Discover your dream job in the dynamic field of solar and renewable energy. Join our team and shape a sustainable future with Volt Solar Energy.">
@endsection

@section('content')

	@include('components.sections.banner', 
	[
		'imagen' => 'images/Main/1-careers.avif', 
		'class_image_mobile' => 'bg-mobile-careers',
		'titulo' => null, 
		'subtitulo' => __("translations.Careers Banner"),
	])

	<div class="background-form-1">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="div-bg-form">
						<h6 class="text-title-tv">{{__("translations.Work with us")}}<span class="yellow-text">!</span></h6>
						<p class="text-form-tv mt-4">{{__("translations.intro-text-careers")}}</p>
						<p class="title-hero-grey mt-5">{{__("translations.Introduce Yourself")}}</p>
						<form action="/careers" method="POST" class="w-100 mt-3" enctype="multipart/form-data">
							@csrf
							<div class="mb-4">
								<input type="text" class="form-control bg-input-form border-radius-2px" name="firstName" placeholder="{{__("translations.First Name")}}">
							</div>
							<div class="mb-4">
								<input type="text" class="form-control bg-input-form border-radius-2px" name="lastName" placeholder="{{__("translations.Last Name")}}">
							</div>
							<div class="mb-4">
								<input type="email" class="form-control bg-input-form border-radius-2px" name="email" placeholder="{{__("translations.Email Address")}}">
							</div>
							<div class="mb-4">
								<input type="phone" class="form-control bg-input-form border-radius-2px" name="phone" placeholder="{{__("translations.Phone Number")}}">
							</div>
							<h4 class="text-white-tv text-center">{{__("translations.Resume/CV")}}</h4>
							<p class="text-form-tv">{{__("translations.upload")}}</p>
							{{-- Input file --}}
							<div class="container mt-4 mb-5" 
							style="border-radius: 2px; background: rgba(123, 121, 121, 0.60);">
								<div class="row align-items-center justify-content-center" style="position: relative;">
									<label for="fileInput" class="custom-file-input"></label>
									<input type="file" id="fileInput" name="attach" style="position: absolute;" class="custom-file-input" accept=".doc,.docx,.html,.pdf,.txt">
									<div class="input-container mt-3">
										<img class="mb-2 mt-2 lazyload" data-src="images/Cards/Icons/upload.png" alt="">
										<h3 class="text-white-tv input-h3 text-center-sm">{{__("translations.Drop File Here")}}</h3>
										<h4 class="text-white-tv text-center-sm">{{__("translations.or")}} <span class="yellow-text">{{__("translations.Select File")}}</span></h4>
									</div>
									<input type="text" id="fileName" class="file-name" style="display: none" readonly>									  
								</div>
							</div>
							{{-- End input file --}}
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

	<!-- Hero section -->
	<div class="section-fullscreen section-footer-1 bg-image parallax" data-bg-src="{{ asset('images/Footer/banner-2/1-solar.avif') }}">
		<div class="bg-effect-black banner-text-flex padding-y-50">
			<h3 class="text-title-tv text-center-md text-center-sm w-65">{{ __("translations.banner-footer-careers") }}<span class="yellow-text">!</span></h3>
			<h3 class="text-subtitle-tv padding-y-10">{{ __("translations.banner-footer-text-solar") }}</h3>
			<button class="button button-md button-outline-grey-2 border-radius-2px margin-top-20 text-inherit" data-toggle="modal" data-target="#modal-form-contact">{{ __("translations.banner-footer-button-solar") }}</button>
		</div>
	</div>
	<!-- end Hero section -->

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

	<script src="{{ asset('/js/input-file.js') }}"></script>
@endsection