<div class="header sticky">
    <div class="container-fluid header-padding">
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
                    <a class="nav-link nldt" href="#">@lang('translations.About Us')</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="#">@lang('translations.Contact')</a>
                </li>
                <div class="mobile-buy-now-my-voit">
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://my.voltsolarenergy.com">My Volt</a>
                    </li>
                </div>
            </ul>
        </div>

        <!-- Menu Extra -->
        <div class="header-menu-extra">
            <ul class="list-inline d-flex justify-content-center align-items-center">
                <li class="desktop-buy-now-my-voit mr-20">
                    <a target="_blank" href="https://my.voltsolarenergy.com">
                        <img data-src="{{ asset('/images/Icons/icon.svg') }}" alt="" class="mr-6 lazyload">
                    Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button-circle button-circle-white-3" href="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}">
                        <form action="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}" method="GET">
                            <button type="submit" class="text-center text-white">
                                {{ App::currentLocale() == "en" ? "ES" : "EN" }}
                            </button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Menu Toggle -->
        <button class="header-toggle">
            <span></span>
        </button>
    </div><!-- end container -->
</div>
<script>
    function modal_doble_active(){
        console.log("entre en active")
        $("#modal_doble").val(1);
    }

    function modal_doble_inactive(){
        console.log("entre en inactive")
        $("#modal_doble").val(0);
    }
</script>