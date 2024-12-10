@extends('layouts.guest')
@section('content')
    <main id="main_root" class="main-root"><!-- Page Content -->
        <div id="page_wrapper" class="wrapper">
            <!-------------------------------------- Start Body ------------------------------------------>
            <!----------------------------------- Start Slider ---------------------------------------------->
            <section class="section main-banner  carousel slide gps-carousel-slider" id="gpsCarouselSlider"
                data-ride="carousel">
                <div class="carousel-inner ">
                    @foreach ($sliders as $slider)
                        <div class="carousel-item {{ $slider->order === 1 ? 'active' : '' }}">
                            <div class="container">
                                <div class="row align-items-center ">
                                    <div class="col-12 col-lg-5">
                                        <div class="text-box">
                                            <h2 class="mb-sm-4 mb-2 theme-dark-color text-capitalize fw-bolder">
                                                {{ $slider->getTranslation('title') }}
                                            </h2>
                                            <p>{{ $slider->getTranslation('content') }}
                                            </p>
                                            <div class="d-flex">
                                                <a href="{{ url("$slider->action_type") }}" class="btn btn-primary px-3 py-2 mx-4">
                                                    {{ __('try for free') }}
                                                </a>
                                                <!-- <button> -->
                                                <a href="{{ url("$slider->link") }}" class="btn btn-outline-primary py-2 px-4">
                                                    <i class="fa-solid fa-play mx-1"></i>
                                                    {{ __('watch video') }}
                                                </a>
                                                <!-- </button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <img class="img-fluid" alt="Main Banner"
                                            src="{{ url($slider->getFirstMediaUrl()) }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#gpsCarouselSlider"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#gpsCarouselSlider"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </section>
            <!----------------------------------- End Slider ---------------------------------------------->

            <!-- ========== About Section ========== -->

            <section class="section bg-white with-texture-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-xl-5 align-items-center">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="image-box with-grey-bg">
                                        <img class="img-fluid w-100 d-block" alt="Main Banner"
                                            src="{{ url($pages->where('link', 'home_about_us')?->first()?->getFirstMediaUrl()) }}" />
                                        <div class="years text-white d-flex align-items-center">
                                            <!-- <p class="text-white"> -->
                                            <span class="d-inline-block">{{ __('Years of Experience') }}</span>
                                            <span class="d-inline-block fs-3 fw-medium me-2">
                                                {{ $settings->where('title', 'year_experience')->first()?->value }}
                                            </span>
                                            <!-- </p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-box">
                                        <span class="title-subtile">
                                            {{ __(Str::upper($pages->where('link', 'home_about_us')?->first()?->getTranslation('title'))) }}
                                        </span>
                                        <h3 class="title mb-3">
                                            {{ $pages->where('link', 'home_about_us')->first()?->getTranslation('title') }}
                                        </h3>
                                        <p>
                                            {{ $pages->where('link', 'home_about_us')->first()?->getTranslation('content') }}
                                        </p>

                                        <div class="d-inline-flex p-2 rounded-3 theme-lightblue-bg lighten-1 mb-3">
                                            <button id="mission-btn" class="btn btn-primary fw-medium px-3 me-2">
                                                {{ __('OUR MISSION') }}

                                            </button>
                                            <button id="vision-btn" class="btn btn-text-link fw-medium px-3 ">
                                                {{ __('OUR VISION') }}
                                            </button>
                                        </div>
                                        <div id="mission">
                                            <p id="description">

                                            <ul>
                                                @foreach ($pages->toQuery()->where('link', 'like', '%home_our_mission_%')->get() as $page)
                                                    <li>
                                                        <p>
                                                            <i class="fa-regular fa-circle-check text-primary"></i>
                                                            {{ $page?->getTranslation('content') }}
                                                        </p>
                                                    </li>
                                                @endforeach


                                            </ul>
                                            </p>

                                        </div>

                                        <div id="vision">
                                            <p id="description">
                                            <ul>
                                                @foreach ($pages->toQuery()->where('link', 'like', '%home_our_vision_%')->get() as $page)
                                                    <li>
                                                        <p>
                                                            <i class="fa-regular fa-circle-check text-primary"></i>
                                                            {{ $page?->getTranslation('content') }}
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ========== End About Section ========== -->


            <section class="section bg-white pt-0 position-relative overflow-hidden">
                <div class="gradiant-background"></div>
                <div class="container position-relative z-2">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-box text-center">
                                        <span class="title-subtile">
                                            {{ __(Str::upper($pages->where('link', 'main_feature')?->first()?->title)) }}
                                        </span>
                                        <h3 class="title mb-3 mb-md-5">
                                            {{ $pages->where('link', 'main_feature')?->first()?->getTranslation('content') }}
                                        </h3>
                                    </div>
                                </div>

                                @foreach ($pages->toQuery()->where('link', 'like', '%main_feature_%')->get() as $page)
                                    <div class="col-lg-4 m-lg-0 my-2" data-aos="fade-right" data-aos-delay="300">
                                        <div class="card d-block bg-white with-hover-shadow text-center">
                                            <div class="pt-4 px-3 pb-0">
                                                <img src="{{ url($page->getFirstMediaUrl()) }}" class="card-img-top w-auto"
                                                    alt="Monitoring 24/7">
                                            </div>
                                            <div class="card-body text-box text-center pb-4">
                                                <h5 class="title font-size-18 mb-3">
                                                    {{ $page->getTranslation('title') }}
                                                </h5>
                                                <p class="m-0 theme-lightgrey-color font-size-14 line-height-18">
                                                    {{ $page->getTranslation('content') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== Service ========== -->

            <!-- ========== End Service ========== -->

            <section class="section theme-grey-bg position-relative">
                <div class="container position-relative z-2">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-xl-5 align-items-center">
                                <div class="col-lg-6 px-xl-5 mb-lg-0 mb-4">
                                    <div class="text-box max-width-76">
                                        <h2 class="title-subtile fs-2 mb-4">
                                            {{ $pages->where('link', 'why_choose_billx')->first()?->getTranslation('title') }}
                                        </h2>
                                        <h3 class="title mb-3 mb-md-5">
                                            <span class="theme-lightblue-color">{{ __('BILLX') }}</span>
                                            {{ $pages->where('link', 'why_choose_billx')->first()?->getTranslation('sub_title') }}
                                        </h3>
                                        <ul class="navbar-nav with-number-line">
                                            @foreach ($pages->toQuery()->where('link', 'like', '%why_choose_billx_%')->get() as $key => $page)
                                                <li class="nav-item" data-aos="fade-right" data-aos-delay="300">
                                                    <span class="list-number">{{ $key + 1 }}</span>
                                                    <strong>{{ $page->getTranslation('title') }}</strong>
                                                    <span>
                                                        {{ $page->getTranslation('content') }}
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box with-grey-bg">
                                        <img class="img-fluid w-100 d-block" alt="Main Banner"
                                            src="{{ asset('images/billx_image_2.png') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section bg-white  ">
                <div class="container">
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


                    <div class="row mb-md-5 mb-4">
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
                                            {!! nl2br(wordwrap($pages->where('link', 'home_try_free')->first()?->getTranslation('content'), 120, "\n", true)) !!}
                                        </p>
                                    </div>
                                    <a href="#"
                                        class="btn btn-primary d-flex align-items-center justify-content-center px-4 py-2">

                                        <i class="fa-solid fa-angle-right fa-1x ms-2"></i>
                                        {{ __('try for free') }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row g-4">

                                @foreach ($pages->where('link', 'home_try_free')->first()?->getMedia() as $key => $img)
                                    {{-- {{ dd($img->getUrl()) }} --}}
                                    @if ($key > 0)
                                        <div class="col-sm-6">
                                            <img class="img-fluid w-100 d-block" alt="Image 3"
                                                src="{{ $img->getUrl() }}" />
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== Awarded ========== -->
            <!-- ========== End Awarded ========== -->
            <!---->
            <!-- ========== Play Video ========== -->
            <!-- ========== End Play Video ========== -->
            <!-- ========== Contact  ========== -->
            <!-- ========== End Contact  ========== -->
            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
