@extends('layouts.guest')
@section('content')
    <main id="main_root" class="main-root"><!-- Page Content -->
        <div id="page_wrapper" class="wrapper">
            <!-------------------------------------- Start Body ------------------------------------------>

            <section class="section page-title-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="page-title mx-auto text-center">
                                <div class="text-box">
                                    <h1 class="mb-2 fw-bolder theme-lightblue-color">
                                        {{ $pages->where('link', 'plans')->first()?->getTranslation('title') }}
                                    </h1>
                                    <h2 class="fs-2 fw-semibold text-black">
                                        {{ $pages->where('link', 'plans')->first()?->getTranslation('content') }}
                                    </h2>
                                    <p class="mb-0 fw-light ">
                                        {{ $pages->where('link', 'plans')->first()?->getTranslation('sub_title') }}
                                     </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <section class="section .page-title-section">
                <div class="container">
                    <div class="row align-items-center">
                        @foreach ($plans as $plan)
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card text-center rounded-0 border-0">
                                    <div class="card-body p-5">
                                        <h3 class="fw-bold">
                                            ${{ $plan->price }}
                                        </h3>
                                        <p class=" mb-0">
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
                    <div class="row mt-5">
                        @foreach ($pages->where('link', 'plans')->first()?->getMedia() as $media)
                        <div class="col-sm-6">
                            <img class="img-fluid w-100 d-block" alt="Image 5" src="{{$media->getUrl()}}">
                        </div>
                        @endforeach
            
                    </div>
                </div>
            </section>
            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
