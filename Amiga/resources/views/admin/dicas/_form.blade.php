<div class="input-field">
	<input type="text" name="titulo" class="validade" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
	<label>Título</label>
</div>

<div class="input-field">
	<input type="text" name="descrição" class="validade" value="{{ isset($registro->descrição) ? $registro->descrição : '' }}">
	<label>Descrição</label>
</div>

<div class="input-field col s12">
	<select name="tipo_id">
		@foreach ($tipos as $tipo)
		<option value="{{ $tipo->id }}" {{( isset($registro->tipo_id) && $registro->tipo_id == $tipo->id ? 'selected' : '')}}>
			{{$tipo->titulo}}</option>
		@endforeach
	</select>
	<label>Tipo da Dica</label>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
			<span>Imagem</span>
			<input type="file" name="imagem">
		</div>

		<div class="file-path-wrapper">
			<input type="text" class="file-path validade">
		</div>

	</div>
	<div class="col m6 s12">
		@if(isset($pagina->imagem))
			<img width="120px" src="{{asset($registro->imagem)}}">
		@endif
	</div>
</div>

<div class="input-field col s12">
	<select name="publicar">
		<option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao' ? 'selected' : '')}}>
			Não
		</option>
		<option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim' ? 'selected' : '')}}>
			Sim
		</option>
	</select>
	<label>Publicar?</label>
</div>