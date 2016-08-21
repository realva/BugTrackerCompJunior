<?php
	ini_set( 'default_charset', 'utf-8');
	include("connect.php");
	
	$nomeErro = $_POST['nomeErro'];
	$tipoErro = $_POST['tipoErro'];
	$erroProjeto = $_POST['erroProjeto'];
	$descricao = $_POST['mensagemErro'];
	$status = 'Pendente';

	$stmt = mysqli_prepare($mysqli, 'INSERT INTO `erro`(`nome`, `tipo`, `status`, `descricao`, `projeto_idProjeto`) VALUES (?, ?, ?, ?, ?)');
	echo mysqli_error($mysqli);
	mysqli_stmt_bind_param($stmt, 'ssssi', $nomeErro, $tipoErro, $status, $descricao, $erroProjeto);
	
	if(mysqli_stmt_execute($stmt)){
		echo "Registro gravado com sucesso!";
	} else {
		http_response_code(400);
		echo "Erro ao gravar registro !";
		echo mysqli_error($mysqli);
	}
	mysqli_close($mysqli);

?>