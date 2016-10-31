<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>CompJúnior BugTracker | Listagem de Projetos</title>
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
        <main id="myMain" class="myMain">

            <?php
                include("PHP/connect.php");
                $query = "Select * FROM projeto";
                $data = mysqli_query($mysqli, $query);
                $line = mysqli_affected_rows ($mysqli);
            ?>

            <div class="page-header text-center">
                <h1>Lista de Projetos</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="tablesorter table table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Nome do Projeto</th>
                                    <th>Data</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <ul id="sortable">

                                    <?php
                                        while($line = mysqli_fetch_array($data,MYSQLI_ASSOC)){
                                            echo "<tr>";
                                            echo "<td>".$line['idProjeto']."</td>";
                                            echo "<td>".$line['nome']."</td>";
                                            echo "<td>".$line['descricao']."</td>";
                                            echo "<td>".$line['tester']."</td>";
                                            echo "</tr>";
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