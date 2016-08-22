<?php
	ini_set( 'default_charset', 'utf-8');
	include("connect.php");

	$stmt = mysqli_prepare($mysqli, 'SELECT e.idErro, e.nome, p.nome, e.data, e.tipo FROM erro AS e INNER JOIN projeto AS p ON e.projeto_idProjeto = p.idProjeto');
	echo mysqli_error($mysqli);
	
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_bind_result($stmt, $id, $nome);

		$nomes = [];
		while (mysqli_stmt_fetch($stmt)) {
			$obj = ['id' => $id, 'nome' => $nome];
			$nomes[] = $obj;
		}
		echo json_encode($nomes);
	} else {
		http_response_code(400);
		echo "Erro ao gravar registro !";
		echo mysqli_error($mysqli);
	}
	mysqli_close($mysqli);

?>