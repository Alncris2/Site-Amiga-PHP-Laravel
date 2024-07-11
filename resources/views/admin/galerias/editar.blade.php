@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Imagem</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.galerias',$guia->id) }}">Galerias de Imagens</a></li>
				<li class="breadcrumb-item active" aria-current="page">Editar Imagem</li>
			</ol>
		</nav>
	</div>
</div>

<div class="content-site">
	<div class="container">
		<form action="{{ route('admin.galerias.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">

			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">
			@include('admin.galerias._form')

			<button class="btn btn-outline-primary">Atualizar</button>

		</form>
	</div>

</div>


@endsection