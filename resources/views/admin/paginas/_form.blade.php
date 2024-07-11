<div class="row justify-content-md">
	<div class="col-md-2">
		<div class="form-group">
			<input type="text" name="titulo" class="form-control form-control-shadow validade" value="{{ isset($pagina->titulo) ? $pagina->titulo : '' }}">
			<label class="form-control-placeholder" for="descricao">Título</label>
		</div>
	</div>
</div>
<div class="row justify-content-md">
	<div class="col-md-4">
		<div class="form-group">
			<input type="text" name="descricao" class="form-control form-control-shadow validade" value="{{ isset($pagina->descricao) ? $pagina->descricao : '' }}">
			<label class="form-control-placeholder" for="descricao">Descrição</label>
		</div>
	</div>
</div>

@if(isset($pagina->email))
<div class="row justify-content-md">
	<div class="col-md-4">
		<div class="form-group">
			<input type="text" name="email" class="form-control form-control-shadow validade" value="{{ isset($pagina->email) ? $pagina->email : '' }}">
			<label class="form-control-placeholder" for="email">E-Mail</label>
		</div>
	</div>
</div>
@endif
<br>
<div class="">
	<div class="form-group">
		<textarea name="texto" cols="90" class="form-contro" id="exampleFormControlTextarea3" rows="7">
		{{ isset($pagina->texto) ? $pagina->texto : '' }}
		</textarea>
		<label class="form-control-placeholder" for="exampleFormControlTextarea1">Texto</label>
	</div>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
			</div>
			<div class="custom-file">
				<input type="file" name="imagem" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
				<label class="custom-file-label" for="inputGroupFile01">Imagem</label>
			</div>
		</div>
		<br><br>
		<div class="form-group">
			<input type="text" class="file-path form-control form-control-shadow validade">
			<label class="form-control-placeholder" for="email">Iframe do Mapa</label>
		</div>

	</div>
	<div class="col m6 s12">
		@if(isset($pagina->imagem))
		<img width="120px" src="{{asset($pagina->imagem)}}">
		@endif
	</div>
</div>