<div class="section-sm d-none-lg">
    <div class="container-fluid p-0">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <div class="col-md-6 pb-4">
                <h4 class="title-hero-lead">
                    {{ $hero_lead_title }}
                </h4>
            </div>
            <div class="col-md-12">
                <img data-src="{{ asset($img) }}" alt="" class="lazyload">
            </div>
            <div class="col-md-8 col-sm-8 pt-4">
                <p class="about-herolead-text text-center">
                    {{ $hero_lead_desc }}
                </p>
                <ul class="list-inline margin-top-20 margin-bottom-20 text-center">
                    <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit" data-toggle="modal" data-target="#modal-form-contact">{{ $text_button1 }}</button></li>
                    <li><a target="_blank" href="https://wa.me/13052046134"><button class="button button-sm button-outline-transp border-radius-2px text-inherit">{{ $text_button2 }}</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>