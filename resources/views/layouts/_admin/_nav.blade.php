<section class="header-site">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-danger" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.principal') }}">Amiga Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu</button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('admin.principal') }}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-home mr-2"></i> Home</a></li>
                    <li class="nav-item"><a href="{{ route('site.home') }}" target="_blank" class="nav-link icon d-flex align-items-center"><i class="ion-md-browsers mr-2"></i> Site</a></li>
                    @if(Auth::guest())
                    <li class="nav-item"><a href="{{ route('admin.login') }}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-calendar mr-2"></i> login</a></li>
                    @else
                    <li class="nav-item d-flex dropdown">
                        <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ion-ios-contact mr-2"></i> {{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" id="#" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.guias') }}"> Guias</a>
                            <a class="dropdown-item" href="{{ route('admin.portals') }}"> Portal</a>
                            <a class="dropdown-item" href="{{ route('admin.tipos') }}"> Tipos</a>
                            <a class="dropdown-item" href="{{ route('admin.slides') }}"> Slides</a>
                            <a class="dropdown-item" href="{{ route('admin.usuarios') }}"> Usuários</a>
                            <a class="dropdown-item" href="{{ route('admin.paginas') }}"> Páginas</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('admin.login.sair') }}" class="nav-link icon d-flex align-items-center"><i class="ion-ios-exit mr-2"></i> Sair</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</section>