@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Usuário</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.usuarios') }}">Lista de Usuários</a></li>
				<li class="breadcrumb-item active" aria-current="page">Editar Usuários</li>
			</ol>
		</nav>
	</div>
</div>
<div class="content-site">
	<div class="container">
		<form action="{{ route('admin.usuarios.atualizar', $usuario->id) }}" method="post">

			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">
			@include('admin.usuarios._form')

			<button class="btn btn-outline-primary">Atualizar</button>
		</form>
	</div>
</div>
</div>



@endsection