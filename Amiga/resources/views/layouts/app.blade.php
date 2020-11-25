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




    <header>
        @include('layouts._admin._nav')
    </header>


    @if(Session::has('mensagem'))
    <section class="ftco-section" id="notifications">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="{{ Session::get('mensagem')['class'] }}">

                        <div class="d-flex">
                            <div class="alert-icon">
                                <i class="{{ Session::get('icon')['class'] }}"></i>
                            </div>
                            <p class="mb-0 ml-2"><b>{{ Session::get('alert')['msg'] }}
                                    <div class="text-center">
                                        {{ Session::get('mensagem')['msg'] }}
                                    </div>
                            </p>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <main class="py-4">
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer class="footer navbar-fixed-bottom">
        @include('layouts._admin._footer')
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