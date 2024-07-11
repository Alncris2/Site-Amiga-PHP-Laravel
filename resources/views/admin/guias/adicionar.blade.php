@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Guia</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.guias') }}">Lista de Guias</a></li>
				<li class="breadcrumb-item active" aria-current="page">Adicionar guia</li>
			</ol>
		</nav>
	</div>
</div>


	<div class="content-site">
		<div class="container">
			<form action="{{ route('admin.guias.salvar') }}" method="get">

				{{ csrf_field() }}
				@include('admin.guias._form')

				<button class="btn btn-outline-primary">Adicionar</button>

			</form>
		</div>

	</div>


	@endsection