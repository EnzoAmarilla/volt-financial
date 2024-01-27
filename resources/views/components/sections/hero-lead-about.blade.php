<div class="section-sm d-none-sm d-none-md">
    <div class="container-fluid p-0">
        <div class="d-flex flex-wrap justify-content-around align-items-center">
            <div class="col-lg-5 col-md-12">
                <img data-src="{{ asset($img) }}" alt="" class="lazyload">
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <h4 class="title-hero-lead">
                    {{ $hero_lead_title }}
                </h4>
                <p class="about-herolead-text">
                    {{ $hero_lead_desc }}
                </p>
                <ul class="list-inline margin-top-20 margin-bottom-20">
                    <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit" data-toggle="modal" data-target="#modal-form-contact">{{ $text_button1 }}</button></li>
                    <li><a target="_blank" href="https://wa.me/13052046134"><button class="button button-sm button-outline-transp border-radius-2px text-inherit">{{ $text_button2 }}</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>