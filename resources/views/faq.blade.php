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
                                <h1 class="mb-2 fw-bolder theme-lightblue-color">FAQ</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 mx-auto pb-md-5 pb-3">
                            <div class="row gx-md-5">
                                <div class="col-lg-5 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <span class="title-subtile">Answer To</span>
                                        <h3 class="title mb-3">Frequently Asked Questions</h3>
                                        <p class="mb-3 mb-md-4 font-size-14">There are many variation of passage of
                                            lorem Ipsum available, but the majority have suffered alteration in some
                                            form, by injected humour.</p>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="accordion theme-accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">Professional &amp; Experienced Team
                                                    Member
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                 data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                        distribution of letters opposed to using</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion theme-accordion" id="accordionExample2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                                        aria-expanded="false" aria-controls="collapseTwo2">Our Main Goal
                                                    How
                                                    To Success In IT Business
                                                </button>
                                            </h2>
                                            <div id="collapseTwo2" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample2">
                                                <div class="accordion-body">
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                        distribution of letters opposed to using</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion theme-accordion" id="accordionExample3">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo3"
                                                        aria-expanded="false" aria-controls="collapseTwo3">Our Main Goal
                                                    How
                                                    To Success In IT Business
                                                </button>
                                            </h2>
                                            <div id="collapseTwo3" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample3">
                                                <div class="accordion-body">
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking at its layout. The
                                                        point of using Lorem Ipsum is that it has a more-or-less normal
                                                        distribution of letters opposed to using</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="start-free-trail image_bg rounded p-5">
                                <div
                                    class="text-box text-box-reverse d-md-flex align-items-center justify-content-between">
                                    <div class="w-md-50 mb-md-0 mb-3">
                                        <span class="title-subtile">Have Any Project In Mind?</span>
                                        <h3 class="title mb-2 text-capitalize fw-bolder">Start your free trial today
                                        </h3>
                                        <p class="font-size-14 m-0">It is a long established fact that a reader will be
                                            <br class="d-md-block d-none"> by the readable when looking at it layout.
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="btn btn-primary d-flex align-items-center justify-content-center px-4 py-2">Try
                                        for Free<i class="fa-solid fa-angle-right fa-1x ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
