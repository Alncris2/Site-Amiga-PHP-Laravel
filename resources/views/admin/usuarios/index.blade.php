@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Lista de Usuários
	</h2>

	<div class="row">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item active" aria-current="page">Lista de Usuários</li>
			</ol>
		</nav>

	</div>
	<div class="row">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">E-mail</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $usuario)
				<tr>
					<td scope="row">{{ $usuario->id }}</td>
					<td>{{ $usuario->name }}</td>
					<td>{{ $usuario->email }}</td>
					<td>
						<a class="btn btn-info btn-link" href=" {{ route('admin.usuarios.editar', $usuario->id) }}">Editar</a>
						<a class="btn btn-danger btn-link" href="javascript: if(confirm('deletar esse registro ?')){ window.location.href = '{{ route('admin.usuarios.deletar',$usuario->id) }}' }">Deletar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="row">
		<a class="btn btn-outline-primary" href="{{ route('admin.usuarios.adicionar') }}">Adicionar</a>
	</div>
</div>

@endsection