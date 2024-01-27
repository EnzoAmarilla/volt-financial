<!-- Hero section -->
    <div class="section-fullscreen bg-image lazyload {{ $class_image_mobile ?? '' }} 
        @if(Request::path() == 'thevolt-home') bg-p-bottom @endif 
        @if(Request::path() == 'volt-guarantee') bg-right @endif 
        @if(Request::path() == 'help') bg-right @endif" 
        data-bg-src="{{ asset($imagen) }}">
        <div class="bg-effect-black banner-text-flex padding-y-50">
            <h1 class="text-title-tv text-center-md text-center-sm w-35">{{ $subtitulo }}<span class="yellow-text">.</span></h1>
            <p class="text-subtitle-tv padding-y-20">{{ $titulo }}</p>
        </div>
    </div>
<!-- end Hero section -->