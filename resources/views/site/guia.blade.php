@extends('layouts.site')

@section('content')
<section class="content-site">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center">{{ $guia->titulo }}</h2>

				<h5 class="text-center">{{ $guia->descrição }}</h5>
			</div>
		</div>

		<br><br>

		<div class="row">
			<div>
				<div class="col-sm-6">
					<figure>
						<img src=" {{ asset($guia->imagem) }}" height="100%" width="95%" imagem.jpg" alt="Imagem Xis">
					</figure>
				</div>

				<p class="text-justify">
					{!! nl2br ($guia->texto) !!}
				</p>
				<BR>


				<div class="col-xs-10 text-center">
					<?php if (count($guia->galeria) > 0) : ?>
						<!-- aqui inserimos o slider -->
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<!-- Indicatodores -->
							<ol class="carousel-indicators">
								<?php $cnt = 0;
								$cnt1 = 0;
								foreach ($guia->galeria as $imagemseg) : ?>
									<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $cnt ?>" class="<?php if ($cnt == 0) { echo 'active'; } ?>"></li>
								<?php $cnt++;
								endforeach; ?>
							</ol>

							<!-- Contenedor de las imagenes -->
							<div class="carousel-inner" role="listbox">
								<?php $cnt = 0;
								foreach ($guia->galeria as $imagemseg) : ?>
									<div class="carousel-item <?php if ($cnt1 == 0) {
																	echo 'active';
																} ?>">
										<img class="d-block w-100" src="{{ asset($imagemseg->imagemseg) }}" height="100%" width="95%" imagem.jpg" alt="Imagem Xis">
										<div class="carousel-caption d-none d-md-block">
											<h1 class="mb-4"><span>{{ $imagemseg->titulo }}</span></h1>
											<h4 class="mb-5 mt-2">{{ $imagemseg->descricao }}</h4>
										</div>
									</div>
								<?php $cnt1++;
								endforeach; ?>
							</div>

							<!-- Controls -->
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Próximo</span>
							</a>

						</div>
					<?php else : ?>
                        <?php if (isset($guia->imagemseg)) : ?>                        
						    <img src=" {{ asset($guia->imagemseg) }}" height="100%" width="95%" imagem.jpg" alt="Notícia">
                        <?php endif; ?>
					<?php endif; ?>


				</div>


				</BR>

				<p class="text-justify">
					{!! nl2br ($guia->paragrafo2) !!}
				</p>
				<h6>{{ $guia->tipo->titulo }}</h6>
			</div>
		</div>
	</div>
</section>

@endsection