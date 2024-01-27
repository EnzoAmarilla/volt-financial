<div class="header absolute-light sticky">
    <div class="container">
        <!-- Logo -->
        <div class="header-logo">
            <a href="/">
                <img data-src="{{ asset('/images/Logos/Logo.png') }}" alt="" class="lazyload">
            </a>   
        </div>
        <!-- Menu -->
        <div class="header-menu">
            <ul class="nav">
                <li class="nav-item menu-header-mobile">
                    <a class="nav-link" href="#">@lang('translations.Menu')</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link" href="/backend/faqs">@lang('translations.FAQs')</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="/backend/sliders">Sliders</a>
                    <ul class="nav-dropdown text-left">
                        <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/backend/sliders/1">Testimonials</a></li>
                        <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/backend/sliders/2">Projects</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Menu Extra -->
        <div class="header-menu-extra">
            <ul class="list-inline d-flex justify-content-center align-items-center">
                <li class="desktop-buy-now-my-voit text-white"><p><i class="fa fa-user mr-3"></i>{{ Auth::user()->name }}</p></li>
                {{-- <li class="desktop-buy-now-my-voit"><a href="#"><img src="{{ asset('/images/Logos/myvolt.png') }}" alt=""></a></li> --}}
                <li class="nav-item">
                    <a class="nav-link button-circle button-circle-white-3" href="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}">
                        <form action="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}" method="GET">
                            <button type="submit" class="text-center text-white">
                                {{ App::currentLocale() == "en" ? "ES" : "EN" }}
                            </button>
                        </form>
                    </a>
                </li>
                <li class="" style="cursor: pointer"><form action="/logout" method="post"> @csrf <button type="submit"><img data-src="{{ asset('/images/Logos/logout.png') }}" alt="" style="width: 2rem" class="lazyload"></button></form></li>
            </ul>
        </div>
        <!-- Menu Toggle -->
        <button class="header-toggle">
            <span></span>
        </button>
    </div><!-- end container -->
</div>