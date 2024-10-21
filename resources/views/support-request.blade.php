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
                                <h1 class="mb-2 fw-bolder theme-lightblue-color">Support request</h1>
                                <p class="m-0 fw-light">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua.</p>
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
                                <div class="col-sm-6 mb-lg-0 mb-4">
                                    <img class="img-fluid w-100 d-block support_image rounded" alt="Image 3"
                                        src="{{asset('images/billx_support_request_1.svg')}}" />
                                </div>
                                <div class="col-lg-6">
                                    <form class="contact-form" method="post" action="/save/contact-us">
                                        <input type="hidden" name="_token"
                                            value="qRDtHtrV9JQi7mM1QhSi8AsXBptd4QXrgTyjEQ6X">
                                        <div class="mb-3">
                                            <input type="text" name="name"
                                                class="form-control bg-white font-size-14 fullname-input" id="fullName"
                                                placeholder="Type your name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="phone"
                                                class="form-control bg-white font-size-14 number-input" id="phoneNumber"
                                                placeholder="Phone Number">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" name="email"
                                                class="form-control bg-white font-size-14 email-input" id="emailAddress"
                                                placeholder="Type your Email Address">
                                        </div>
                                        <div class="mb-3">
                                            <textarea name="message" class="form-control bg-white font-size-14"
                                                id="writeYourMessage" placeholder="Tell us about you and the world"
                                                rows="4"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit"
                                                class="btn btn-primary px-3 contact-btn m-0 text-center fw-medium btn-block w-100">Send
                                                Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-md-5 mb-4">
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

            <!-- ========== Header Normal========== -->

            <!-- ========== End Map  ========== -->
            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
