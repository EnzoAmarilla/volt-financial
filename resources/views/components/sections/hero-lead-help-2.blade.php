<div class="section-md" style="background: #EEE;">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
                <ul class="items-flex-lead">
                    @foreach ($items as $item)
                        <li class="items-hero-lead"><img class="margin-right-10 lazyload" data-src="{{asset('images/Hero/Icon/tick.png')}}" alt=""><p>{{ $item }}</p></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-5 col-sm-12 help-container">
                <h4 class="title-hero-lead text-left text-center-md text-center-sm">
                    {{ $title }}
                </h4>
                <p class="about-herolead-text text-center-md text-center-sm">
                    {{ $desc }}
                </p>
                <p class="items-hero-large-text text-center-md text-center-sm">
                    {{ $text }}
                </p>
                <ul class="list-inline margin-top-20 margin-bottom-20 text-center-md text-center-sm">
                    <li><a href="/faqs"><button class="button button-sm button-outline-yellow border-radius-2px text-inherit">{{ __("translations.Check out FAQ") }}</button></a></li>
                    <li><a target="_blank" href="https://wa.me/13052046134"><button class="button button-sm button-outline-transp border-radius-2px text-inherit" target="_blank" href="https://wa.me/13052046134">{{ __("translations.Chat with us") }}</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>