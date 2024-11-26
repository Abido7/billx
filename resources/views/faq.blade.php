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
                                    {{ $pages->where('link', 'faq')->first()?->getTranslation('title') }}
                                </h1>
                                <p class="mb-3 mb-md-4 font-size-14">
                                    {{ $pages->where('link', 'faq')->first()?->getTranslation('content') }}
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
                            <div class="row gx-md-5">
                                <div class="col-lg-5 mb-lg-0 mb-4">
                                    <div class="text-box">
                                        <span class="title-subtile">
                                            {{ $pages->where('link', 'faq_section_2')->first()?->getTranslation('sub_title') }}

                                        </span>
                                        <h3 class="title mb-3">

                                            {{ $pages->where('link', 'faq_section_2')->first()?->getTranslation('title') }}

                                        </h3>
                                        <p class="mb-3 mb-md-4 font-size-14">
                                            {{ $pages->where('link', 'faq_section_2')->first()?->getTranslation('content') }}

                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-7">

                                    @foreach ($pages->toQuery()->where('link', 'like', '%faq_question_%')->get() as $key => $page)
                                        <div class="accordion theme-accordion" id="accordionExample{{ $key + 1 }}">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button " type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $key + 1 }}"
                                                        aria-expanded="true" aria-controls="collapse{{ $key + 1 }}">
                                                        {{ $page?->getTranslation('title') }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $key + 1 }}"
                                                    class="accordion-collapse collapse {{ $key == 1 ?: 'show' }}"
                                                    data-bs-parent="#accordionExample{{ $key + 1 }}">
                                                    <div class="accordion-body">
                                                        <p>
                                                            {{ $page?->getTranslation('content') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                </div>
            </section>

            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
