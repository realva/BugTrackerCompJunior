<?php
	ini_set( 'default_charset', 'utf-8');
	include("php/connect.php");

	if (isset($_GET['nomeProjeto'])){
		$nome = $_GET['nomeProjeto'];
	}
	if (isset($_GET['plataformaProjeto'])) {
		$plataformaProjeto = $_GET['plataformaProjeto'];
	}
	if (isset($_GET['testerProjeto'])) {
		$tester = $_GET['testerProjeto'];
	}
	$where = [];
	$tipos = '';
	$valores = [];

	if (isset($nome) && $nome != '') {
		$where[] = 'nome = ?';
		$tipos = $tipos . 's';
		$valores[] = $nome;
	}
	if (isset($plataformaProjeto)) {
		$where[] = 'plataforma = ?';
		$tipos = $tipos . 's';
		$valores[] = $plataformaProjeto;
	}
	if (isset($testerProjeto)) {
		$where[] = 'tester = ?';
		$tipos = $tipos . 's';
		$valores[] = $tester;
	}
	if (!empty($where)) {
		$where = 'WHERE ' . implode(' AND ', $where);
	} else {
		$where = '';
	}

	$stmt = mysqli_prepare($mysqli, 'SELECT idProjeto, nome, data, tester, plataforma FROM projeto ' . $where . ' ORDER BY nome');
	switch (count($valores)) {
		case 1:
			mysqli_stmt_bind_param($stmt, $tipos, $valores[0]);
			break;
		case 2:
			mysqli_stmt_bind_param($stmt, $tipos, $valores[0], $valores[1]);
			break;
		case 3:
			mysqli_stmt_bind_param($stmt, $tipos, $valores[0], $valores[1], $valores[2]);
			break;
	}
	echo mysqli_error($mysqli);
	
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_bind_result($stmt, $idProjeto, $nome, $data, $tester, $plataforma);

		$nomes = [];
		while (mysqli_stmt_fetch($stmt)) {
			$data = date('d-m-Y', strtotime($data));
			$obj = ['id' => $idProjeto, 'nome' => $nome, 'data' => $data, 'tester' => $tester, 'plataforma' => $plataforma];
			$nomes[] = $obj;
		}
	} else {
		http_response_code(400);
		echo "Erro ao ler registros !";
		echo mysqli_error($mysqli);
	}
	mysqli_close($mysqli);

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <title>CompJúnior BugTracker | Listagem</title>
        <link rel="icon" href="imagens/joaninha.png">
        <meta name="description" content="Controlador de erros da CompJr">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/css.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <!-- jQuery e Tablesorter -->
        <script src="js/jquery-latest.js"></script>
        <script src="js/jquery.tablesorter.min.js"></script>
        <!-- Estilos necessários para o tema do tablesorter -->
        <link rel="stylesheet" href="css/blue/style.css">
        <script src="js/wow.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>

    <body>
        <!-- ALL-PAGE -->
        <div id="myContain" class="body">
            <!-- HEADER -->
            <header id="myHeader" class="myHeader">
                <nav class="navig">
                    <!-- BRAND e MENU-MOBILE -->
                    <div class="mobile-brand">
                        <button id="navi-btn" onclick="slidetoggle()" type="button" class="navbar-toggle collapsed menu-pad" data-toggle="collapse" data-target="#menu-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>

                        <section id="navi-slide">
                            <ul class="navi">
                                <li><a href="index.html" class="link-menu">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="flex-a dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <p>Cadastro</p>
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu a-cores">
                                        <li><a href="addError.html">Erros</a></li>
                                        <li><a href="addProject.html">Projetos</a></li>
                                    </ul>
                                </li>
                                <li><a href="search.html">Buscar</a></li>
                            </ul>

                        </section>


                        <a class="brand" href="index.html">
                        Compjunior
                    </a>
                    </div>
                    <!-- BRAND e MENU-MOBILE -->

                    <!-- MENU-DESKTOP -->
                    <div class="collapse navbar-collapse" id="munu-nav">
                        <ul class="navigator">
                            <li><a href="index.html" class="link-menu">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="flex-a dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <p>Cadastro</p>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu a-cores">
                                    <li><a href="addError.html">Erros</a></li>
                                    <li><a href="addProject.html">Projetos</a></li>
                                </ul>
                            </li>
                            <li><a href="search.html">Buscar</a></li>
                        </ul>
                    </div>
                    <!-- MENU-DESKTOP FIM -->
                </nav>
            </header>
            <!-- HEADER-FIM -->

            <!-- CONTEUDO -->
            <main id="myMain" class="myMain wow fadeIn">
                <div class="page-header text-center">
                    <h1>Lista de Projetos</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="tablesorter table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome do Projeto</th>
                                        <th>Data</th>
                                        <th>Tester</th>
                                        <th>Plataforma</th>
                                        <th>Listar erros</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <ul id="sortable">
                                        <?php
                                		foreach ($nomes as $linha) {
                                			echo '<tr>';
                                			echo '<td>' . $linha['id'] . '</td>';
                                			echo '<td>' . $linha['nome'] . '</td>';
                                			echo '<td>' . $linha['data'] . '</td>';
                                			echo '<td>' . $linha['tester'] . '</td>';
                                            echo '<td>' . $linha['plataforma'] . '</td>';
                                			echo '<td><button class="detail btn-primary rp" onclick=" window.location.href=\'listaErros.php?nomeProjetos=' . $linha['id'] . '\' "><span class="glyphicon glyphicon-info-sign"></span></button></td>';
                                			echo '</tr>';
                                		}
                                	?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>
            <!-- CONTEUDO FIM -->

            <!-- FOOTER -->
            <footer id="myFooter" class="myFooter">
                <a href="http://www.compjunior.com.br/new2015/">CompJr</a>
                <p>Desenvolvido com <span class="heart">♥</span> pela Comp Junior.</p>
            </footer>
            <!-- FOOTER FIM -->
        </div>
        <!-- ALL-PAGE FIM -->
    </body>

    </html>