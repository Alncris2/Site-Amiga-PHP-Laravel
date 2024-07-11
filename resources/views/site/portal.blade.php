@extends('layouts.site')

@section('content')
<section class="content-site">
<div class="container">
    <div class="row section">
        <h3 align="center">Portal Trasparência</h3>
        <div class="divider"></div>
    </div>
    <div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
				@foreach($portals as $portal)
				<div class="col-md-3">
					<div class="card-deck">
						<div class="card mb-3 box-shadow">
							<a href="{{ route('site.portal',[$portal->id,str_slug($portal->titulo,'_')]) }}">
								<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="public\lib\img\arquivopng.png" data-holder-rendered="true">
							</a>
							<div class="card-body">
								<h5 class="card-title">{{ $portal->titulo }}</h5>
								<p class="card-text">{{ $portal->descricao }}</p>
								<a href="{{ route('site.portal',[$portal->id,str_slug($portal->titulo,'_')]) }}">
                                <a class="btn btn-info btn-link" href="{{ $portal->file }}" target="_blank">Visualizar</a>
								</a>
							</div>
						</div>
					</div>

				</div>
				@endforeach

                <div class="col-md-6">
					<div class="justify-content-center">
						@if ($paginacao)
						{{ $portals->links() }}
						@endif
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
</section>
@endsection
