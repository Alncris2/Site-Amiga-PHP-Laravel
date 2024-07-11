<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amiga') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('lib/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('lib/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/aos/dist/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/css/footer.css') }}" rel="stylesheet">

</head>

<body>

<header>
  @include('layouts._site._nav2')
</header>

@include('layouts._site._slides')
    


    <main class="py-4">
        @yield('content')
    </main>


    <footer>
    @include('layouts._site._footer')
    </footer>

</body>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/a03d9b062f.js" crossorigin="anonymous"></script>

<script src="{{ asset('lib/aos/src/js/aos.js') }}" defer></script>

<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}" defer></script>
<script src="{{ asset('lib/jquery.stellar/jquery.stellar.min.js') }}" defer></script>

<script src="{{ asset('lib/bootstrap/js/src/carousel.js') }}" defer></script>


<script src="{{ asset('lib/popper-core-master/src/popper.js') }}" defer></script>
<script src="{{ asset('lib/js/jquery.easing.1.3.js') }}" defer></script>

<script src="{{ asset('lib/js/nouislider.min.js') }}" defer></script>

<script src="{{ asset('lib/js/moment-with-locales.min.js') }}" defer></script>
<script src="{{ asset('lib/js/bootstrap-datetimepicker.min.js') }}" defer></script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

</html>