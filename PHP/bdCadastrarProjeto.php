<?php
	ini_set( 'default_charset', 'utf-8');
	ini_set('date.timezone', 'America/Sao_paulo');

	$dataAtual = date('y/m/d');

	include("connect.php");
	
	$nomeProjeto = $_POST['nameProject'];
	$plataformaProjeto = $_POST['platform'];
	$tester = $_POST['member'];
	$descricao = $_POST['mensagemProjeto'];

	mysqli_query($mysqli, "SELECT * FROM projeto");
	$id = mysqli_affected_rows($mysqli) + 1;

	$query = "INSERT INTO `projeto`(`idProjeto`, `nome`, `plataforma`, `tester`, `descricao`, `data`) VALUES ('$id', '$nomeProjeto', '$plataformaProjeto', '$tester', '$descricao', '$dataAtual')";
	if(mysqli_query($mysqli, $query)){
		echo "Registro gravado com sucesso!";
	} else {
		echo "Erro ao gravar registro !";
	}
	mysqli_close($mysqli);

?>