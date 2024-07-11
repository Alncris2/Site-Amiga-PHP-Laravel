@extends('layouts.site')

@section('content')
<div class="content-site">
	<div class="container">
		<div class="row">
			<h3 align="text-center">Título da Notícia</h3>
			<div class="divider"></div>

		</div>
		<br>
		<h2 class="text-center">Sub-título</h2><br>
	</div>
	<div class="container">
		<div class="row">
			<div>
				<div class="col-sm-6">
					<figure>
						<img src="{{asset('lib/imgnews/img2.jpg')}}" height="100%" width="95%" imagem.jpg" alt="Imagem Xis">
					</figure>
				</div>


				<p class="text-justify">
				{!! nl2br ($->texto) !!}
				</p>
				<BR>
				<div class="col-xs-10 text-center">
					<img src="{{asset('lib/imgnews/img3.jpg')}}" height="100%" width="95%" imagem.jpg" alt="Imagem Xis">
				</div>

				</BR>

				<p class="text-justify">
				{!! nl2br ($->texto) !!}
				</p>
				<h6>Atividade</h6>
			</div>
		</div>
	</div>
</div>

@endsection