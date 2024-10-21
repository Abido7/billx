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
                                <h1 class="mb-2 fw-bolder theme-lightblue-color">Try for free</h1>
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
                            <div class="row">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <h2 class="text-black fs-1 fw-bold">
                                            Get your trial version of the
                                            <span class="text-primary">
                                                Billx system
                                            </span>
                                        </h2>
                                        <p>Provides the perfect tools for a successful project</p>
                                    </div>
                                    <ul class="navbar-nav with-number-line">
                                        <li class="nav-item" data-aos="fade-right" data-aos-delay="300">
                                            <span class="list-number">1</span>
                                            <strong>Sync between platforms</strong>
                                            <span>
                                                No matter if you're using our web interface or mobile app — your data is
                                                always synced. Just one account for all our services.
                                            </span>
                                        </li>
                                        <li class="nav-item" data-aos="fade-right" data-aos-delay="300">
                                            <span class="list-number">2</span>
                                            <strong>Increase Your Company Growth</strong>
                                            <span>
                                                No ads, just the crypto and content you love.
                                            </span>
                                        </li>
                                        <li class="nav-item" data-aos="fade-right" data-aos-delay="300">
                                            <span class="list-number">3</span>
                                            <strong>24/7 Strong Customer Support</strong>
                                            <span>Enable privacy mode and app locking to protect your data.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <form class="contact-form">
                                        <div class="mb-3">
                                            <input type="text" name="name"
                                                   class="form-control bg-white font-size-14 fullname-input"
                                                   id="fullName"
                                                   placeholder="First Name">
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
                                        <div class="row mb-2">
                                            <div class="col-lg-6 mb-3">
                                                <select class="form-select" name="branchesNo" id="branchesNo">
                                                    <option value="" disabled selected>
                                                        Number of Branches
                                                    </option>
                                                    <option value="10">
                                                        10
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <input type="text" class="form-control" placeholder="Business name">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <select name="country" id="country" class="form-select">
                                                    <option value="" disabled selected>
                                                        Country
                                                    </option>
                                                    <option value="1">
                                                        Saudi Arabia
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <select name="city" id="city" class="form-select">
                                                    <option value="" disabled selected>
                                                        City
                                                    </option>
                                                    <option value="1">
                                                        Riyadh
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="bg-light-blue mb-3   p-3">
                                            <span class="d-block mb-3">
                                                Contact me through
                                            </span>
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="contactThorugh"
                                                           id="contactThorughEmail">
                                                    <label for="contactThorughEmail">
                                                        Email
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="contactThorugh"
                                                           id="contactThorughWP">
                                                    <label for="contactThorughWP">
                                                        WhatsApp
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="contactThorugh"
                                                           id="contactThorughCall">
                                                    <label for="contactThorughCall">
                                                        Phone Call
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit"
                                                    class="btn btn-primary px-3 contact-btn m-0 text-center fw-medium btn-block w-100">
                                                Send
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-fluid w-100 d-block" alt="Image 3" src="images/billx_image_3.jpg"/>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid w-100 d-block" alt="Image 4" src="images/billx_image_4.jpg"/>
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
