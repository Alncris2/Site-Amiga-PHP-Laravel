	@extends('layouts.site')

	@section('content')
	<div class="content-site">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="well well-sm">
						<form class="form-horizontal" action="{{ route('site.contato.enviar') }}" method="post">
							<fieldset>
								<legend class="text-center header">{{ $pagina->descricao }}</legend>
								{{ csrf_field() }}
								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<input id="fname" name="name" type="text" placeholder="Nome" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<input id="email" name="email" type="text" placeholder="E-mail" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<input id="phone" name="phone" type="text" placeholder="Telefone" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<textarea class="form-control" id="message" name="message" placeholder="Escreva a mensagem" rows="7"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 text-center">
										<button type="submit" class="btn btn-danger btn-lg" disabled>Desativado</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<div class="panel panel-default">
							<legend class="text-center header">{{ $pagina->titulo }}</legend>
							<div class="panel-body text-center">

								<div>
									<div class="text-justify">
									{!! nl2br( $pagina->texto ) !!}
									</div>
								</div>
								<hr />

								<div class="map">
									@if(isset($pagina->mapa))
									<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
										<!--Google map-->
										{!! $pagina->mapa !!}
									</div>

									@else
									<div class="col-sm-5">
										<figure>
											<img class="responsive-img" src="{{asset('lib/img/amiga2.jpeg')}}" width="70%" height="60%">
										</figure>
									</div>
									@endif


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection