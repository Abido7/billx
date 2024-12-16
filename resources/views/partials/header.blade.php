<section>
    <div class="top-bar">
        <div class="container">
            <div class="row justify-content-between">
                <div class="flex-grow-1 justify-content-between align-items-center d-flex">
                    <ul class="nav topbar-contact-nav">
                        <li class="nav-item email">
                            <a class="nav-link" href="companyname@mail.com">
                                <span class="d-none d-md-block">
                                    {{ $settings->where('title', 'email')->first()?->value }}
                                </span>
                            </a>
                        </li>
                        <li class="nav-item call">
                            <a class="nav-link" href="tel:++966 123456789">
                                <span class="d-none d-md-block">
                                    {{ $settings->where('title', 'phone')->first()?->value }}
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex social-links">
                        <ul class="d-flex">
                            <li class="me-3">
                                <a href="{{ url($settings->where('title', 'twitter')->first()?->value ?? '/') }}"
                                    target="_blank" rel="nofollow">

                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="me-3">
                                <a href="{{ url($settings->where('title', 'facebook')->first()?->value ?? '/') }}"
                                    target="_blank" rel="nofollow">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="me-3">
                                <a href="{{ url($settings->where('title', 'instagram')->first()?->value ?? '/') }}"
                                    target="_blank" rel="nofollow">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="me-3">
                                <a href="{{ url($settings->where('title', 'github')->first()?->value ?? '/') }}"
                                    target="_blank" rel="nofollow">
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
                <a class="navbar-brand me-2" href="{{ url('/') }}">
                    <img class="" alt="Logo" src="{{ asset('images/logo.png') }}" />
                </a>

                <a role="button" type="button" class="toggle navbar-toggler collapsed" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0" id='nav'>
                        @foreach ($naveBarItems as $page)
                            <li class="nav-item" title="{{ $page->link == 'pos' ? __('Plans') : '' }}">
                                <a role="button" class="nav-link" href="{{ url("$page->link") }}">
                                    {{ str_replace(['-', '_'], ' ', strtoupper($page->getTranslation('title'))) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="setting-nav d-flex">
                        <a class="btn btn-primary d-flex align-items-center px-4 mx-2" href={{ asset('try-free') }}>
                            {{ __('try for free') }}
                            <i class="fa-solid fa-angle-right fa-1x ms-2"></i>
                        </a>

                        <div class="btn-group">
                            <button
                                class="btn btn-outline-primary-light only d-flex align-items-center  rounded-pill dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Login') }}
                            </button>
                            <ul class="dropdown-menu ">
                                <div class="p-1 d-flex justify-content-center">

                                    <div class="text-center my-1 login">
                                        <a class="p-2 mx-3" target="_"
                                            href="{{ url($settings->where('title', 'consoleUrl')->first()?->value) }}">
                                            {{ 'POS' }}
                                        </a>
                                    </div>
                                    <div class="text-center my-1 login">
                                        <a class="p-2 mx-3" target="_"
                                            href="{{ url($settings->where('title', 'gpsUrl')->first()?->value) }}">
                                            {{ 'GPS' }}
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <ul>
                            @foreach (\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if (app()->getLocale() !== $localeCode)
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
                    </div>
                </div>
            </div>
        </nav>
    </header>
</section>
