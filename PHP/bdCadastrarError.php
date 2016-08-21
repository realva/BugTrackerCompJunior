<?php
	ini_set( 'default_charset', 'utf-8');

	include("connect.php");
	
	$nomeErro = $_POST['nameError'];
	$tipoErro = $_POST['typeError'];
	$projeto = $_POST['errorProject'];
	$descricao = $_POST['mensagemErro'];
	$checkProject = false;
	$idProject = -1;

	mysqli_query($mysqli, "SELECT * FROM erro");
	$id = mysqli_affected_rows($mysqli) + 1;

	$queryProjeto = "SELECT idProjeto, nome FROM projeto";
	$dadosProjeto = mysqli_query($mysqli, $queryProjeto);

	while($row=mysqli_fetch_array($dadosProjeto,MYSQLI_ASSOC)){
		if(strcmp($projeto, $row["nome"]) == 0){
			$checkProject = true;
			$idProject = $row["idProjeto"];
		}
	}

	if($checkProject){
		$query = "INSERT INTO `erro`(`idErro`, `nome`, `tipo`, `descricao`, `projeto_idProjeto`) VALUES ('$id', '$nomeErro', '$tipoErro', '$descricao', '$idProject')";
		if(mysqli_query($mysqli, $query)){
			echo "Registro gravado com sucesso!";
		} else {
			echo "Erro ao gravar registro !";
		}
	}

	mysqli_close($mysqli);
?>