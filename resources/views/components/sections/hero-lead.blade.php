<div class="section-xs">
    <div class="container-fluid p-0">
        <div class="d-flex flex-wrap align-items-center justify-content-{{ $justify }}">
            <div class="col-lg-6 col-md-12 img-center-md text-center p-0-img {{ $order }} {{ $m0auto }} ">
                <img class="d-none d-sm-block lazyload {{ $mleft }} {{ $mright }} {{ $img0auto }}" data-src="{{ asset($imagen) }}" alt="">
                <img class="d-block d-sm-none m-0-auto lazyload" data-src="{{ asset($imagen_sm) }}" alt="">
            </div>
            <div class="col-lg-5 col-md-8 col-sm-8 hero-lead-div-text hero-div-flex">
                <h4 class="title-hero-lead white-space">
                    {{ $hero_lead_titulo }}
                </h4>
                <ul class="items-flex-lead">
                    @foreach ($hero_lead_items as $item)
                        <li class="items-hero-lead"><img class="margin-right-10 lazyload" data-src="{{asset('images/Hero/Icon/tick.png')}}" alt=""><p>{{ $item }}</p></li>
                    @endforeach
                </ul>
                <ul class="list-inline margin-top-20 margin-bottom-20">
                    <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit" data-toggle="modal" data-target="#modal-form-contact">{{ __("translations.I want to know more") }}</button></li>
                    <li><a target="_blank" href="https://wa.me/13052046134"><button class="button button-sm button-outline-transp border-radius-2px text-inherit">{{ __("translations.Chat with us") }}</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>