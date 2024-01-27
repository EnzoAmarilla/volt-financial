{{-- // Desktop --}}
<ul class="accordion d-none-sm">
    @php $grayBackground = true; @endphp
    @php $counter = 0 ;@endphp
    @foreach ($faqs as $faq)
        <li class="m-0 border-0 p-5 pl-5 pr-5 @if($counter >= 5) hidden-section-faq @endif" @if ($grayBackground) style="background-color: #EEE;" @endif>
            <div class="accordion-title border-0">
                <h4 class="title-hero-lead faqs-herotext-sm pl-4 w-95">
                    {{ $faq['title'] }}
                </h4>
            </div>
            <div class="accordion-content border-0 col-lg-10">
                <p class="about-herolead-text mb-4 pl-4">
                    {{ $faq['subtitle'] }}
                </p>
                <p class="items-hero-large-text">
                    {!! $faq['description'] !!}
                </p>
                <a class="button button-sm button-outline-transp border-radius-2px text-inherit text-dark mt-4 ml-4" target="_blank" href="https://wa.me/13052046134">{{ __("translations.Still have doubts") }}</a>
            </div>
        </li>
        @php $grayBackground = !$grayBackground;@endphp
        @php $counter++ ;@endphp
    @endforeach
</ul>

{{-- // Mobile --}}
<ul class="accordion d-none-lg d-none-md">
    @php $grayBackground = true; @endphp
    @php $counter = 0 ;@endphp
    @foreach ($faqs as $faq)
        <li class="m-0 border-0 @if($counter >= 5) hidden-section-faq @endif" @if ($grayBackground) style="background-color: #EEE;" @endif>
            <div class="accordion-title border-0">
                <h4 class="title-hero-lead faqs-herotext-sm title-faqs-mobile w-85">
                    {{ $faq['title'] }}
                </h4>
            </div>
            <div class="accordion-content border-0 col-lg-10">
                <p class="about-herolead-text mb-4 subtitle-faqs-mobile">
                    {{ $faq['subtitle'] }}
                </p>
                <p class="items-hero-large-text">
                    {!! $faq['description'] !!}
                </p>
                <a class="button button-sm button-outline-transp border-radius-2px text-inherit text-dark mt-4 ml-4" target="_blank" href="https://wa.me/13052046134">{{ __("translations.Still have doubts") }}</a>
            </div>
        </li>
        @php $grayBackground = !$grayBackground;@endphp
        @php $counter++ ;@endphp
    @endforeach
</ul>

{{-- @if($contador >= 3) --}}
    <div class="section-xs div_more_questions">
        <div class="see_more_questions"></div>
    </div>
    <section class="container mb-4">
        <div class="section-xs">
            <div class="row flex-column justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h4 class="title-hero-black m-0-auto text-see-more-faqs">{{__("translations.See more questions")}}</h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <a class="button button-sm button-outline-transp border-radius-2px text-inherit text-dark mt-4 button-chat-with-us-faqs d-none" target="_blank" href="https://wa.me/13052046134">{{ __("translations.Chat with us") }}</a>
                    <button class="button button-sm button-outline-transp border-radius-2px text-inherit text-dark mt-4 button-see-more-faqs" onclick="hidden_section_faq()">{{ __("translations.Still have doubts") }}</button>
                </div>
            </div>
        </div>
    </section>
{{-- @endif --}}
