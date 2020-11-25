@if(isset($registro->imagem))

<div class="row justify-content-md">
	<div class="col-md-2">
		<div class="form-group">
			<input type="text" name="titulo" class="form-control form-control-shadow validade" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
			<label class="form-control-placeholder" for="descricao">Título</label>
		</div>
	</div>
</div>

<div class="row justify-content-md">
	<div class="col-md-4">
		<div class="form-group">
			<input type="text" name="descrição" class="form-control form-control-shadow validade" value="{{ isset($registro->descrição) ? $registro->descrição : '' }}">
			<label class="form-control-placeholder" for="descrição">Descrição</label>
		</div>
	</div>
</div>

<div class="row justify-content-md">
	<div class="col-md-4">
		<div class="form-group">
			<input type="text" name="descrição" class="form-control form-control-shadow validade" value="{{ isset($registro->Ordem) ? $registro->descrição : '' }}">
			<label class="form-control-placeholder" for="descrição">Ordem</label>
		</div>
	</div>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
			<span>Imagem</span>
			<input type="file" name="imagem">
		</div>
	</div>
	<div class="col m6 s12">
		<img width="120px" src="{{asset($registro->imagem)}}">
	</div>
</div>
<br>

@else

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
			<span>Upload de Imagens</span>
			<input type="file" multiple name="imagens[]">
		</div>
	</div>
</div>


@endif