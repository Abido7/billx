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
                                    {{ $pages->where('link', 'privacy')->first()?->getTranslation('title') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section bg-white py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="row">
                                <div class="col-12">
                                    {!! $pages->where('link', 'privacy')->first()?->getTranslation('content') !!}
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
