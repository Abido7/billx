@extends('layouts.guest')
@section('style')
    <style>
        @media (max-width: 768px) {
            .ads-section {
                background-image: none !important;
                display: none
            }
        }
    </style>
@endsection
@section('content')
    <main id="main_root" class="main-root"><!-- Page Content -->
        <div id="page_wrapper" class="wrapper">
            <!-------------------------------------- Start Body ------------------------------------------>

            <section class="section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <p class="ads-section" style="height: 270px;"></p>
                                <div loading="lazy" class="text-center ads-section"
                                    style="background-image: url('{{ $pages->where('link', 'ads_section_left')->first()?->getFirstMediaUrl() }}');
                                        background-size: contain;
                                        background-repeat:no-repeat;
                                        width: 300px;
                                        height: 300px;"
                                    alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-box">
                                    <img loading="lazy" style="height: 100px" class="img-fluid" alt="Image"
                                        src="{{ $pages->where('link', 'ads')->first()?->getFirstMediaUrl() }}" />
                                    <h5 class="title mt-3 mb-4">
                                        {{ $pages->where('link', 'ads')->first()?->getTranslation('title') }}
                                    </h5>
                                    <div class="col-md-auto me-md-auto ms-md-0 text-center">
                                        <ul class="nav footer-social-nav flex-column justify-content-center">
                                            @foreach ($settings->where('title', 'like', 'Billx Gps') as $link)
                                                <li class="my-1 btn btn-transparent shadow bg-white rounded">
                                                    <div class="container">
                                                        <a class="row" href="{{ url($link->value ?? '/') }}"
                                                            target="_blank" rel="nofollow">
                                                            <div class="col-10">
                                                                <span>{{ $link->title }}</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="btn btn-transparent">
                                                                    <i class="fa-brands fa-android"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @foreach ($settings->where('title', 'like', 'twitter') as $link)
                                                <li class="my-1 btn btn-transparent shadow bg-white rounded">
                                                    <div class="container">
                                                        <a class="row" href="{{ url($link->value ?? '/') }}"
                                                            target="_blank" rel="nofollow">
                                                            <div class="col-10">
                                                                <span>{{ $link->title }}</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="btn btn-transparent">
                                                                    <i class="fa-brands fa-twitter"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @foreach ($settings->where('title', 'like', 'facebook') as $link)
                                                <li class="my-1 btn btn-transparent shadow bg-white rounded">
                                                    <div class="container">
                                                        <a class="row" href="{{ url($link->value ?? '/') }}"
                                                            target="_blank" rel="nofollow">
                                                            <div class="col-10">
                                                                <span>{{ $link->title }}</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="btn btn-transparent">
                                                                    <i class="fa-brands fa-facebook-f"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @foreach ($settings->where('title', 'like', 'instagram') as $link)
                                                <li class="my-1 btn btn-transparent shadow bg-white rounded">
                                                    <div class="container">
                                                        <a class="row" href="{{ url($link->value ?? '/') }}"
                                                            target="_blank" rel="nofollow">
                                                            <div class="col-10">
                                                                <span>{{ $link->title }}</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="btn btn-transparent">
                                                                    <i class="fa-brands fa-instagram"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @foreach ($settings->where('title', 'like', 'github') as $link)
                                                <li class="my-1 btn btn-transparent shadow bg-white rounded">
                                                    <div class="container">
                                                        <a class="row" href="{{ url($link->value ?? '/') }}"
                                                            target="_blank" rel="nofollow">
                                                            <div class="col-10">
                                                                <span>{{ $link->title }}</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="btn btn-transparent">
                                                                    <i class="fa-brands fa-github"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @foreach ($settings->where('title', 'like', 'youtube') as $link)
                                                <li class="my-1 btn btn-transparent shadow bg-white rounded">
                                                    <div class="container">
                                                        <a class="row" href="{{ url($link->value ?? '/') }}"
                                                            target="_blank" rel="nofollow">
                                                            <div class="col-10">
                                                                <span>{{ $link->title }}</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="btn btn-transparent">
                                                                    <i class="fa-brands fa-youtube"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @foreach ($settings->where('title', 'like', 'Billx Support') as $link)
                                                <li class="my-1 btn btn-transparent shadow bg-white rounded">
                                                    <div class="container">
                                                        <a class="row" href="{{ url($link->value ?? '/') }}"
                                                            target="_blank" rel="nofollow">
                                                            <div class="col-10">
                                                                <span>{{ $link->title }}</span>
                                                            </div>
                                                            <div class="col-2">
                                                                <div class="btn btn-transparent">
                                                                    <i class="fa-brands fa-whatsapp"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <p class="ads-section" style="height: 270px;"></p>
                                <div loading="lazy" class="text-center ads-section"
                                    style="background-image: url('{{ $pages->where('link', 'ads_section_right')->first()?->getFirstMediaUrl() }}');
                                         background-size: contain;
                                         background-repeat:no-repeat;
                                                width: 300px;
                                                height: 300px;"
                                    alt="Image">
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
@push('scripts')
    <script type="text/javascript">
        $("#contactus-form").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    toastr.success('Message Sent Successfully')
                    $("#contactus-form").trigger('reset');
                },
                error: function(err) {
                    toastr.error(err.responseJSON.message)
                }
            });

        });
    </script>
@endpush
