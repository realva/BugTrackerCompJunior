<?php
    ini_set( 'default_charset', 'utf-8');
    include("connect.php");

    $id = $_GET['id'];

    $stmt = mysqli_prepare($mysqli, 'SELECT e.nome, e.descricao, e.tipo, e.data, p.nome FROM erro AS e INNER JOIN projeto as p ON projeto_idProjeto = idProjeto WHERE idErro = ?');
    mysqli_stmt_bind_param($stmt, 'i', $id);
    echo mysqli_error($mysqli);
    
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_bind_result($stmt, $nomeErro, $descricao, $tipo, $data, $nomeProjeto);
        mysqli_stmt_fetch($stmt);
        $data = date('d-m-Y', strtotime($data)); 
        $obj = ['nomeErro' => $nomeErro, 'descricao' => $descricao, 'tipo' => $tipo, 'data' => $data, 'nomeProjeto' => $nomeProjeto];
        mysqli_stmt_close ($stmt);
        $stmtSolution = mysqli_prepare($mysqli, 'SELECT descricao FROM solucao WHERE erro_idError = ?');
        mysqli_stmt_bind_param($stmtSolution, 'i', $id);
        echo mysqli_error($mysqli);
        if(mysqli_stmt_execute($stmtSolution)){
            mysqli_stmt_bind_result($stmtSolution, $descricao);
            if(mysqli_stmt_fetch($stmtSolution)){
                $obj['solucao'] = $descricao;
            }  
        }
        else{
            http_response_code(400);
            echo "Erro ao gravar registro !";
            echo mysqli_error($mysqli); 

        }
        echo json_encode($obj);
    } else{
        http_response_code(400);
        echo "Erro ao gravar registro !";
        echo mysqli_error($mysqli);
    }
    mysqli_close($mysqli);

?>