<div class="section-sm">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-{{ $justify }} col-spacing-70">
            <div class="col-lg-5 col-md-12 img-center-md text-center {{ $order }}">
                <img class="d-none d-sm-block m-0-auto lazyload" data-src="{{ asset($imagen_lg) }}" alt="">
                <img class="d-block d-sm-none m-0-auto lazyload" data-src="{{ asset($imagen_sm) }}" alt="">
            </div>
            <div class="col-lg-5 col-md-8 col-sm-8 hero-lead-div-text flex-container-solar">
                <h4 class="title-hero-lead">
                    {{ $hero_lead_titulo }}
                </h4>
                <p class="desc-solar w-75">
                    {{ $hero_lead_desc }}
                </p>
                <ul class="list-inline margin-top-20 margin-bottom-20">
                    <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit" data-toggle="modal" data-target="#modal-form-contact">{{ $text_button_1 }}</button></li>
                    <li><a target="_blank" @if($text_button_2 == "Connect me" || $text_button_2 == "Conéctame") href="https://my.voltsolarenergy.com" @else href="https://wa.me/13052046134" @endif><button class="button button-sm button-outline-transp border-radius-2px text-inherit">{{ $text_button_2 }}</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>