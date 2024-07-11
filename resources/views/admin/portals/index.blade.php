@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Lista de Arquivos
	</h2>

	<div class="row">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item active" aria-current="page">Lista de Arquivos</li>
			</ol>
		</nav>

	</div>

	<div class="row">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Título</th>
					<th scope="col">Arquivo</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td scope="row">{{ $registro->id }}</td>
					<td>{{ $registro->titulo }}</td>
					<td>{{ $registro->file }}</td>
					<td>
						<a class="btn btn-info btn-link" href="{{ route('admin.portals.editar', $registro->id) }}">Editar</a>
						<a class="btn btn-danger btn-link" href="javascript: if(confirm('deletar esse registro ?')){ window.location.href = '{{ route('admin.portals.deletar',$registro->id) }}' }">Deletar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="row">
		<a class="btn btn-outline-primary" href="{{ route('admin.portals.adicionar') }}">Adicionar</a>
	</div>

@endsection
