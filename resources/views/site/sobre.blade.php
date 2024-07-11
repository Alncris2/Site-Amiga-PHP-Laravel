	@extends('layouts.site')

	@section('content')
	<section class="content-site">
		<div class="container">
			<div class="row section">
				<div class="panel-body">
					@if(isset($pagina->mapa1))
					<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
						<!--Google map-->
						{!! $pagina->mapa !!}
					</div>

					@else
					<div class="col-sm-6">
						<figure>
							<img src=" {{ asset($pagina->imagem) }} " width="95%" height="95%" alt="Imagem Xis">
						</figure>
					</div>
					@endif

					<h2 class="text-center"> {{ $pagina->titulo}} </h2>
					<blockquote class="blockquote text-center "> {{ $pagina->descricao}}</blockquote>
					<br>
					<div class="text-justify recuo">
					{!! nl2br( $pagina->texto ) !!}
					</div>
				</div>
			</div>
			</>
	</section>
	@endsection