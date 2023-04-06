<h1>Novo medico</h1>

<form action="?page=salvar" method="POST">

	<input type="hidden" name="acao" value="cadastrar">

	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>CRM</label>
		<input type="text" name="crm" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="tel" name="telefone" class="form-control" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
		<small>Formato: 99 91234-5678</small>
	</div>
	<div class="mb-3">
		<label>Especialidade</label>
		<input type="text" name="especialidadeUm" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Segunda Especialidade</label>
		<input type="text" name="especialidadeDois" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco" class="form-control" required>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>


</form>