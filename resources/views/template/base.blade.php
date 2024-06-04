<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('judul')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-utama.png')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/icons/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
  </head>
  <body>

    <!-- Header -->
    @include('template.header')

    <!-- Main Content -->
    <div id="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('template.footer')


    <script src="{{ asset('assets/js/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/countUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/phosphor-icons.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
  </body>
</html>
