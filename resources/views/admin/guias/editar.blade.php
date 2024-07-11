@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Guias</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.guias') }}">Lista de Guias</a></li>
				<li class="breadcrumb-item active" aria-current="page">Editar Guia</li>
			</ol>
		</nav>
	</div>
</div>

<div class="content-site">
	<div class="container">
		<form action="{{ route('admin.guias.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">

			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">
			@include('admin.guias._form')

			<button class="btn btn-outline-primary">Atualizar</button>

		</form>
	</div>

</div>


@endsection