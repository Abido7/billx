@extends('layouts.guest')
@section('content')
    <main id="main_root" class="main-root"><!-- Page Content -->
        <div id="page_wrapper" class="wrapper">
            <!-------------------------------------- Start Body ------------------------------------------>
            <section class="section page-title-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-11 mx-auto">
                            <div class="page-title mx-auto text-center">
                                <h1 class="mb-2 fw-bolder theme-lightblue-color">
                                    {{ __(Str::upper($pages->where('link', 'about_us')?->first()?->title)) }}

                                </h1>
                                <p class="mb-0 fw-light ">
                                    {{ $pages->where('link', 'about_us')?->first()?->getTranslation('content') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section bg-white with-texture-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto mb-4">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="text-box">
                                        <span class="title-subtile">
                                            {{ $pages->where('link', 'about_us_section_2')?->first()?->getTranslation('title') }}
                                        </span>
                                        <h5 class="title text-capitalize">
                                            {{ $pages->where('link', 'about_us_section_2')?->first()?->getTranslation('sub_title') }}.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="text-box">
                                        <p>
                                            {{ $pages->where('link', 'about_us_section_2')?->first()?->getTranslation('content') }}.
                                        </p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-md-5">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-xl-5 align-items-center">
                                <div class="col-lg-12 mb-lg-0 mb-4">
                                    <img class="img-fluid w-100 d-block" alt="About Us"
                                        src="{{ url($pages->where('link', 'about_us_section_2')?->first()?->getFirstMediaUrl()) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-md-5 ">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-xl-5 align-items-center">
                                <div class="col-lg-10 mx-auto px-xl-5 homenumber">
                                    <div class="d-flex nums flex-wrap">
                                        <div class="border-yb px-md-5 px-4 py-3 text-center flex-fill w-50 w-md-25">
                                            <h4 class="theme-dark-color mb-0 fw-bold num"
                                                data-goal="{{ $settings->where('title', 'happy_customers')->first()?->value }}">
                                                0</h4>
                                            <p class="m-0 fw-light font-size-14">{{ __('Happy customers') }}</p>
                                        </div>
                                        <div class="border-yb px-md-5 px-4 py-3 text-center flex-fill w-50 w-md-25">
                                            <h4 class="theme-dark-color mb-0 fw-bold num"
                                                data-goal="{{ $settings->where('title', 'year_experience')->first()?->value }}">
                                                0</h4>
                                            <p class="m-0 fw-light font-size-14">{{ __('Years Experience') }}</p>
                                        </div>
                                        <div class="border-yb px-md-5 px-4 py-3 text-center flex-fill w-50 w-md-25">
                                            <div class="d-flex">
                                                <h4 class="theme-dark-color mb-0 fw-bold num"
                                                    data-goal="{{ $settings->where('title', 'working_hours')->first()?->value }}">
                                                    0
                                                </h4>
                                                <h4 class="theme-dark-color mb-0 fw-bold d-inlin-block">K</h4>
                                            </div>
                                            <p class="m-0 fw-light font-size-14">{{ __('Working hours') }}</p>
                                        </div>
                                        <div class="border-yb px-md-5 px-4 py-3 text-center flex-fill w-50 w-md-25">
                                            <h4 class="theme-dark-color mb-0 fw-bold num"
                                                data-goal="{{ $settings->where('title', 'awards_received')->first()?->value }}">
                                                0</h4>
                                            <p class="m-0 fw-light font-size-14">{{ __('Awards received') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

            <section class="section theme-grey-bg overflow-hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 mx-auto pb-5">
                            <div class="row gx-xl-5 align-items-center">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <img class="img-fluid w-100 d-block mb-md-5 mb-3" alt="Our Vision"
                                            src="{{ url($pages->where('link', 'our_mission')?->first()?->getFirstMediaUrl()) }}"
                                            data-aos="fade-right" data-aos-delay="300" />
                                        <h5 class="title mb-2 text-capitalize theme-lightblue-color" data-aos="fade-right"
                                            data-aos-delay="300">
                                            {{ $pages->where('link', 'our_mission')?->first()?->getTranslation('title') }}
                                        </h5>
                                        <p class="mb-3 mb-md-5 font-size-14" data-aos="fade-right" data-aos-delay="300">
                                        <p>
                                            {{ $pages->where('link', 'our_mission')?->first()?->getTranslation('content') }}
                                        </p>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-box">
                                        <h5 class="title mb-2 mt-md-5 text-capitalize theme-lightblue-color"
                                            data-aos="fade-left" data-aos-delay="300">
                                            {{ $pages->where('link', 'our_vision')?->first()?->getTranslation('title') }}
                                        </h5>
                                        <p class="mb-md-5 mb-3 font-size-15" data-aos="fade-left" data-aos-delay="300">
                                        <p>
                                            {{ $pages->where('link', 'our_vision')?->first()?->getTranslation('content') }}
                                        </p>

                                        </p>
                                        <img class="img-fluid w-100 d-block" alt="Our Mission"
                                            src="{{ url($pages->where('link', 'our_vision')?->first()?->getFirstMediaUrl() ?? '/') }}"
                                            data-aos="fade-left" data-aos-delay="300" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section bg-white pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="billx-brands bg-white">

                                <div class="row h-100">
                                    <div
                                        class="col-lg-2 col-md-3 col-xs-6 h-100 d-flex align-items-center justify-content-center mb-4 mb-sm-0">
                                        <img class="img-fluid" alt="Microsoft" src="{{ asset('images/Microsoft.svg') }}" />
                                    </div>
                                    <div
                                        class="col-lg-2 col-md-3 col-xs-6 h-100 d-flex align-items-center justify-content-center mb-4 mb-sm-0">
                                        <img class="img-fluid" alt="Microsoft" src="{{ asset('images/Hubspot.svg') }}" />
                                    </div>
                                    <div
                                        class="col-lg-2 col-md-3 col-xs-6 h-100 d-flex align-items-center justify-content-center mb-4 mb-sm-0">
                                        <img class="img-fluid" alt="Microsoft" src="{{ asset('images/Slack.svg') }}" />
                                    </div>
                                    <div
                                        class="col-lg-2 col-md-3 col-xs-6 h-100 d-flex align-items-center justify-content-center mb-4 mb-sm-0">
                                        <img class="img-fluid" alt="Microsoft"
                                            src="{{ asset('images/Trustpilot.svg') }}" />
                                    </div>
                                    <div
                                        class="col-lg-2 col-md-3 col-xs-6 h-100 d-flex align-items-center justify-content-center mb-4 mb-sm-0">
                                        <img class="img-fluid" alt="Microsoft"
                                            src="{{ asset('images/Xboxone.svg') }}" />
                                    </div>
                                    <div
                                        class="col-lg-2 col-md-3 col-xs-6 h-100 d-flex align-items-center justify-content-center mb-4 mb-sm-0">
                                        <img class="img-fluid" alt="Microsoft"
                                            src="{{ asset('images/Microsoft.svg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-md-5 mb-4 mt-5">
                        <div class="col-xl-11 mx-auto">
                            <div class="start-free-trail image_bg rounded p-5"
                                style="background-image: {{ url($pages->where('link', 'home_try_free')->first()?->getFirstMediaUrl()) }}">
                                <div
                                    class="text-box text-box-reverse d-md-flex align-items-center justify-content-between">
                                    <div class="w-md-50 mb-md-0 mb-3">
                                        <span class="title-subtile">
                                            {{ $pages->where('link', 'home_try_free')->first()?->getTranslation('title') }}
                                        </span>
                                        <h3 class="title mb-2 text-capitalize fw-bolder">
                                            {{ $pages->where('link', 'home_try_free')->first()?->getTranslation('sub_title') }}
                                        </h3>
                                        <p class="font-size-14 m-0">
                                            {!! nl2br(wordwrap($pages->where('link', 'home_try_free')->first()?->getTranslation('content'), 70, "\n", true)) !!}
                                        </p>
                                    </div>
                                    <a href="{{url('try-free')}}"
                                        class="btn btn-primary d-flex align-items-center justify-content-center px-4 py-2">

                                        <i class="fa-solid fa-angle-right fa-1x ms-2"></i>
                                        {{ __('try for free') }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


            <!-- ========== Header Normal========== -->

            <!-- ========== End Awarded ========== -->
            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
