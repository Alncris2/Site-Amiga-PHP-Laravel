	@extends('layouts.site')

	@section('content')
	
	<div class="container">
		<div class="row section">
			<h3 align="center">Contato</h3>
			<div class="divider"></div>
		</div>
		<div class="row section">
			<div class="col s12 m7">
				<img class="responsive-img" src="{{asset($pagina->imagem)}}">
			</div>
			<div class="col s12 m5">
				<h4>{{ $pagina->titulo }}</h4>
				<blockquote>
					{{ $pagina->descricao}}
				</blockquote>
				<form class="col s12" action="{{ route('site.contato.enviar') }}" method="post">
					{{ csrf_field() }}
					<div class="imput-field">
						<label>Nome</label>
						<input type="text" name="nome" class="validade">
						
					</div>
					<div class="imput-field">
						<label>Email</label>
						<input type="email" name="email" class="validade">
						
					</div>
					<div class="imput-field">
						<label>Mensagem</label>
						<textarea name="mensagem" class="materialize-textarea"></textarea>
					</div>

					<button class="btn blue">Enviar</button>
				</form>
			</div>
		</div>
	</div>
	@endsection
