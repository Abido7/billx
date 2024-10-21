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
                                <h1 class="mb-2 fw-bolder theme-lightblue-color">Contact us</h1>
                                <p class="m-0 fw-light">Please tell us your problem and our team will contact you
                                    shortly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 mx-auto pb-md-5 pb-3">
                            <div class="row">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <h3 class="title mb-3">Have a project in mind?</h3>
                                        <p class="text-secondary font-size-15">
                                            It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout.
                                        </p>
                                        <div class="row gx-md-5">
                                            <div class="col-auto font-size-16 mb-md-4 mb-3">
                                                <span class="d-block theme-dark-color darken-1">Email us</span>
                                                <a href="mailto:companyname@mail.com"
                                                   class="link theme-lightblue-color font-size-14">companyname@mail.com</a>
                                            </div>
                                            <div class="col-auto font-size-16 mb-md-4 mb-3">
                                                <span class="d-block theme-dark-color darken-1">Call anytime</span>
                                                <a href="tel:++966 123456789"
                                                   class="link theme-lightblue-color font-size-14">+966
                                                    123456789</a>
                                            </div>
                                            <div class="col-12 mb-md-4 mb-3">
                                                <span class="d-block theme-dark-color darken-1 mb-2 font-size-15">FOLLOW
                                                    US</span>
                                                <ul class="nav footer-social-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link text-secondary" href="#" target="_blank"
                                                           rel="nofollow">
                                                            <i class="fa-brands fa-x-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-secondary" href="#" target="_blank"
                                                           rel="nofollow">
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-secondary" href="#" target="_blank"
                                                           rel="nofollow">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-secondary" href="#" target="_blank"
                                                           rel="nofollow">
                                                            <i class="fa-brands fa-snapchat"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 font-size-18 mb-md-4 mb-3">
                                                <div class="contact-map">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110544.67177237017!2d31.260028997265614!3d30.02190770000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d87e9baf0a1%3A0x1cc6f8b7c1065d9c!2sCrystal%20ADC!5e0!3m2!1sen!2seg!4v1687682856491!5m2!1sen!2seg"
                                                        width="100%" height="155" style="border:0;" allowfullscreen=""
                                                        loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form class="contact-form">
                                        <div class="mb-3">
                                            <input type="text" name="name"
                                                   class="form-control bg-white font-size-14 fullname-input"
                                                   id="fullName"
                                                   placeholder="Type your name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="phone"
                                                   class="form-control bg-white font-size-14 number-input"
                                                   id="phoneNumber"
                                                   placeholder="Phone Number">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" name="email"
                                                   class="form-control bg-white font-size-14 email-input"
                                                   id="emailAddress"
                                                   placeholder="Type your Email Address">
                                        </div>
                                        <div class="mb-3">
                                            <textarea name="message" class="form-control bg-white font-size-14"
                                                      id="writeYourMessage"
                                                      placeholder="Tell us about you and the world"
                                                      rows="4"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit"
                                                    class="btn btn-primary px-3 contact-btn m-0 text-center fw-medium btn-block w-100">
                                                Send
                                                Message
                                            </button>
                                        </div>
                                    </form>
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

            <!-- ========== Header Normal========== -->

            <!-- ========== End Map  ========== -->
            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
