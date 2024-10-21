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
                                    <h2 class="mb-2 text-white text-capitalize fw-bolder font-size-38">Monitor your
                                        <span class="theme-lightblue-color">business</span> on real-time dashboard
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="img-fluid w-100 object-fit-cover" alt="GPS Image" src="{{asset('images/billx_gps_banner_image.jpg')}}" />
            </section>

            <section class="section bg-white with-texture-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-lg-5 align-items-center">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <h3 class="title text-capitalize fw-bold mb-3">
                                            Lorem Ipsum has been the industry's standard
                                        </h3>
                                        <p>
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box d-flex justify-content-center">
                                        <img class="img-fluid w-lg-75 d-inline-block" alt="Main Banner"
                                            src="{{asset('images/GPS.png')}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section theme-grey-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <div class="img-container">
                                <img class="w-100" src="{{asset('images/images-collection.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-box">
                                <h3 class="title mb-3">We help to get business solution ever</h3>
                                <p>
                                <div>
                                    <p id="description">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. Lorem Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book.</p>
                                    <ul>
                                        <li>
                                            <p>
                                                <i class="fa-regular fa-circle-check text-primary"></i>
                                                Pixel perfect &amp; expertly crafted to meet standards
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fa-regular fa-circle-check text-primary"></i>
                                                We love what we do &amp; who we do it for
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fa-regular fa-circle-check text-primary"></i>
                                                We love what we do &amp; who we do it for
                                            </p>
                                            <p>&nbsp;</p>
                                        </li>
                                    </ul>
                                    </p>
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
                            <div class="start-free-trail theme-dark-bg rounded overflow-hidden position-relative">
                                <div class="row gx-0">
                                    <div class="col-lg-4 col-6 d-flex align-items-center justify-content-between">
                                        <div class="text-box text-box-reverse h-100 w-100 d-flex align-items-center">
                                            <div class="px-4 px-xl-5 py-xl-3 py-4 w-100">
                                                <span class="title-subtile">Have Any Project In Mind?</span>
                                                <h3 class="title mb-lg-4 mb-3 text-capitalize fw-bolder">Start your free
                                                    trial today</h3>
                                                <a href="#"
                                                    class="btn btn-primary d-inline-flex align-items-center justify-content-center px-md-5 px-4 py-3">Try
                                                    for Free<i class="fa-solid fa-angle-right fa-1x ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <img class="img-fluid w-100 w-md-auto" alt="Image 5"
                                            src="{{asset('images/billx_gps_trail_image.jpg')}}" />
                                    </div>
                                </div>

                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <img class="img-fluid w-100 d-block" alt="Image 5"
                                        src="{{asset('images/billx_gps_image_4.jpg')}}" />
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-fluid w-100 d-block" alt="Image 6"
                                        src="{{asset('images/billx_gps_image_5.jpg')}}" />
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
