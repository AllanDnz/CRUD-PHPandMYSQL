<?php
	switch($_REQUEST["acao"]){
		case 'cadastrar':
			$nome = $_POST["nome"];
			$crm = $_POST["crm"];
			$telefone = $_POST["telefone"];
			$especialidadeUm = $_POST["especialidadeUm"];
			$especialidadeDois = $_POST["especialidadeDois"];
			$endereco = $_POST["endereco"];

			$sql = "INSERT INTO medicos(nome, crm, telefone, especialidadeUm, especialidadeDois, endereco) VALUES ('{$nome}', '{$crm}','{$telefone}','{$especialidadeUm}', '{$especialidadeDois}', '{$endereco}')";

			$res = $connect->query($sql);

			if($res == true){
				print "<script>alert('Medico cadastrado com sucesso!!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Erro ao cadastrar novo medico!!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
		break;

		case 'editar':
			$nome = $_POST["nome"];
			$crm = $_POST["crm"];
			$telefone = $_POST["telefone"];
			$especialidadeUm = $_POST["especialidadeUm"];
			$especialidadeDois = $_POST["especialidadeDois"];
			$endereco = $_POST["endereco"];

			$sql = "UPDATE medicos SET 
						nome = '{$nome}',
						crm = '{$crm}',
						telefone = '{$telefone}',
						especialidadeUm = '{$especialidadeUm}',
						especialidadeDois = '{$especialidadeDois}',
						endereco = '{$endereco}'
						WHERE 
							id=".$_REQUEST["id"];

			$res = $connect->query($sql);

			if($res == true){
				print "<script>alert('Medico editado com sucesso!!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Erro ao editar um medico!!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

		break;
		
		case 'excluir':

			$sql = "DELETE FROM medicos WHERE id=".$_REQUEST["id"];

			$res = $connect->query($sql);

			if($res == true){
				print "<script>alert('Medico excluido com sucesso!!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Erro ao excluir um medico!!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

		break;  
	}