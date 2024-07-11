@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Slides</h2>
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.principal') }}">Início</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.slides') }}">Lista de Slides</a></li>
				<li class="breadcrumb-item active" aria-current="page">Adicionar Slide</li>
			</ol>
		</nav>
	</div>
</div>


	<div class="content-site">
		<div class="container">
			<form action="{{ route('admin.slides.salvar') }}" method="post" enctype="multipart/form-data">

				{{ csrf_field() }}
				@include('admin.slides._form')

				<button class="btn btn-outline-primary">Adicionar</button>

			</form>
		</div>

	</div>


	@endsection