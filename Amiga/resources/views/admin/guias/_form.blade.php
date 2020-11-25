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
<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
			<span>Imagem</span>
			<input type="file" name="imagem">
		</div>
	</div>
	<div class="col m6 s12">
		@if(isset($registro->imagem))
			<img width="120px" src="{{asset($registro->imagem)}}">
		@endif
	</div>
</div>
<br>


<div class="">
	<div class="form-group">
		<textarea name="texto" cols="90" class="form-contro" id="exampleFormControlTextarea3" rows="7">
		{{ isset($registro->texto) ? $registro->texto : '' }}
		</textarea>
		<label class="form-control-placeholder" for="exampleFormControlTextarea1">Texto</label>
	</div>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
			<span>Imagem no meio do texto</span>
			<input type="file" name="imagemseg">
		</div>
	</div>
	<div class="col m6 s12">
		@if(isset($registro->imagemseg))
			<img width="120px" src="{{asset($registro->imagemseg)}}">
		@endif
	</div>
</div>
<br>

<div class="">
	<div class="form-group">
		<textarea name="paragrafo2" cols="90" class="form-contro" id="exampleFormControlTextarea3" rows="7">
		{{ isset($registro->paragrafo2) ? $registro->paragrafo2 : '' }}
		</textarea>
		<label class="form-control-placeholder" for="exampleFormControlTextarea1">Segunda parte do texto</label>
	</div>
</div>



<!--
<div class="toggle-button-cover">
	<div class="button-cover d-flex align-items-center">
		<div class="button r" id="button-10">
			<input type="checkbox" class="checkbox" checked>
			<div class="knobs" value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim' ? 'selected' : '')}}>
				<span>Sim</span>
			</div>
			<div class="layer" value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim' ? 'selected' : '')}}></div>
		</div>
		<div class="ml-2"><span class="ios-switch-control-description">Publicar ?</span>
		</div>
	</div>
</div>


<div class="col-md-4">
	<label class="heading-section mb-4">Tipo</label>
	@foreach ($tipos ?? '' as $tipo)
	<div class="form-radio">
		<div class="radio">
			<label>
			<option type="radio" name="radio-input" value="{{ $tipo->id }}" {{( isset($registro->tipo_id) && $registro->tipo_id == $tipo->id ? 'selected' : '')}}>{{$tipo->titulo}}</option>
				<span class="checkmark"></span>
			</label>
		</div>
	</div>
	@endforeach
</div> -->

<div class="form-group">
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
</div>

<div class="form-group">
<div class="input-field col s12">
	<select name="tipo_id">
		@foreach ($tipos ?? '' as $tipo)
		<option value="{{ $tipo->id }}" {{( isset($registro->tipo_id) && $registro->tipo_id == $tipo->id ? 'selected' : '')}}>
			{{$tipo->titulo}}</option>
		@endforeach
	</select>
	<label>Tipo da notícia</label>
</div>
</div>
