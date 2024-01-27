<div class="section-sm">
    <div class="container-fluid p-0">
        <div class="d-flex flex-wrap align-items-center justify-content-{{ $justify }}">
            <div class="col-lg-6 col-md-12 img-center-md {{ $order }}">
                <img data-src="{{ asset($imagen) }}" alt="" class="lazyload">
            </div>
            <div class="col-lg-5 col-md-8 col-sm-8 hero-lead-div-text hero-div-flex">
                <h4 class="title-hero-lead white-space">
                    {{ $hero_lead_titulo }}
                </h4>
                <p class="items-hero-large-text">
                    {{ $hero_lead_text }}
                </p>
                <ul class="">
                    @foreach ($hero_lead_items as $item)
                        <li class="white-space"><h5>{{ $item }}</h5></li>
                    @endforeach
                </ul>
                <ul class="list-inline margin-top-20 margin-bottom-20">
                    <li><a class="button button-sm button-outline-yellow border-radius-2px text-inherit" @if(__("translations.Schedule a Call") == "Schedule a Call" || __("translations.Schedule a Call") == "Coordinar una llamada") href="/schedule-consultation" @else data-toggle="modal" data-target="#modal-form-contact" href="#" @endif>{{ __("translations.Schedule a Call") }}</a></li>
                    <li><a class="button button-sm button-outline-transp border-radius-2px text-inherit" target="_blank" href="https://wa.me/13052046134">{{ __("translations.Chat with us") }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>