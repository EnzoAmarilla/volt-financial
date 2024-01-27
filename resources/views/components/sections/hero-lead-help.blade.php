<div class="section-sm">
    <div class="container-fluid p-0">
        <div class="hero-help-container">
            <div class="col-lg-6 col-md-12 text-center padding-0">
                <img data-src="{{ asset($img) }}" alt="" class="lazyload">
            </div>
            <div class="col-lg-5 col-md-8 col-sm-8 hero-help-container-sm">
                <h4 class="title-hero-lead">
                    {{ $hero_lead_title }}
                </h4>
                <p class="about-herolead-text margin-top-20-sm mb-4 white-space not-white-space-sm text-center-md text-center-sm">
                    {{ $hero_lead_desc }}
                </p>
                <ul class="list-inline margin-top-50 margin-top-20-sm margin-bottom-20">
                    <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit text-dark" data-toggle="modal" data-target="#modal-form-contact">{{ $text_button1 }}</button></li>
                    <li><a target="_blank" href="https://wa.me/13052046134"><button class="button button-sm button-outline-transp border-radius-2px text-inherit">{{ $text_button2 }}</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>