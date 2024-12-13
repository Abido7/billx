@extends('layouts.guest')
@section('content')
    <main id="main_root" class="main-root"><!-- Page Content -->
        <div id="page_wrapper" class="wrapper">
            <!-------------------------------------- Start Body ------------------------------------------>
            <section class="section main-banner theme-dark-bg p-0 position-relative">
                <div class="gps-banner-position z-1">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-xl-5">
                                <div class="text-box">
                                    <h2 class="mb-2 text-white text-capitalize fw-bolder fs-3">
                                        {{ $pages->where('link', 'pos_section_1')->first()?->getTranslation('title') }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="w-100 img-fluid" alt="POS Image"
                    src="{{ $pages->where('link', 'pos_section_1')->first()?->getFirstMediaUrl() }}" />
            </section>

            <section class="section bg-white with-texture-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-lg-5 align-items-center">
                                <div class="col-lg-6">
                                    <div class="image-box d-flex justify-content-center">
                                        <img class="img-fluid w-lg-75 d-inline-block" alt="Main Banner"
                                            src="{{ $pages->where('link', 'pos_section_2')->first()?->getFirstMediaUrl() }}" />
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <h3 class="title text-capitalize fw-bold mb-3">
                                            {{ $pages->where('link', 'pos_section_2')->first()?->getTranslation('title') }}
                                        </h3>
                                        <p>
                                            {{ $pages->where('link', 'pos_section_2')->first()?->getTranslation('content') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section theme-grey-bg plans-section">
                <div class="container">
                    <div class="text-center">
                        <h2 class="fs-3 text-black ">
                            {{ $pages->where('link', 'plans')->first()?->getTranslation('title') }}
                        </h2>
                        <p>
                            {{ $pages->where('link', 'plans')->first()?->getTranslation('content') }}

                        </p>
                    </div>

                    <div class="row align-items-center">
                        @foreach ($plans as $plan)
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card text-center rounded-0 border-0">
                                    <div class="card-body p-5">
                                        <h3 class="fw-bold">
                                            ${{ $plan->price }}
                                        </h3>
                                        <p class="text-primary mb-0">
                                            {{ $plan->getTranslation('title') }}
                                        </p>
                                        <p class="text-muted">
                                            {{ $plan->getTranslation('type') }}
                                        </p>
                                        <hr>
                                        <ul class="planFeatures ">
                                            @foreach ($plan->options as $option)
                                                <li>
                                                    <p class="mb-2 text-muted">
                                                        <i class="fa-solid fa-check text-success me-2"></i>
                                                        {{ $option->getTranslation('title') }}
                                                    </p>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <div class="mt-3">
                                            <a href="{{ $plan->link }}" class="btn btn-outline-primary d-inline-block">
                                                {{ __('Get Started') }}
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
            </section>

            <section class="section bg-white">
                <div class="container">
                    <div class="row">
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
                                                {!! nl2br(
                                                    wordwrap($pages->where('link', 'home_try_free')->first()?->getTranslation('content'), 120, "\n", true),
                                                ) !!}
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

                                    <div class="col-sm-6">
                                        <img class="img-fluid w-100 d-block" alt="Image 3"
                                            src="{{ $pages->where('link', 'home_try_free')->first()?->getMedia()[1]->getUrl() }}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <img class="img-fluid w-100 d-block" alt="Image 3"
                                            src="{{ $pages->where('link', 'home_try_free')->first()?->getMedia()[2]->getUrl() }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ========== End Service Details  ========== -->
            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
