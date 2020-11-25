<div class="row justify-content-md">
	<div class="col-4">
		<div class="form-group">
			<input type="text" name="titulo" class="form-control form-control-shadow validade" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}" required>
			<label class="form-control-placeholder" for="name">Título</label>
		</div>
	</div>
</div>