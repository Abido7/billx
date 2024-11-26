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
                                        {{ $pages->where('link', 'gps')->first()?->getTranslation('title') }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="img-fluid w-100 object-fit-cover" alt="GPS Image"
                    src="{{ $pages->where('link', 'gps')->first()?->getFirstMediaUrl() }}" />
            </section>

            <section class="section bg-white with-texture-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row gx-lg-5 align-items-center">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <h3 class="title text-capitalize fw-bold mb-3">
                                            {{ $pages->where('link', 'gps_section_2')->first()?->getTranslation('title') }}
                                        </h3>
                                        <p>
                                        <p>
                                            {{ $pages->where('link', 'gps_section_2')->first()?->getTranslation('content') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box d-flex justify-content-center">
                                        <img class="img-fluid w-lg-75 d-inline-block" alt="Main Banner"
                                            src="{{ $pages->where('link', 'gps_section_2')->first()?->getFirstMediaUrl() }}" />
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
                                <img class="w-100" src="{{ asset('images/images-collection.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-box">
                                <h3 class="title mb-3">
                                    {{-- {{dd($pages->where('link', 'gps_sectoin_3')->first()?->getFirstMediaUrl())}} --}}
                                    {{ $pages->where('link', 'gps_section_3')->first()?->getTranslation('title') }}
                                </h3>
                                <p>
                                <div>
                                    <p id="description">
                                    <p>
                                        {{ $pages->where('link', 'gps_section_3')->first()?->getTranslation('content') }}
                                    </p>
                                    <ul>
                                        @foreach ($pages->toQuery()->where('link', 'like', '%gps_section_3_option_%')->get() as $page)
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
            </section>

            <section class="section bg-white">
                <div class="container">
                    <<div class="row mb-md-5 mb-4">
                        <div class="col-xl-11 mx-auto">
                            <div class="start-free-trail image_bg rounded p-5"
                                style="background-image: {{ url($pages->where('link', 'home_try_free')->first()?->getFirstMediaUrl()) }}">
                                <div class="text-box text-box-reverse d-md-flex align-items-center justify-content-between">
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
                                @if ($key > 2)
                                    <div class="col-sm-6">
                                        <img class="img-fluid w-100 d-block" alt="Image 3" src="{{ $img->getUrl() }}" />
                                    </div>
                                @endif
                            @endforeach

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
