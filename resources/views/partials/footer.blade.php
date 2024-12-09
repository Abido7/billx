<footer class="main-footer">
    <div class="container">
        <div class="row gx-xl-5">
            <div class="col-lg-3 mb-4 footer-widget">
                <div class="widget about-us-widget">
                    <div class="theme-widget-header mb-md-4 mb-3">
                        <a class="d-inline-block m-0" href="#">
                            <img class="" alt="Logo" src="{{ asset('images/80988.png') }}" />
                        </a>
                    </div>
                    <div class="theme-widget-body">
                        <div class="text-box">
                            <p class="font-size-14">
                                {{__('In the fast-paced world of modern technology,many leadership executives and organizations understand that building.')}}
                            </p>
                            <h6 class="title mb-3">{{__('Get ready to start with us')}}</h6>
                            <div class='foot-btn'>
                                <a href="{{ url('try-free') }}"
                                    class="btn btn-primary d-flex align-items-center px-4 py-2 float-start">
                                    {{ __('try for free') }}
                                    <i class="fa-solid fa-angle-right fa-1x ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-4 footer-widget">
                <div class="widget">
                    <div class="theme-widget-header mb-md-4 mb-3">
                        <h4 class="widget-title">{{__('Company')}}</h4>
                    </div>
                    <div class="theme-widget-body">
                        <ul class="navbar-nav footer-nav">
                            <li class="nav-item"><a class="nav-link" href="{{ url('about_us') }}">{{__('About Us')}}</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('privacy') }}">
                                {{__('Privacy Poilcy')}}
                            </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('contact-us') }}">
                               {{__('Contact Us')}}
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-4 footer-widget">
                <div class="widget">
                    <div class="theme-widget-header mb-md-4 mb-3">
                        <h4 class="widget-title">{{__('Get Help')}}</h4>
                    </div>
                    <div class="theme-widget-body">
                        <ul class="navbar-nav footer-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('support') }}">
                            
                                    {{ __(str_replace('-', ' ', 'Support-Request')) }}
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('faq') }}">
                                
                                {{ __('Faq Questions') }}
                            </a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{ url('plans') }}">{{__('Plans')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 footer-widget">
                <div class="widget">
                    <div class="theme-widget-header mb-md-4 mb-3">
                        <h4 class="widget-title">{{__('Newsletter')}}</h4>
                    </div>
                    <div class="theme-widget-body">
                        <div class="text-box">
                            <p class="font-size-15 fw-light">
                               {{__('Sign up and receive the latest tips via email')}}
                            </p>
                            <form class="newsletter-form">
                                <input type="email" class="form-control form-control-lg mb-2 font-size-15"
                                    name="newsletterEmail" placeholder="{{__('Enter Your Mail')}}" />
                                <button type="button"
                                    class="btn btn-lg btn-primary d-flex align-items-center justify-content-center px-4 py-2 btn-block w-100 font-size-18 fw-medium">
                                   {{__('Subscribe Now')}}
                                    <i class="fa-solid fa-paper-plane fa-xs ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-12">
                <div class="border-bottom mb-2"></div>
            </div>
            <div class="col-md-auto me-md-auto ms-md-0 ms-auto me-auto">
                <ul class="nav footer-social-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com" target="_blank" rel="nofollow">
                            <img class="" alt="Facebook" src="{{ asset('images/facebook.svg') }}" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com" target="_blank" rel="nofollow">
                            <img class="" alt="Instagram" src="{{ asset('images/instagram.svg') }}" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank" rel="nofollow">
                            <img class="" alt="X" src="{{ asset('images/twitter.svg') }}" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank" rel="nofollow">
                            <img class="" alt="github" src="{{ asset('images/github.svg') }}" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-auto ms-md-auto me-md-0 me-auto ms-auto text-center">
                <p class="m-0 font-size-14">© 2024 <a class="link" href=" ">{{ __('BILLX') }}</a>
                    {{ __('All rights reserved') }}
                </p>
            </div>
        </div>
    </div>
</footer>
