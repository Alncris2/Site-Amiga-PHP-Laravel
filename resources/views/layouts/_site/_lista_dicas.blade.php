<section class="content-site">
	<div class="container">
		<div class="">
			<div class="col-xm-12">
				<h1 class="text-center header text-danger">Notícias</h1>
			</div>
			<br>
		</div>
	</div>


	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
				@foreach($guias as $guia)
				<div class="col-md-3">
					<div class="card-deck">
						<div class="card mb-3 box-shadow">
							<a href="{{ route('site.guia',[$guia->id,str_slug($guia->titulo,'_')]) }}">
								<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{asset($guia->imagem)}}" data-holder-rendered="true">
							</a>
							<div class="card-body">
								<h5 class="card-title">{{ $guia->titulo }}</h5>
								<h6>{{ $guia->tipo->titulo }}</h6>
								<p class="card-text">{{ $guia->descrição }}</p>
								<a href="{{ route('site.guia',[$guia->id,str_slug($guia->titulo,'_')]) }}">
									<p class="card-action">Ver mais...</p>
								</a>
							</div>
						</div>
					</div>

				</div>
				@endforeach

				<div class="col-md-6">
					<div class=" justify-content-center">
						@if ($paginacao)
						{{ $guias->links() }}
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>