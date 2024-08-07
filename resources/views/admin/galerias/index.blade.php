@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Lista de Galerias
	</h2>

	<div class="row">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.guias') }}">Lista de Guias</a></li>
				<li class="breadcrumb-item active" aria-current="page">Galerias de Imagens</li>
			</ol>
		</nav>

	</div>

	<div class="row">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Título</th>
					<th scope="col">Imagem</th>
					<th scope="col">Ordem</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td scope="row">{{ $registro->id }}</td>
					<td>{{ $registro->titulo }}</td>
					<td><img width="100px" height="50px" src="{{asset($registro->imagemseg)}}"></td>
					<td>{{ $registro->ordem }}</td>
					<td>
						<a class="btn btn-info btn-link" href="{{ route('admin.galerias.editar', $registro->id) }}">Editar</a>
						<a class="btn btn-danger btn-link" href="javascript: if(confirm('deletar esse registro ?')){ window.location.href = '{{ route('admin.galerias.deletar',$registro->id) }}' }">Deletar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="row">
		<a class="btn btn-outline-primary" href="{{ route('admin.galerias.adicionar',$guia->id) }}">Adicionar</a>
	</div>

@endsection
