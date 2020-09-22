@extends('layouts.app')

@section('content')
	<div class="container">

		<h2 class="center">Editar Dica</h2>
		<div class="row">
			 <nav>
  				  <div class="nav-wrapper green">
    				  <div class="col s12">
    					    <a href="{{ route('admin.principal') }}" class="breadcrumb">Início</a>
        					<a href="{{ route('admin.dicas') }}" class="breadcrumb">Lista de Dicas</a>
        					<a class="breadcrumb">Editar Dica</a>
   					  </div>
   				  </div>
 			 </nav>
		</div>

		<div class="row">
			<form action="{{ route('admin.dicas.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">
			@include('admin.dicas._form')

			<button class="btn blue">Atualizar</button>

			</form>  
		</div> 

	</div>
	

@endsection