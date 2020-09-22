<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-danger ftco-navbar-ligh" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="layout.html">Amiga</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu</button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="layout.html" class="nav-link icon d-flex align-items-center"><i
                    class="ion-ios-home mr-2"></i> Home</a></li>
              <li class="nav-item"><a href="atividades.html" class="nav-link icon d-flex align-items-center"><i
                class="ion-ios-calendar mr-2"></i> Atividades</a></li>
             <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i
                class="ion-ios-text-snippet mr-2"></i> Notícias</a></li>
            </ul>
          </div>
        </div>
      </nav>        
	  </section>

    <main class="py-4">
        @yield('content')
    </main>



</body>

<!-- Scripts -->

<script src="{{ asset('lib/aos/src/js/aos.js') }}" defer></script>

<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}" defer></script>
<script src="{{ asset('lib/jquery.stellar/jquery.stellar.min.js') }}" defer></script>

<script src="{{ asset('lib/bootstrap/js/src/carousel.js') }}" defer></script>


<script src="{{ asset('lib/popper-core-master/src/popper.js') }}" defer></script>
<script src="{{ asset('lib/js/jquery.easing.1.3.js') }}" defer></script>

<script src="{{ asset('lib/js/nouislider.min.js') }}" defer></script>

<script src="{{ asset('lib/js/moment-with-locales.min.js') }}" defer></script>
<script src="{{ asset('lib/js/bootstrap-datetimepicker.min.js') }}" defer></script>

</html>