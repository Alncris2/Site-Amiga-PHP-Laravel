<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ isset($app['name']) ? $app['name']: config('app.name') }}</title>
    <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao']: config('seo.descricao') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo']: config('seo.titulo') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url']: config('app.url') }}"/>
    <meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem']: config('seo.imagem') }}"/>
    <meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao']: config('seo.descricao') }}"/>

    <!-- Scripts -->


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('public/lib/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/lib/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/lib/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('public/lib/aos/dist/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('public/lib/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('public/lib/css/footer.css') }}" rel="stylesheet">

</head>

<body>

<header>
  @include('layouts._site._nav')
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
    <main role="main">
        @yield('content')
    </main>

    <footer>
    @include('layouts._site._footer')
    </footer>

</body>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/a03d9b062f.js" crossorigin="anonymous"></script>

<script src="{{ asset('public/lib/aos/src/js/aos.js') }}" defer></script>

<script src="{{ asset('public/lib/jquery/dist/jquery.min.js') }}" defer></script>
<script src="{{ asset('public/lib/jquery.stellar/jquery.stellar.min.js') }}" defer></script>

<script src="{{ asset('public/lib/bootstrap/js/src/carousel.js') }}" defer></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

<script src="{{ asset('public/lib/js/jquery.easing.1.3.js') }}" defer></script>

<script src="{{ asset('public/lib/js/nouislider.min.js') }}" defer></script>

<script src="{{ asset('public/lib/js/moment-with-locales.min.js') }}" defer></script>
<script src="{{ asset('public/lib/js/bootstrap-datetimepicker.min.js') }}" defer></script>

</html>