<?php
	ini_set( 'default_charset', 'utf-8');
	include("connect.php");
	
	$nomeProjeto = $_POST['nomeProjeto'];
	$plataformaProjeto = $_POST['platform'];
	$tester = $_POST['tester'];
	$descricao = $_POST['mensagemProjeto'];
	
	$stmt = mysqli_prepare($mysqli, 'INSERT INTO `projeto`(`nome`, `plataforma`, `tester`, `descricao`) VALUES (?, ?, ?, ?)');
	echo mysqli_error($mysqli);
	mysqli_stmt_bind_param($stmt, 'ssss', $nomeProjeto, $plataformaProjeto, $tester, $descricao);
	
	if(mysqli_stmt_execute($stmt)){
		echo "Registro gravado com sucesso!";
	} else {
		http_response_code(400);
		echo "Erro ao gravar registro !";
		echo mysqli_error($mysqli);
	}
	mysqli_close($mysqli);

?>