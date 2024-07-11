@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Usuário</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.usuarios') }}">Lista de Usuários</a></li>
				<li class="breadcrumb-item active" aria-current="page">Adicionar Usuários</li>
			</ol>
		</nav>
	</div>
</div>

<div class="content-site">
	<div class="container">
		<form action="{{ route('admin.usuarios.salvar') }}" method="post">

			{{ csrf_field() }}
			@include('admin.usuarios._form')

			<button class="btn btn-outline-primary">Adicionar</button>
		</form>
	</div>
</div>

@endsection