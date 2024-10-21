<section>
    <div class="top-bar">
        <div class="container">
            <div class="row justify-content-between">
                <div class="flex-grow-1 justify-content-between align-items-center d-flex">
                    <ul class="nav topbar-contact-nav">
                        <li class="nav-item email">
                            <a class="nav-link" href="companyname@mail.com">
                                <span class="d-none d-md-block">
                                    companyname@mail.com
                                </span>
                            </a>
                        </li>
                        <li class="nav-item call">
                            <a class="nav-link" href="tel:++966 123456789">
                                <span class="d-none d-md-block">
                                    +966123456789
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex social-links">
                        <ul class="d-flex">
                            <li class="me-3">
                                <a href="https://www.twitter.com" target="_blank" rel="nofollow">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="me-3">
                                <a href="https://www.facebook.com" target="_blank" rel="nofollow">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="me-3">
                                <a href="https://www.instagram.com" target="_blank" rel="nofollow">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="me-3">
                                <a href="https://www.github.com" target="_blank" rel="nofollow">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="main-header sticky-top bg-white">
        <nav class="navbar navbar-expand-lg primary-menu bg-transparent">
            <div class="container">
                <a class="navbar-brand me-2" href="{{url('/')}}">
                    <img class="" alt="Logo" src="{{asset('images/logo.png')}}"/>
                </a>

                <a role="button" type="button" class="toggle navbar-toggler collapsed" data-bs-toggle="collapse"
                   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0" id='nav'>
                        <li class="nav-item">
                            <!-- <a class="nav-link" title="POS" href="/POS.html">
                                <span class="overflow ">POS</span>
                            </a> -->
                            <a role="button" class="nav-link" href="{{url('pos')}}">
                                POS
                            </a>
                            {{--                        <div class="dropdown-menu">--}}
                            {{--                            <div class="container">--}}
                            {{--                                <div class="row">--}}
                            {{--                                    <div class="col-lg-4">--}}
                            {{--                                        <a class="main-link text-white" href={{url('pos')}}>--}}
                            {{--                                            Find out everything related to Point of Sale--}}
                            {{--                                        </a>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="col-lg-4">--}}
                            {{--                                        <ul>--}}
                            {{--                                            <li class="list-item">--}}
                            {{--                                                <a href={{url('about-us')}}"">--}}
                            {{--                                                    About-us--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                            <li class="list-item">--}}
                            {{--                                                <a href={{url('privacy')}}"">--}}
                            {{--                                                    Privacy Poilcy--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                            <li class="list-item">--}}
                            {{--                                                <a href={{url('faq')}}"">--}}
                            {{--                                                    FAQ--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                            <li>--}}
                            {{--                                                <a href={{url('try-free')}}""--}}
                            {{--                                                   class="btn btn-primary d-flex align-items-center">--}}
                            {{--                                                    Try for Free--}}
                            {{--                                                    <i class="fa-solid fa-angle-right fa-1x ms-2"></i>--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </li>
                        <li class="nav-item">

                            <a role="button" href="{{url('gps')}}" class="nav-link" aria-expanded="false">
                                GPS
                            </a>
                            {{--                        <div class="dropdown-menu">--}}
                            {{--                            <div class="container">--}}
                            {{--                                <div class="row">--}}
                            {{--                                    <div class="col-lg-4">--}}
                            {{--                                        <a class="main-link text-white" href="{{url('gps')}}">--}}
                            {{--                                            Find out everything related to GPS--}}
                            {{--                                        </a>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="col-lg-4">--}}
                            {{--                                        <ul>--}}
                            {{--                                            <li class="list-item">--}}
                            {{--                                                <a href="/about-us.html">--}}
                            {{--                                                    About-us--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                            <li class="list-item">--}}
                            {{--                                                <a href="/privacy.html">--}}
                            {{--                                                    Privacy Poilcy--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                            <li class="list-item">--}}
                            {{--                                                <a href="/faq.html">--}}
                            {{--                                                    FAQ--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                            <li>--}}
                            {{--                                                <a href="try-free.html"--}}
                            {{--                                                   class="btn btn-primary d-flex align-items-center">--}}
                            {{--                                                    Try for Free--}}
                            {{--                                                    <i class="fa-solid fa-angle-right fa-1x ms-2"></i>--}}
                            {{--                                                </a>--}}
                            {{--                                            </li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Contact us" href={{asset('contact-us')}}>
                                <span class="overflow ">
                                    Contact us
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="About Billx" href={{asset('about-us')}}>
                                <span class="overflow ">
                                    About Billx
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Contact us" href={{asset('support-request')}}>
                                <span class="overflow ">
                                    Support
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="setting-nav d-flex">
                        <a class="btn btn-primary d-flex align-items-center px-4" href={{asset('try-free')}} >
                            Try for Free
                            <i class="fa-solid fa-angle-right fa-1x ms-2"></i>
                        </a>
                        <a class="btn btn-outline-primary-light only d-flex align-items-center mx-2"
                           href="{{route('filament.pages.dashboard')}}">
                            Login
                            <svg class="d-block ms-2" width="13" height="12" viewBox="0 0 13 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9145 10.9439C12.0893 9.55814 10.8008 8.47835 9.2563 7.87839C10.0244 7.32722 10.5917 6.55878 10.8779 5.68193C11.1642 4.80509 11.1549 3.86428 10.8513 2.99279C10.5477 2.1213 9.96521 1.3633 9.18636 0.826171C8.40752 0.289038 7.47179 0 6.51173 0C5.55167 0 4.61594 0.289038 3.8371 0.826171C3.05825 1.3633 2.47578 2.1213 2.17218 2.99279C1.86858 3.86428 1.85925 4.80509 2.14551 5.68193C2.43177 6.55878 2.99911 7.32722 3.76716 7.87839C2.22269 8.47835 0.934137 9.55814 0.108934 10.9439C0.0578014 11.0226 0.0237217 11.1103 0.00872104 11.2018C-0.00627962 11.2934 -0.00189514 11.3868 0.0216139 11.4767C0.045123 11.5666 0.0872767 11.651 0.145569 11.725C0.203861 11.799 0.277102 11.861 0.360937 11.9073C0.444773 11.9537 0.537491 11.9834 0.63358 11.9948C0.729669 12.0061 0.827168 11.9989 0.920279 11.9735C1.01339 11.9481 1.10021 11.9051 1.17559 11.8469C1.25096 11.7888 1.31335 11.7167 1.35904 11.635C2.44964 9.83129 4.37566 8.7555 6.51173 8.7555C8.6478 8.7555 10.5738 9.83187 11.6644 11.635C11.7634 11.7874 11.9205 11.8969 12.1024 11.9405C12.2843 11.984 12.4767 11.9582 12.6391 11.8685C12.8014 11.7787 12.9209 11.6321 12.9723 11.4595C13.0237 11.287 13.003 11.1021 12.9145 10.9439ZM3.38196 4.37861C3.38196 3.78632 3.56551 3.20732 3.90942 2.71484C4.25332 2.22236 4.74213 1.83852 5.31402 1.61186C5.88591 1.3852 6.5152 1.32589 7.12232 1.44144C7.72944 1.557 8.28711 1.84221 8.72481 2.26103C9.16252 2.67985 9.4606 3.21346 9.58137 3.79437C9.70213 4.37529 9.64015 4.97743 9.40326 5.52464C9.16638 6.07185 8.76523 6.53956 8.25054 6.86863C7.73585 7.19769 7.13074 7.37332 6.51173 7.37332C5.68196 7.37241 4.88644 7.0566 4.2997 6.49518C3.71296 5.93377 3.38291 5.17258 3.38196 4.37861Z"
                                    fill="#222D39"/>
                            </svg>
                        </a>
                        <ul>
                            @foreach(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if( app()->getLocale() !== $localeCode)
                                    <li>
                                        <a rel="alternate"
                                           class="btn btn-outline-primary-light only d-flex align-items-center  rounded-pill "
                                           hreflang="{{ $localeCode }}"
                                           href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        {{--                        <button rel="alternate" id="arabic-lang-btn" role="button" onclick="changeToArabic()"--}}
                        {{--                                class="btn btn-outline-primary-light only d-flex align-items-center arabic-lang rounded-pill ">--}}
                        {{--                        </button>--}}
                    </div>
                </div>
            </div>
        </nav>
    </header>
</section>
