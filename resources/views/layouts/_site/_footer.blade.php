<footer class="footer-site">
  <footer id="footer-site">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h2 class="logo navbar-brand"><a href="{{route('site.home')}}">{{ config('app.name', 'Amiga') }}</a></h2>
        </div>
        <div class="col-sm-2">
        </div>
        <div class="col-sm-2">
          <h5>Inicio</h5>
          <ul>
            <li><a href="{{route('site.home')}}">Home</a></li>
            <li><a href="{{route('admin.principal')}}">Gerenciador</a></li>
          </ul>
        </div>
        <div class="col-sm-2">
          <h5>Sobre-nós</h5>
          <ul>
            <li><a href="{{route('site.home')}}">Informações</a></li>
            <li><a href="{{route('site.contato')}}">Contato</a></li>
            <li><a href="{{route('site.portal')}}">Portal</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          </div>
          <a href="{{route('site.contato')}}">
            <button type="button" class="btn btn-default">Contato</button>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
    <p>© 2020 Copyright - J&J - Suporte e Manutenção</p>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</footer>