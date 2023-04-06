<h1>Listar medico</h1>

<form method="GET" action="">
    <label for="search">Pesquisar:</label>
    <input type="text" name="search" id="search" placeholder="Digite o nome ou CRM do médico...">
    <input type="submit" value="Buscar" onclick="searchMedico(); return false;">
</form>


<?php
	
	if (isset($_GET['search'])) {
	    $termo = $_GET['search'];
	    $sql = "SELECT * FROM medicos WHERE nome LIKE '%$termo%' OR crm LIKE '%$termo%'";
	} else {
	    $sql = "SELECT * FROM medicos";
	}

	$res = $connect->query($sql);

		$quant = $res->num_rows;
		if($quant > 0){
			print "<table class='table table-hover table-striped'>";

			print "<th>Nome</th>";
			print "<th>CRM</th>";
			print "<th>Telefone</th>";
			print "<th>Especialidades</th>";
			print "<th>Especialidades</th>";
			print "<th>Ações</th>";

			while ($row = $res->fetch_object()) {
				print "<tr>";
				print "<td>".$row->nome."</td>";
				print "<td>".$row->crm."</td>";
				print "<td>".$row->telefone."</td>";
				print "<td>".$row->especialidadeUm."</td>";
				print "<td>".$row->especialidadeDois."</td>";
				print "<td>
						<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
						<button onclick=\"if(confirm('Deseja Exluir este medico?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
						</td>";
				print "</tr>";
			}
			print "</table>";
		}else{
			print "<p class='alert alert-danger'> Não foi encontrado nenhum medico!! </p>";
		}

?>

<button onclick="location.href='exportar.php'" class="btn btn-primary">Exportar Lista</button>

<script>
    function searchMedico() {
        var search = document.getElementById('search').value.trim();
        if (search != '') {
            window.location.href = '?page=listar&search=' + search;
        }
    }
</script>