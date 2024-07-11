<div class="row justify-content-md">
	<div class="col-4">
		<div class="form-group">
			<input type="text" name="name" class="form-control form-control-shadow validade" value="{{ isset($usuario->name) ? $usuario->name : '' }}" required>
			<label class="form-control-placeholder" for="name">Nome</label>
		</div>
	</div>
</div>
	<div class="row justify-content-md">
	<div class="col-5">
		<div class="form-group">
			<input type="text" name="email" class="form-control form-control-shadow validade" value="{{ isset($usuario->email) ? $usuario->email : '' }}" required>
			<label class="form-control-placeholder" for="email2">Email</label>
		</div>
	</div>
	<div class="col-3">
		<div class="form-group"><input type="password" name="password" class="form-control form-control-shadow" required>
			<label class="form-control-placeholder" for="password">Senha</label>
		</div>
	</div>
</div>