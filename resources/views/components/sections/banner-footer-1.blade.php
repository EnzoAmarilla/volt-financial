<!-- Hero section -->
<div class="section-fullscreen section-footer-1 bg-image parallax lazyload" data-bg-src="{{ asset($imagen) }}">
    <div class="bg-effect-black banner-text-flex padding-y-50">
        <h3 class="text-title-tv text-center-md text-center-sm">{{ $titulo }}<span class="yellow-text">!</span></h3>
        <h3 class="text-subtitle-tv padding-y-10">{{ $subtitulo }}</h3>
        @if($form)
            <button class="button button-md button-outline-grey-2 border-radius-2px margin-top-20 text-inherit" data-toggle="modal" data-target="#modal-form-contact">{{ $btn_texto }}</button>
        @else
            <a class="button button-md button-outline-grey-2 border-radius-2px margin-top-20 text-inherit" href="/refer-a-friend">{{ $btn_texto }}</a>
        @endif
    </div>
</div>
<!-- end Hero section -->