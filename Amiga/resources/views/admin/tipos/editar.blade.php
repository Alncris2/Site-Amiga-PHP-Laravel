@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Páginas</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.tipos') }}">Lista de Tipos</a></li>
				<li class="breadcrumb-item active" aria-current="page">Editar Tipo</li>
			</ol>
		</nav>
	</div>
</div>

<div class="content-site">
	<div class="container">
		<form action="{{ route('admin.tipos.atualizar', $registro->id) }}" method="post">

			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">
			@include('admin.tipos._form')

			<button class="btn btn-outline-primary">Atualizar</button>
		</form>
	</div>
</div>


@endsection