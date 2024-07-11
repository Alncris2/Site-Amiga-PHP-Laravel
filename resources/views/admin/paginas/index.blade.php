@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Lista de Páginas
	</h2>

	<div class="row">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item active" aria-current="page">Lista de Páginas</li>
			</ol>
		</nav>

	</div>

	<div class="row">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Descrição</th>
					<th scope="col">Tipo</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($paginas as $pagina)
				<tr>
					<td scope="row">{{ $pagina->id }}</td>
					<td>{{ $pagina->titulo }}</td>
					<td>{{ str_limit($pagina->descricao, 45,'...') }} </td>
					<td>{{ $pagina->tipo }}</td>
					<td>
						<a class="btn btn-info btn-link" href="{{ route('admin.paginas.editar', $pagina->id) }}">Editar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection
