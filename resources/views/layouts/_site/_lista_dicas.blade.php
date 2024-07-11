<section class="content-site">
	<div class="container">
		<div class="row">

			@foreach($guias as $guia)
			<div class="col-xm-12">

				<div class="row section">
					<h1 align="center"><a href="#"><img src="{{asset('$guia->imagem')}}" alt="Notícias" width="20%" height="56%"></a></h1>
					<div class="divider"></div>
				</div>

				@include('layouts._site._filtros')
				<br><br>
				<div class="col-sm-4"></div>
				<div class="card-deck">
					<div class="card">
						<img src="{{asset('lib/imgnews/img3.jpg')}}" class="card-img-top" alt="Imagem" width="50%" height="31%">
						<div class="card-body">
							<h5 class="card-title">{{ $guia->titulo }}</h5>
							<h6>Notícia</h6>
							<p class="card-text">{{ $guia->descrição }}</p>
							<a href="#">
								<p class="card-action">Ver mais...</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>


<div class="col-md-6">
	<div class="pagination justify-content-center">
		<div class="pagination pagination-1 mb-4">
			<a href="#">&laquo;</a>
			<a class="active" href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#">5</a>
			<a href="#">&raquo;</a>
		</div>
	</div>
</div>