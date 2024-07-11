@if(isset($registro->imagemseg))

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
			<input type="text" name="descricao" class="form-control form-control-shadow validade" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
			<label class="form-control-placeholder" for="descrição">Descrição</label>
		</div>
	</div>
</div>

<div class="row justify-content-md">
	<div class="col-md-4">
		<div class="form-group">
			<input type="text" name="ordem" class="form-control form-control-shadow validade" value="{{ isset($registro->ordem) ? $registro->ordem : '' }}">
			<label class="form-control-placeholder" for="ordem">Ordem</label>
		</div>
	</div>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
			<span>Imagem</span>
			<input type="file" name="imagemseg">
		</div>
	</div>
	<div class="col m6 s12">
		<img width="120px" src="{{asset($registro->imagemseg)}}">
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