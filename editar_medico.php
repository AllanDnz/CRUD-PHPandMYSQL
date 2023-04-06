<h1>Editar medico</h1>
<?php
	$sql = "SELECT * FROM medicos WHERE id=".$_REQUEST["id"];

	$res = $connect->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">

	<input type="hidden" name="acao" value="editar">

	<input type="hidden" name="id" value="<?php print $row->id; ?>">

	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>CRM</label>
		<input type="text" name="crm" value="<?php print $row->crm; ?>" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="tel" name="telefone" class="form-control" value="<?php print $row->telefone; ?>" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required>
		<small>Formato: 99 91234-5678</small>
	</div>
	<div class="mb-3">
		<label>Especialidade</label>
		<input type="text" name="especialidadeUm" value="<?php print $row->especialidadeUm; ?>" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Segunda Especialidade</label>
		<input type="text" name="especialidadeDois" value="<?php print $row->especialidadeDois; ?>" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco" value="<?php print $row->endereco;?>" class="form-control" required>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>


</form>