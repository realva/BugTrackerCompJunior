<?php
	ini_set( 'default_charset', 'utf-8');
	include("connect.php");
	
	$dev = $_POST['dev'];
	$solucao = $_POST['solucao'];
	$idError = $_POST['id'];
	
	$stmt = mysqli_prepare($mysqli, 'INSERT INTO `solucao`(`desenvolvedor`, `descricao`, `erro_idError`) VALUES (?, ?, ?) ');
	echo mysqli_error($mysqli);
	mysqli_stmt_bind_param($stmt, 'ssi', $dev, $solucao, $idError);
	
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_close($stmt);
		$stmt = mysqli_prepare($mysqli, 'UPDATE erro SET status = \'Corrigido\' WHERE idErro = ?');
		mysqli_stmt_bind_param($stmt, 'i', $idError);
		echo mysqli_error($mysqli);

		if (mysqli_stmt_execute($stmt)) {
			echo "Registro gravado com sucesso!";
		} else {
			http_response_code(400);
			echo "Erro ao gravar registro !";
			echo mysqli_error($mysqli);	
		}
	} else {
		http_response_code(400);
		echo "Erro ao gravar registro !";
		echo mysqli_error($mysqli);
	}
	mysqli_close($mysqli);

?>