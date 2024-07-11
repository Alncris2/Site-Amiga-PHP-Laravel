@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Páginas</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.tipos') }}">Lista de Tipos</a></li>
				<li class="breadcrumb-item active" aria-current="page">Adicionar Tipo</li>
			</ol>
		</nav>
	</div>
</div>

<div class="content-site">
	<div class="container">
		<form action="{{ route('admin.tipos.salvar') }}" method="post">

			{{ csrf_field() }}
			@include('admin.tipos._form')

			<button class="btn btn-outline-primary">Adicionar</button>
		</form>
	</div>
</div>
@endsection