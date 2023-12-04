<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>

    @hasSection('meta')
        @yield('meta')

    @else
        <title>{{ setting('site.title') }}</title>
        <meta name="description" content="آموزش رایگان برنامه نویسی ">
    @endif

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">


    <link rel="canonical" href="{{ urldecode(request()->fullUrl()) }}">

    <!-- WebSite schema with Social Media Profiles -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "zedd dev",
            "url": "{{ url('/') }}",
            "sameAs": [
              "https://www.youtube.com/channel/UCN-fTjC-DKFnh8AOpcpjkoQ",
              "https://www.linkedin.com/in/zeinab-yari-0927aa1b4",
              "https://www.instagram.com/zedd__dev" ,
              "https://zedd-dev.com/single_course/t.me/zedd_community"
            ],
{{--            "potentialAction": {--}}
{{--                "@type": "SearchAction",--}}
{{--                "target": "{{ url('/search?q={search_term_string}') }}",--}}
{{--                "query-input": "required name=search_term_string"--}}
{{--            }--}}
        }


    </script>
    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function (theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })

    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ Voyager::image( setting('site.favicon') )}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/tiny-slider/tiny-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/glightbox/css/glightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/aos/aos.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">

</head>

<body>
<!-- Pre loader -->
<div class="preloader">
    <div class="preloader-item">
        <div class="spinner-grow text-primary"></div>
    </div>
</div>

<!-- Header START -->
@include('header')
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
@yield('content')
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('footer')
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('assets/vendor/tiny-slider/tiny-slider-rtl.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.js')}}"></script>
<script src="{{asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>

</html>
