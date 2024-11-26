<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}">

<head>
    <title> {{ config('app.name', 'Laravel') }}
        {{ ' | ' . ucfirst(\Illuminate\Support\Str::afterLast(url()->current(), '/')) }}</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Billx is a POS and GPS system that helps you manage your business with ease.">

    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ app()->getLocale() == 'ar' ? asset('css/stylesRTL.css') : '' }}">

    @yield('style')

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased bg-light">
    <!-- ========== Header ========== -->
    @include('/partials/header')
    <!-- ========== Header ========== -->


    @yield('content')

    <!-- ========== footer ========== -->
    @include('/partials/footer')
    <!-- ========== footer ========== -->
    {{-- @yield('scripts') --}}
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $(document).find("#vision").hide();
        });

        const missionBtn = document.getElementById('mission-btn');
        const visionBtn = document.getElementById('vision-btn');
        const description = document.getElementById('description');
        const originalDescription = description.textContent;

        missionBtn.addEventListener('click', () => {
            missionBtn.classList.add('btn-primary');
            visionBtn.classList.remove('btn-primary');
            $('#vision').hide();
            $('#mission').show();

        });

        visionBtn.addEventListener('click', () => {
            visionBtn.classList.add('btn-primary');
            missionBtn.classList.remove('btn-primary');
            $('#mission').hide();
            $('#vision').show();
        });
    </script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            let nums = document.querySelectorAll(".nums .num");
            let section = document.querySelector(".homenumber");
            let started = false;
            let sectionBottom = section.offsetTop + section.offsetHeight;

            window.addEventListener("scroll", function() {
                if (!started && window.scrollY + window.innerHeight >= sectionBottom) {
                    nums.forEach(num => startCount(num));
                    started = true;
                }
            });

            function startCount(el) {
                let goal = parseInt(el.getAttribute("data-goal"));
                let count = 0;
                let increment = Math.ceil(goal / 100);
                let interval = setInterval(function() {
                    count += increment;
                    if (count >= goal) {
                        count = goal;
                        clearInterval(interval);
                    }
                    el.textContent = count;
                }, 20);
            }
        });
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            let nums = document.querySelectorAll(".nums .num");
            let section = document.querySelector(".homenumber");
            let started = false;
            let sectionBottom = section.offsetTop + section.offsetHeight;

            window.addEventListener("scroll", function() {
                if (!started && window.scrollY + window.innerHeight >= sectionBottom) {
                    nums.forEach(num => startCount(num));
                    started = true;
                }
            });

            function startCount(el) {
                let goal = parseInt(el.getAttribute("data-goal"));
                let count = 0;
                let increment = Math.ceil(goal / 100);
                let interval = setInterval(function() {
                    count += increment;
                    if (count >= goal) {
                        count = goal;
                        clearInterval(interval);
                    }
                    el.textContent = count;
                }, 20);
            }
        });
    </script>

    <script src="{{ asset('https://unpkg.com/aos@2.3.1/dist/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>

    <!-- <script>
        function setActive() {
            linkObj = document.getElementById('nav').getElementsByTagName('a');
            for (i = 0; i < linkObj.length; i++) {
                if (document.location.href.indexOf(linkObj[i].href) >= 0) {
                    linkObj[i].classList.add("active");
                }
            }
        }

        window.onload = setActive;
    </script> -->
    <!-- JS -->
    @stack('scripts')
</body>

</html>
