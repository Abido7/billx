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
                                    <h2 class="mb-2 text-white text-capitalize fw-bolder font-size-38">
                                        {{$data->getTranslation('title')}}
{{--                                        Monitor your--}}
{{--                                        <span class="theme-lightblue-color">business</span> on real-time dashboard--}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="img-fluid" alt="POS Image" src="{{ asset('images/billx_pos_image_1.jpg') }}"/>
{{--                <img class="img-fluid" alt="POS Image" src="{{ $data->getFirstMediaUrl('photo') }}"/>--}}

            </section>

            <section class="section bg-white with-texture-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-lg-5 align-items-center">
                                <div class="col-lg-6">
                                    <div class="image-box d-flex justify-content-center">
                                        <img class="img-fluid w-lg-75 d-inline-block" alt="Main Banner"
                                             src="{{ asset('/images/POS.png') }}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <h3 class="title text-capitalize fw-bold mb-3">Lorem Ipsum has been the
                                            industry's standard</h3>
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book.

                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book.</p>
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
                        <h2 class="fs-3 text-black ">Shared Cloud SSD Hosting Powered by cPanel</h2>
                        <p>Now with free domain for life and free website transfer on all plans</p>
                    </div>
                    <div class="plans-types d-flex flex-wrap justify-content-center mb-5">
                        <div class="form-group type ">
                            <input type="radio" name="plans-type" id="sharedHosting">
                            <label for="sharedHosting">
                                Shared Hosting
                            </label>
                        </div>
                        <div class="form-group type ">
                            <input type="radio" name="plans-type" id="cloudVPSHosting">
                            <label for="cloudVPSHosting">
                                Cloud VPS Hosting
                            </label>
                        </div>
                        <div class="form-group type">
                            <input type="radio" name="plans-type" id="dedicatedCPUServers">
                            <label for="dedicatedCPUServers">
                                Dedicated CPU Servers
                            </label>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card text-center rounded-0 border-0">
                                <div class="card-body p-5">
                                    <h3 class="fw-bold">
                                        $ 89.00
                                    </h3>
                                    <p class="text-primary mb-0">
                                        FastCloud Plus
                                    </p>
                                    <p class="text-muted">
                                        Month
                                    </p>
                                    <hr>
                                    <ul class="planFeatures ">
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                Rich landing pages
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                100+ Unique Components
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                Speedy build tooling
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                6 months free support
                                            </p>
                                        </li>
                                    </ul>
                                    <a class="btn btn-link d-inline-block">
                                        See More
                                    </a>
                                    <div class="mt-3">
                                        <button class="btn btn-outline-primary d-inline-block">
                                            Get Started
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card text-center rounded-0 border-0">
                                <div class="card-body p-5">
                                    <h3 class="fw-bold">
                                        $ 89.00
                                    </h3>
                                    <p class="text-primary mb-0">
                                        FastCloud Plus
                                    </p>
                                    <p class="text-muted">
                                        Month
                                    </p>
                                    <hr>
                                    <ul class="planFeatures ">
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                Rich landing pages
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                100+ Unique Components
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                Speedy build tooling
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                6 months free support
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                6 months free support
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                6 months free support
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                6 months free support
                                            </p>
                                        </li>
                                    </ul>
                                    <a class="btn btn-link d-inline-block">
                                        See More
                                    </a>
                                    <div class="mt-3">
                                        <button class="btn btn-primary d-inline-block">
                                            Get Started
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card text-center rounded-0 border-0">
                                <div class="card-body p-5">
                                    <h3 class="fw-bold">
                                        $ 89.00
                                    </h3>
                                    <p class="text-primary mb-0">
                                        FastCloud Plus
                                    </p>
                                    <p class="text-muted">
                                        Month
                                    </p>
                                    <hr>
                                    <ul class="planFeatures ">
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                Rich landing pages
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                100+ Unique Components
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                Speedy build tooling
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-2 text-muted">
                                                <i class="fa-solid fa-check text-success me-2"></i>
                                                6 months free support
                                            </p>
                                        </li>
                                    </ul>
                                    <a class="btn btn-link d-inline-block">
                                        See More
                                    </a>
                                    <div class="mt-3">
                                        <button class="btn btn-outline-primary d-inline-block">
                                            Get Started
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row mb-4">
                                <div class="col-xl-12 mx-auto">
                                    <div class="start-free-trail image_bg rounded p-5">
                                        <div
                                            class="text-box text-box-reverse d-md-flex align-items-center justify-content-between">
                                            <div class="w-md-50 mb-md-0 mb-3">
                                                <span class="title-subtile">Have Any Project In Mind?</span>
                                                <h3 class="title mb-2 text-capitalize fw-bolder">Start your free
                                                    trial
                                                    today</h3>
                                                <p class="font-size-14 m-0">It is a long established fact that a
                                                    reader
                                                    will be <br class="d-md-block d-none"> by the readable when
                                                    looking
                                                    at it layout. </p>
                                            </div>
                                            <a href="#"
                                               class="btn btn-primary d-flex align-items-center justify-content-center px-4 py-2">Try
                                                for Free<i class="fa-solid fa-angle-right fa-1x ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <img class="img-fluid w-100 d-block" alt="Image 5"
                                         src="{{ asset('images/billx_image_3.jpg') }}"/>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-fluid w-100 d-block" alt="Image 6"
                                         src="{{ asset('images/billx_image_4.jpg') }}"/>
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
