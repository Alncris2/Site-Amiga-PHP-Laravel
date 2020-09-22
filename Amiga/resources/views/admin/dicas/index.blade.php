@extends('layouts.app')

@section('content')
	<div class="container">
			<h2 class="center">Lista de Dicas
			</h2>
			
			<div class="row">
				 <nav>
	  				  <div class="nav-wrapper green">
	    				  <div class="col s12">
	    					    <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
	        					<a class="breadcrumb">Lista de Dicas</a>
	   					  </div>
	   				  </div>
	 			 </nav>
			</div>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Título</th>
						<th>Tipo</th>
						<th>Imagem</th>
						<th>Publicado</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->titulo }}</td>
						<td>{{ $registro->tipo->titulo }}</td>
						<td><img width="100px" height="100px" src="{{asset($registro->imagem)}}"></td>
						<td>{{ $registro->publicar }}</td>

						<td>
							<a class="btn orange" href=" {{ route('admin.dicas.editar', $registro->id) }}">Editar</a>
							<a class="btn red" href="javascript: if(confirm('deletar esse registro ?')){ window.location.href = '{{ route('admin.dicas.deletar',$registro->id) }}' }">Deletar</a> 
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="row">
			<a class="btn blue" href="{{ route('admin.dicas.adicionar') }}">Adicionar</a>
		</div>
	</div>

@endsection