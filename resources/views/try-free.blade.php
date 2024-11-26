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
                                    {{ $pages->where('link', 'try-free')->first()?->getTranslation('title') }}

                                </h1>
                                <p class="m-0 fw-light">
                                    {{ $pages->where('link', 'try-free')->first()?->getTranslation('content') }}

                                </p>
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
                                            {{ $pages->where('link', 'try_free_section_2')->first()?->getTranslation('title') }}
                                        </h2>
                                        <p>
                                            {{ $pages->where('link', 'try_free_section_2')->first()?->getTranslation('content') }}
                                        </p>
                                    </div>
                                    <ul class="navbar-nav with-number-line">
                                        @foreach ($pages->toQuery()->where('link', 'like', '%try_free_section_2_option_%')->get() as $key => $page)
                                            <li class="nav-item" data-aos="fade-left" data-aos-delay="300">
                                                <span class="list-number">{{ $key + 1 }}</span>
                                                <strong>
                                                    {{ $page?->getTranslation('title') }}
                                                </strong>
                                                <span>
                                                    {{ $page?->getTranslation('content') }}

                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <form class="contact-form" id="try_free_form" action="{{ route('try-free.store') }}">
                                        <div class="mb-3">
                                            <input type="text" name="name"
                                                class="form-control bg-white font-size-14 fullname-input" id="fullName"
                                                placeholder="{{ __('Type your name') }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="phone"
                                                class="form-control bg-white font-size-14 number-input" id="phoneNumber"
                                                placeholder="{{ __('Phone Number') }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" name="email"
                                                class="form-control bg-white font-size-14 email-input" id="emailAddress"
                                                placeholder="{{ __('Type your Email Address') }}">
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-6 mb-3">
                                                <select class="form-select" name="number_of_branches" id="branchesNo">
                                                    <option value="" disabled selected>
                                                        {{ __('Number of Branches') }}
                                                    </option>
                                                    <option value="10">
                                                        5
                                                    </option>
                                                    <option value="10">
                                                        10
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <input type="text" class="form-control" name="business_name"
                                                    placeholder="{{ __('Business name') }}">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <select name="country" id="country" class="form-select">
                                                    <option value="" disabled selected>
                                                        {{ __('Country') }}
                                                    </option>
                                                    <option value="saudi arabia">
                                                        {{ __('Saudi Arabia') }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <select name="city" id="city" class="form-select">
                                                    <option value="" disabled selected>
                                                        {{ __('City') }}
                                                    </option>
                                                    <option value="riyadh">
                                                        {{ __('Riyadh') }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="bg-light-blue mb-3   p-3">
                                            <span class="d-block mb-3">
                                                {{ __('Contact me through') }}
                                            </span>
                                            <div class="d-flex justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="email"
                                                        name="contact_me_through" id="contactThorughEmail">
                                                    <label for="contactThorughEmail">
                                                        {{ __('Email') }}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="whatsApp"
                                                        name="contact_me_through" id="contactThorughWP">
                                                    <label for="contactThorughWP">
                                                        {{ __('WhatsApp') }}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="phone"
                                                        name="contact_me_through" id="contactThorughCall">
                                                    <label for="contactThorughCall">
                                                        {{ __('Phone Call') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit"
                                                class="btn btn-primary px-3 contact-btn m-0 text-center fw-medium btn-block w-100">
                                                {{ __('Send Message') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        @foreach ($pages->where('link', 'try_free_section_2')->first()?->getMedia() as $key => $img)
                            <div class="col-sm-6">
                                <img class="img-fluid w-100 d-block" alt="Image 3"
                                    src="{{ $img->geturl() }}" />
                            </div>
                        @endforeach
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

@push('scripts')
    <script type="text/javascript">
        $("#try_free_form").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    toastr.success('Message Sent Successfully')
                    $("#try_free_form").trigger('reset');
                },
                error: function(err) {
                    toastr.error(err.responseJSON.message)
                }
            });

        });
    </script>
@endpush
