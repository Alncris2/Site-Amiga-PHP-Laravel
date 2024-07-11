<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-danger ftco-navbar-light" id="ftco-navbar">
  <div class="container"> 
    <a class="navbar-brand" href="{{ route('site.home') }}">{{ config('app.name', 'Amiga') }}</a>
          <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu</button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ route('site.home') }}" class=" nav-link icon d-flex align-items-center"><i class="ion-ios-home mr-2"></i> Home</a></li>
          <!-- <li class="nav-item"><a href="atividades.html" class="nav-link icon d-flex align-items-center"><i
                class="ion-ios-calendar mr-2"></i> Atividades</a></li> -->
          <li class="nav-item"><a href="{{route('site.noticia')}}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-text-snippet mr-2"></i> Notícias</a></li>
          <li class="nav-item"><a href="{{route('site.sobre')}}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-text-snippet mr-2"></i> Sobre</a></li>
          <li class="nav-item"><a href="{{route('site.contato')}}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-text-snippet mr-2"></i> Contatos</a></li>
          <li class="nav-item"><a href="{{route('site.portal')}}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-text-snippet mr-2"></i> Portal Trasparência</a></li>
        </ul>
      </div>
  </div>
</nav>