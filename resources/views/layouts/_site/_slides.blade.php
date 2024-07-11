<section class="ftco-section ftco-no-pt ftco-no-pb" id="carousel">
	<div class="container-fluid px-0">
		<div class="row no-gutters justify-content-center">
			<div class="col-md-12">
				<div id="demo" class="carousel slide" data-ride="carousel">

					<!-- Indicators -->
					<ul class="carousel-indicators">
						<?php if (isset($pagina->imagem)) : ?>
							<?php $cnt = 0;
							$cnt1 = 0;
							foreach ($slides as $slide) : ?>
								<li data-target="#demo" data-slide-to="<?php echo $cnt ?>" <?php if ($cnt == 0) {
																								echo 'active';
																							} ?>"></li>
							<?php $cnt++;
							endforeach; ?>
						<?php else : ?>
							<li data-target="#demo" data-slide-to="1" class="active"></li>
						<?php endif; ?>
					</ul>
					<!-- The slideshow -->
					<div class="carousel-inner">
						<?php if (isset($slide->imagem)) : ?>
							<?php $cnt = 0;
							foreach ($slides as $slide) : ?>
								<div onclick="window.location='{{ $slide->link }}'" class="hero-wrap js-fullheight carousel-item <?php if ($cnt1 == 0) {
																																		echo 'active';
																																	} ?> img" style="background-image: url({{ asset($slide->imagem) }}); height: 100%; background-repeat: no-repeat;
                  background-attachment: fixed;">
									<div class="overlay"></div>
									<div class="container">
										<div class="row description js-fullheight align-items-center justify-content-center">
											<div class="carousel-caption d-none d-md-block">
												<h1 class="mb-4"><span>{{ $slide->titulo }}</span></h1>
												<h4 class="mb-5 mt-2 text-light"><span>{{ $slide->descricao }}</span></h4>
												@if($slide->link != null)
												<a class="btn btn-outline-primary" href="{{ $slide->link }}">Mais...</a>
												@endif
												<br>
											</div>

										</div>
									</div>
								</div>
							<?php $cnt1++;
							endforeach; ?>
						<?php else : ?>
							<div class="hero-wrap js-fullheight carousel-item active img" style="background-image: url('public/lib/img/capa.jpg'); height: 70%; background-repeat: no-repeat; background-attachment: fixed;">
									<div class="overlay"></div>
									<div class="container">
										<div class="row description js-fullheight align-items-center justify-content-center">
											<div class="carousel-caption d-none d-md-block">
												<h1 class="mb-4"><span>Adicione um Slide<span></h1>
												<br>
											</div>

										</div>
									</div>
								</div>
								
						<?php endif; ?>
					</div>

					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="ion-ios-arrow-round-back"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="ion-ios-arrow-round-forward"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- - - - - -end- - - - -  -->
</section>