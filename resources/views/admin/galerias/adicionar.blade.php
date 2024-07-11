@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar galeria</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.galerias',$guia->id) }}">Galerias de Imagens</a></li>
				<li class="breadcrumb-item active" aria-current="page">Adicionar imagens</li>
			</ol>
		</nav>
	</div>
</div>


	<div class="content-site">
		<div class="container">
			<form action="{{ route('admin.galerias.salvar', $guia->id) }}" method="get">

				{{ csrf_field() }}
				@include('admin.galerias._form')

				<button class="btn btn-outline-primary">Adicionar</button>

			</form>
		</div>

	</div>


	@endsection